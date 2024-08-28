<?php
/* Smarty version 5.4.0, created on 2024-08-28 15:46:29
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cf2a351acd56_08325562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08cbd05b720dec46fdeece8db211555821985f02' => 
    array (
      0 => 'login.tpl',
      1 => 1724852202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_views/header.tpl' => 1,
    'file:common_views/footer.tpl' => 1,
  ),
))) {
function content_66cf2a351acd56_08325562 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view';
$_smarty_tpl->renderSubTemplate("file:common_views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="container">
	<p>
		<form action="<?php echo htmlspecialchars((string)$_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
" id="form" method="post">
			<h1>Login</h1>
			<div class="input-group">
				<label for="username">
					Username or Email - 
					<small class="disabled_input">(<i>Disabled</i>)</small>
				</label>
				<input type="text" id="username_email" name="username_email" required="required" disabled="disabled" placeholder="Provide username or email - Input is disabled.">
				<div class="error"></div>
			</div>
			<div class="input-group">
				<label for="password">
					Password -
					<small class="disabled_input">(<i>Disabled</i>)</small>
				</label>
				<input type="password" id="password" name="password" required="required" disabled="disabled" placeholder="Provide password - Input is disabled.">
				<div class="error"></div>
			</div>
			<button type="submit" disabled='disabled'>Login Now</button>
			<div class="text">
				<h5>Don't have an account? <a href="register.php">Register now</a></h5>
			</div>

			
		 </form>
	</p>
 </div>
 
 <?php $_smarty_tpl->renderSubTemplate("file:common_views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
