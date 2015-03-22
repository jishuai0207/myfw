<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="/static/style/common/fw.css">
</head>
<body>
	<input type="hidden" Id="moduleId" pagename="aindex"/>
	<div class="header">
		<ul>
		<?php foreach($menu as $k => $v){ ?>
			<li class="menu" index="<?php echo $k;?>"><?php echo $v['name'];?></li>
		<?php }?>
		</ul>
	</div>
	<div class="center">
		<div class="left_menu">
				<div id="leftbar"></div>			
		</div>
		<div class="main">
			<iframe name="main" class="main_content" frameborder="0"></iframe>
		</div>
	</div>

<?php include ROOT.'application/views/include/template/leftmenu.php';?>	
<?php include ROOT.'application/views/include/js.php';?>
</body>
</html>
