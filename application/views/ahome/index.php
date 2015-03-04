<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul>
<?php foreach($menu as $k => $v){ ?>
	<li class="menu" index="<?php echo $k;?>"><?php echo $v['name'];?></li>
<?php }?>
</ul>
<?php include ROOT.'application/views/include/js.php';?>
<?php include ROOT.'application/views/include/template/leftmenu.php';?>
<div id="leftbar">
</div>
</body>
</html>
