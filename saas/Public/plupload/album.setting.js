var uploader = new plupload.Uploader({
    runtimes: 'html5,flash',
    browse_button: 'pickFiles', // you can pass in id...
    container: document.getElementById('uploader'), // ... or DOM Element itself
    url: upload_url,
    flash_swf_url: app_path + '/Public/assets/plupload/Moxie.swf',
    filters: {
        max_file_size: '1024mb'
    },
    init: {
        PostInit: function () {
            if ($("#uploader .tbody").length > 0) {
                $("#uploader .tbody .uploading").css("width", "100%");
                $("#uploader .thead").show();
                $("#uploader .tbody").each(function () {
                    id = $(this).attr("filename");
                    filename = $(this).attr("filename");
                    size = $(this).attr("size");
                    file = new plupload.File(id, filename, size);
                    file.status = plupload.DONE;
                    count = uploader.files.length;
                    uploader.files[count] = file;
                })
            }
        },

        FilesAdded: function (up, files) {
            for (var i in files) {
                var html = '<div id="' + files[i].id + '" class="col-xs-12 col-sm-4 mgt10">';
                html += '<img class="max220" src="">';
                html += '<div class="uploading"></div>';
                html += '</div>';
                $('#uploader').before(html);
            }
            up.start();
        },

        UploadProgress: function (up, file) {
            $("#" + file.id).find("a.del").hide();
            $("#" + file.id).find('.uploading').css("width", file.percent + "%");
        },

        FileUploaded: function (up, file, data) {
            var myObject = eval('(' + data.response + ')');
            if (myObject.status) {
                $("#" + file.id).attr("add_file", myObject.sid);
                var newUpload = $("#file_list").attr("new_upload");
                $("#file_list").attr("new_upload", newUpload + myObject.sid + ";");
                $("#" + file.id + ' img').attr("src", imageCache + myObject.save_name + '?x-oss-process=image/resize,w_300,h_300');
                $("#" + file.id + ' .uploading').hide();
            } else {
                ui_alert(myObject.message, function () {
                    $("#" + file.id).remove();
                });
            }
        }
    }
});
uploader.init();

window.onbeforeunload = function (e) {
    e = e || window.event;
    // For IE and Firefox prior to version 4
    var newUpload = $("#file_list").attr("new_upload");
    if (newUpload.length) {
        if (e) {
            e.returnValue = '上传的附件将被删除，确定退出吗？';
        }
        // For Safari
        window.onunload = function () {
            sendAjax(del_url, 'sid=' + $(this).attr("id"));
        };
        return '上传的附件将被删除，确定退出吗？';
    }
};

$(document).on("click", ".uploader a.del", function () {
    var $obj = $(this).parents("li");
    var id = $obj.attr("id");
    var file = uploader.getFile(id);
    ui_confirm("确定要删除吗？", function () {
        var $add_file = $obj.attr("add_file");
        var $new_upload = $("#file_list").attr("new_upload");
        $("#file_list").attr("new_upload", $new_upload.replace($add_file + ";", ""));

        if ($add_file.length > 0) {
            $obj.remove();
            sendAjax(del_url, 'sid=' + $(this).attr("id"));
        } else {
            uploader.removeFile(file);
            $obj.remove();
        }
    });
});