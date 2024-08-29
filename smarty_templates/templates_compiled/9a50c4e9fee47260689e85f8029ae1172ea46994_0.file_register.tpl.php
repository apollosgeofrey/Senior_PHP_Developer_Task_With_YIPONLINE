<?php
/* Smarty version 5.4.0, created on 2024-08-29 05:38:14
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66cfed269f3fa8_39726019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a50c4e9fee47260689e85f8029ae1172ea46994' => 
    array (
      0 => 'register.tpl',
      1 => 1724901799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common_views/header.tpl' => 1,
    'file:common_views/success_page.tpl' => 1,
    'file:common_views/footer.tpl' => 1,
  ),
))) {
function content_66cfed269f3fa8_39726019 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/Senior_PHP_Developer_Task_With_YIPONLINE/smarty_templates/templates_view';
$_smarty_tpl->renderSubTemplate("file:common_views/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php if ((null !== ($_smarty_tpl->getValue('valid_data') ?? null))&$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('valid_data')) > 0) {?>
	<?php $_smarty_tpl->renderSubTemplate("file:common_views/success_page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}?>

<div class="container">
	<form action="<?php echo htmlspecialchars((string)$_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
" id="form" method="post">
		<h1>Register</h1>
		<div class="input-group">
			<label for="full_name">Fullname:</label>
			<input type="text" id="full_name" name="full_name" placeholder="Enter yout full name" value="<?php echo $_smarty_tpl->getValue('full_name');?>
">
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['full_name'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['full_name']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['full_name'], 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<div class="input-group">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Preferred username" value="<?php echo $_smarty_tpl->getValue('username');?>
">
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['username'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['username']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['username'], 'error');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach1DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<div class="input-group">
			<label for="email">Email:</label>
			<input type="text" id="email" name="email" placeholder="Valid email address" value="<?php echo $_smarty_tpl->getValue('email');?>
">
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['email'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['email']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['email'], 'error');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach2DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<div class="input-group">
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Security password" value="<?php echo $_smarty_tpl->getValue('password');?>
">
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['password'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['password']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['password'], 'error');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach3DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<div class="input-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password confirmation" value="<?php echo $_smarty_tpl->getValue('password_confirmation');?>
">
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['password_confirmation'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['password_confirmation']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['password_confirmation'], 'error');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach4DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<div class="policy_checkbox">
			<h6>
				<label>
					<input type="checkbox" name="policy_checkbox" <?php if ($_smarty_tpl->getValue('policy_checkbox') == 'on') {?>checked<?php }?>>
					I accept all <a href="#">terms, conditions & policies.</a>
				</label>
			</h6>
			<div class="error">
				<?php if ((null !== ($_smarty_tpl->getValue('errors')['policy_checkbox'] ?? null)) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('errors')['policy_checkbox']) > 0) {?>
					<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors')['policy_checkbox'], 'error');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach5DoElse = false;
?>
						<?php echo $_smarty_tpl->getValue('error');?>
<br/>
					<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>
		</div>
		<button type="submit" name="register" value="Register">Register</button>
		<div class="text">
			<h5>Already have an account? <a href="login.php">Login now</a></h5>
		</div>
	 </form>
 </div>
 
 <?php $_smarty_tpl->renderSubTemplate("file:common_views/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
