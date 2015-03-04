define(function(require,exports){
	var leftmenu = require('module/siteCommon/leftmenu.js');
	leftmenu.showLeftMenu();
	$('.menu').click(function(){
		var index = $(this).attr('index');
		leftmenu.showLeftMenu(index); 
	})
})
