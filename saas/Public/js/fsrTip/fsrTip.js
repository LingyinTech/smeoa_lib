$(function() {
	$.fn.fsrTip = function(options) {
		var defaults = {
			Event : 'mouseover',
			id : '1',
			name : '请重试',
			tel : '无',
			qq : '无',
		};
		var options = $.extend(defaults, options);

		$('body').prepend("<div id='user_" + options.id + "' class='user'><span id='remove_" + options.id + "' style='position:absolute;right:15px;top:10px;'>X</span><span class='bl'></span><div class='out'><div class='fsrin'><div>姓名：" + options.name + "<br />联系电话：" + options.tel + "<br />QQ号码：" + options.qq + "</div></div></div></div>");

		var $this = $(this);
		var $btip = $("#user_" + options.id);
		var $remove = $("#remove_"+options.id);

		$this.on(options.Event, function() {
			var offset = $(this).offset();
			var h = $this.height();
			var w = $this.width();
			$btip.css({
				"left" : offset.left + (w / 2) - 25,
				"top" : offset.top - $btip.height() - 5
			}).show();
		});
		$remove.on('click', function() {
			$('.user').each(function(){
				$(this).remove();
			});
		});
	}
});
