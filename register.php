
<?php
	require_once('./classes/Smarty.php');
	require_once('./classes/User.php');

	/** Initialize and return the smarty templating engine instance **/
	$smarty = Smarty::createSmartyInstance();


	/** Processing new registration **/
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"]) && htmlspecialchars($_POST["register"]) == "Register") {
		$user_data = [
			'full_name' => (isset($_POST['full_name']) ? $_POST['full_name'] : null),
			'username' => (isset($_POST['username']) ? $_POST['username'] : null),
			'email' => (isset($_POST['email']) ? $_POST['email'] : null),
			'password' => (isset($_POST['password']) ? $_POST['password'] : null),
			'password_confirmation' => (isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : null),
			'policy_checkbox' => (isset($_POST['policy_checkbox']) ? $_POST['policy_checkbox'] : null),
		];

		/** Initializing the User class instance **/
		$user = new User($user_data);
		$response = $user->createNewUser();
		
		$smarty->assign('status', $response['status']);
		$smarty->assign('message', $response['message']);
		if ($response['status'] == 'successful') {
			$smarty->assign('valid_data', $response['data']);
		} else if ($response['status'] == 'failed') {
			$smarty->assign('errors', $response['errors']);
		}
	}	

	$smarty->assign('full_name', isset($_POST['full_name']) ? $_POST['full_name'] : '');
	$smarty->assign('username', isset($_POST['username']) ? $_POST['username'] : '');
	$smarty->assign('email', isset($_POST['email']) ? $_POST['email'] : '');
	$smarty->assign('password', isset($_POST['password']) ? $_POST['password'] : '');
	$smarty->assign('password_confirmation', isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : '');
	$smarty->assign('policy_checkbox', isset($_POST['policy_checkbox']) ? 'on' : '');

	$smarty->display('register.tpl');