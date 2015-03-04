define(function(require,exports){
	var template = require('template');
	var init = function(){
		showLeftMenu(0);
	}
	//显示菜单
	exports.showLeftMenu = function(index){
		$.post('/admin/home/getsubmenu',{index:index},function(data){
			var html = template('submenu',data);
			document.getElementById('leftbar').innerHTML = html;
		},"json")
	}
})
