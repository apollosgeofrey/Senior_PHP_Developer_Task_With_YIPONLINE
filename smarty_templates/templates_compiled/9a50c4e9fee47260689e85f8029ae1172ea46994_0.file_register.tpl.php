<?php
/* Smarty version 5.4.0, created on 2024-08-28 15:46:30
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cf2a363b74e3_45792947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a50c4e9fee47260689e85f8029ae1172ea46994' => 
    array (
      0 => 'register.tpl',
      1 => 1724852194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_views/header.tpl' => 1,
    'file:common_views/footer.tpl' => 1,
  ),
))) {
function content_66cf2a363b74e3_45792947 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view';
$_smarty_tpl->renderSubTemplate("file:common_views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<!-- required="required" -->

<div class="container">
	<form action="<?php echo htmlspecialchars((string)$_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
" id="form" method="post">
		<h1>Register</h1>
		<div class="input-group">
			<label for="full_name">Fullname:</label>
			<input type="text" id="full_name" name="full_name" placeholder="Enter yout full name">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Preferred username">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" placeholder="Valid email address">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Security password">
			<div class="error"></div>
		</div>
		<div class="input-group">
			<label for="cpassword">Confirm Password:</label>
			<input type="password" id="cpassword" name="cpassword" placeholder="Password confirmation">
			<div class="error"></div>
		</div>
		<div class="policy">
			<h6>
				<label>
					<input type="checkbox" required="required">
					I accept all <a href="#">terms & condition.</a>
				</label>
			</h6>
		</div>
		<button type="submit">Register</button>
		<div class="text">
			<h5>Already have an account? <a href="login.php">Login now</a></h5>
		</div>
	 </form>
 </div>
 
 <?php $_smarty_tpl->renderSubTemplate("file:common_views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
