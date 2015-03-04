<!DOCTYPE html>
<html>
<head>
</head>
<body>
<input type="hidden" Id="moduleId" pagename="aindex"/>
<ul>
<?php foreach($menu as $k => $v){ ?>
	<li class="menu" index="<?php echo $k;?>"><?php echo $v['name'];?></li>
<?php }?>
</ul>
<iframe name="main"></iframe>
<?php include ROOT.'application/views/include/js.php';?>
<?php include ROOT.'application/views/include/template/leftmenu.php';?>
<div id="leftbar">
</div>
</body>
</html>
