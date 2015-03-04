define(function(require,exports){
	template = require('template');
	$('.menu').click(function(){
		var index = $(this).attr('index');
		$.post('/admin/home/getsubmenu',{index:index},function(data){
			var html = template('submenu',data);
			document.getElementById('leftbar').innerHTML = html;
			//$('#leftbar').innerHtml(html);
		},"json")
	})
})
