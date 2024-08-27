<?php
/* Smarty version 5.4.0, created on 2024-08-28 01:20:32
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66ce5f4055bef2_35454703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a50c4e9fee47260689e85f8029ae1172ea46994' => 
    array (
      0 => 'register.tpl',
      1 => 1724794653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ce5f4055bef2_35454703 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view';
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="text-align:center; margin-top:55px;">
	<div>
		Body of Register page
		
	</div>

	<br>
	<div >
		<a href="index.php">
			 Back to Homepage
		</a>		

		<div>
			<form action="" method="post">
				<p>
					<input type="text" name="" placeholder="full_name" required="true">
				</p>

				<p>
					<input type="email" name="" placeholder="email" required="true">
				</p>

				<p>
					<input type="password" name="" placeholder="password" required="true">
				</p>

				<p>
					<button type="submit" value="register">
						Register
					</button>
				</p>
			</form>
		</div>
	</div>
</body>
</html><?php }
}
