var uploader = new plupload.Uploader({
	runtimes : 'html5,flash',
	browse_button : 'pickfiles', // you can pass in id...
	container: document.getElementById('uploader'), // ... or DOM Element itself
	url : upload_url,
	flash_swf_url : app_path+'/Public/assets/plupload/Moxie.swf',	
	filters : {
		max_file_size : '1024mb'
	},
	init: {
		PostInit: function() {
			if($("#uploader .tbody").length>0){
				$("#uploader .tbody .loading").css("width","100%");
				$("#uploader .thead").show();
				$("#uploader .tbody").each(function(){
					id=$(this).attr("filename");
					filename=$(this).attr("filename");
					size=$(this).attr("size");
					file=new plupload.File(id,filename,size);
					file.status=plupload.DONE;
					count=uploader.files.length;
					uploader.files[count]=file;
				})
			}
		},

		FilesAdded: function(up,files){
			for(var i in files){
				html='<li class="tbody" id="'+files[i].id+'">\n';
				html+='<div class="loading"></div>\n';
				html+='<div class="data">\n';
				html+='<span class="del text-center"><a class="link del">删除</a></span>\n';
				html+='<span class="size text-right">'+plupload.formatSize(files[i].size)+'</span>';
				html+='<span class="auto autocut">'+files[i].name+'</span>';
				html+='</li>';
				html+='</div>\n';
				$('#file_list').append(html);
			}			
			up.start();
		},

		UploadProgress: function(up, file) {
			$("#"+file.id).find("a.del").hide();
			$("#"+file.id).find('.loading').css("width",file.percent+"%");
		},

		FileUploaded: function(up, file,data) {			
			var myObject = eval('(' + data.response + ')');			
			if(myObject.status){
				if($("#add_file").length!=0){
					$("#add_file").val($("#add_file").val()+myObject.sid+";")
				}
				$("#"+file.id).attr("add_file",myObject.sid);
				$new_upload=$("#file_list").attr("new_upload");
				$("#file_list").attr("new_upload",$new_upload+myObject.sid+";");
				if($("#save_name").length!=0){
					$("#save_name").val($("#save_name").val()+myObject.savename+";")
				}
				$("#"+file.id).find("a.del").show();
			}else{
				ui_alert(myObject.message,function(){
					$("#"+file.id).remove();
				});
			}
		}
	}
});
uploader.init();

var uploadprev = new plupload.Uploader({
	runtimes : 'html5,flash',
	browse_button : 'prevfiles', // you can pass in id...
	container: document.getElementById('uploadprev'), // ... or DOM Element itself
	url : upload_url,
	flash_swf_url : app_path+'/Public/assets/plupload/Moxie.swf',	
	filters : {
		max_file_size : '64mb'
	},
	init: {
		PostInit: function() {
			if($(".uploadprev .tbody").length>0){
				$(".uploadprev .tbody .loading").css("width","100%");
				$(".uploadprev .thead").show();
				$(".uploadprev .tbody").each(function(){
					id=$(this).attr("filename");
					filename=$(this).attr("filename");
					size=$(this).attr("size");
					file=new plupload.File(id,filename,size);
					file.status=plupload.DONE;
					count=uploader.files.length;
					uploader.files[count]=file;
				})
			}
		},

		FilesAdded: function(up,files){
			for(var i in files){
				html='<li class="tbody" id="'+files[i].id+'">\n';
				html+='<div class="loading"></div>\n';
				html+='<div class="data">\n';
				html+='<span class="del text-center"><a class="link del">删除</a></span>\n';
				html+='<span class="size text-right">'+plupload.formatSize(files[i].size)+'</span>';
				html+='<span class="auto autocut">'+files[i].name+'</span>';
				html+='</li>';
				html+='</div>\n';
				$('#prev_list').append(html);
			}			
			up.start();
		},

		UploadProgress: function(up, file) {
			$("#"+file.id).find("a.del").hide();
			$("#"+file.id).find('.loading').css("width",file.percent+"%");
		},

		FileUploaded: function(up, file,data) {			
			var myObject = eval('(' + data.response + ')');			
			if(myObject.status){
				if($("#add_file").length!=0){
					$("#add_file").val($("#add_file").val()+myObject.sid+";")
				}
				$("#"+file.id).attr("add_file",myObject.sid);
				$new_upload=$("#prev_list").attr("new_upload");
				$("#prev_list").attr("new_upload",$new_upload+myObject.sid+";");
				if($("#save_name").length!=0){
					$("#save_name").val($("#save_name").val()+myObject.savename+";")
				}
				$("#"+file.id).find("a.del").show();
			}else{
				ui_alert(myObject.message,function(){
					$("#"+file.id).remove();
				});
			}
		}
	}
});
uploadprev.init();

var uploadPaymentVoucher = new plupload.Uploader({
	runtimes : 'html5,flash',
	browse_button : 'payment_voucher', // you can pass in id...
	container: document.getElementById('payment_voucher_container'), // ... or DOM Element itself
	url : upload_url,
	flash_swf_url : app_path+'/Public/assets/plupload/Moxie.swf',
	filters : {
		max_file_size : '5mb',
		mime_types: [
			{title: 'Image files', extensions: 'jpg,gif,png'},
		],
	},
	init: {
		PostInit: function() {

		},

		FilesAdded: function(up,files){
			up.start();
		},

		FileUploaded: function (up, file, data) {
			var myObject = eval('(' + data.response + ')');
			if (myObject.status) {
				$('.payment_voucher .fa-search').removeClass('display-none');
				$('.payment_voucher input[name=payment_voucher]').val(myObject.sid);
			} else {
				ui_alert(myObject.message, function () {
					$("#" + file.id).remove();
				});
			}
		}
	}
});
uploadPaymentVoucher.init();

window.onbeforeunload = function (e){ 
	e = e || window.event; 
	// For IE and Firefox prior to version 4 
	$new_upload=$("#file_list").attr("new_upload");
	if($new_upload.length){
		if (e) { 
			e.returnValue = '上传的附件将被删除，确定退出吗？'; 
		}
		// For Safari 
	   window.onunload = function(){
			sendAjax(del_url, 'sid=' + $(this).attr("id"));
		};
		return '上传的附件将被删除，确定退出吗？'; 
	}
}; 

$(document).on("click", "#uploader a.del", function(){
	$obj=$(this).parents("li");
	id=$obj.attr("id");
	file=uploader.getFile(id);
	ui_confirm("确定要删除吗？",function(){				
		$add_file=$obj.attr("add_file");
		$new_upload=$("#file_list").attr("new_upload");
		$("#add_file").val($("#add_file").val().replace($add_file + ";", ""));
		$("#file_list").attr("new_upload",$new_upload.replace($add_file + ";", ""));

		if($add_file.length>0){
			$obj.remove();
			sendAjax(del_url, 'sid=' + $(this).attr("id"));
		}else{
			uploader.removeFile(file);
			$obj.remove();
		}
	});
});

$(document).on("click", ".uploader a.del", function(){
	$obj=$(this).parents("li");
	id=$obj.attr("id");
	file=uploader.getFile(id);
	ui_confirm("确定要删除吗？",function(){				
		$add_file=$obj.attr("add_file");
		$new_upload=$("#file_list").attr("new_upload");
		$("#file_list").attr("new_upload",$new_upload.replace($add_file + ";", ""));

		if($add_file.length>0){
			$obj.remove();
			sendAjax(del_url, 'sid=' + $(this).attr("id"));
		}else{
			uploader.removeFile(file);
			$obj.remove();
		}
	});
});

$(document).on("click", ".uploadprev a.del", function(){
	$obj=$(this).parents("li");
	id=$obj.attr("id");
	file=uploadprev.getFile(id);
	ui_confirm("确定要删除吗？",function(){				
		$add_file=$obj.attr("add_file");
		$new_upload=$("#prev_list").attr("new_upload");
		$("#prev_list").attr("new_upload",$new_upload.replace($add_file + ";", ""));

		if($add_file.length>0){
			$obj.remove();
			sendAjax(del_url, 'sid=' + $(this).attr("id"));
		}else{
			uploadprev.removeFile(file);
			$obj.remove();
		}
	});
});