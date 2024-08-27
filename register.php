
<?php
	require_once('./classes/Smarty.php');

	$smarty = Smarty::createSmartyInstance();
	$smarty->display('register.tpl');