$(function(){
	var d = new Date(),
		dateOpt = {
			lang: 'zh',
            display: 'bottom',
            startYear: d.getFullYear(),
            endYear: d.getFullYear() + 1,
            dateFormat: 'yy-mm-dd'
		};
	
	// $('[data-role="date"]').mobiscroll().date(dateOpt);
	$('[data-role="date"]').each(function(){
		if($(this).val()){
			$(this).mobiscroll().date(dateOpt);
		}else{
			$(this).val(' ').mobiscroll().date(dateOpt);
		}		
	});

	var request = {
				size: 0,
				loadSize: 0
			};


	$('#subBtn').on('click', function(){
		request.errorStr = '';
		
		if($('#tel').val()){
			if(!/1\d{10}/.test($('#tel').val())){
				$.alert({txt: '客户联系电话格式不正确'});
				return false;
			}
		}
		
		if($('#qq').val()){
			if(!/\d{4,11}/.test($('#qq').val())){
				$.alert({txt: '秋秋号码格式不正确'});
				return false;
			}
		}	
		
		$('.required').each(function(){
			var parent, parent1;

			if(this.tagName == 'UL'){
				parent = $(this).parents('dd').prev();
				if($('li', this).length == 1){
					// errorStr += $(this).attr('placeholder') + '</br>';
					parent.addClass('error');
				}else{
					parent.removeClass('error');
				}
			}else{
				parent1 = $(this).parent().prev();
				if(this.value == ''){
					// errorStr += this.placeholder + '</br>';
					$(this).addClass('error');
					parent1.addClass('error');
				}else{
					$(this).removeClass('error');
					parent1.removeClass('error');
				}
			}
		});
		
		
		
		// if(_tel.hasClass('required')){
		// 	if(_tel.val()){
		// 		if(!/1\d{10}/.test(_tel.val())){
		// 			errorStr += '手机号码格式不正确';
		// 		}
		// 	}
		// }else{
		// 	if(!/1\d{10}/.test(_tel.val())){
		// 		errorStr += '手机号码格式不正确';
		// 	}
		// }

		if($('.error').length){
			$.alert({txt: '请完善资料再提交'});
			return false;
		}

		//图片上传
		if(!request.loader){
			request.loader = new Loading();
		}else{
			request.loader.init();
		}

		var uploadCallback = function(e){
				var res = JSON.parse(e.target.responseText);

				request.loadSize ++;

                if(res.errno == 1){
                    request.errorStr += res.msg + '<br>';
                }else{
                	$(this).addClass('uploaded').data('url', res.url);
                }

                if(request.loadSize == request.size){
                	if(request.errorStr){
                		request.loader.close();
                		$.alert({txt: request.errorStr});
                	}else{
                        config.subFn(request.loader,request.size);
                    }

                }

			},
			imgUpload = function(name, file){
				var xhr = new XMLHttpRequest(),
					fd = new FormData(),
					_this = this;

				fd.append(name, file);
				xhr.open("post", config.uploadUrl, true);
				xhr.addEventListener("load", function(e){
					uploadCallback.call(_this, e);
	            }, false);

	            xhr.send(fd);
			},
			hasUpload = false;

		$('[type="file"]').each(function(){
			if(this.className == 'uploaded') return;

			if(this.files.length){
				hasUpload = true;
				request.size ++;
	            imgUpload.call(this, this.name, this.files[0]);
			}
		});
		if(!hasUpload) config.subFn(request.loader, request.size);
		return false;
	});
	
	$('#addressBox li').on('click', function(e){
		if(e.target.tagName !== 'A'){
			$(this).find('a').click();
		}
	});
});