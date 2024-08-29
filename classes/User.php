<?php
	
	/** An attempt to require the app initialization configs once **/
	require_once('./configs/app_initialization.php');
	require_once('./classes/Validator.php');

	class User
	{

		/** User class properties **/
	    private static $full_name;
	    private static $username;
	    private static $email;
	    private static $password;
	    private static $password_confirmation;
	    private static $policy_checkbox;
	    private static $status;

		/** User Class Constructor  **/
	    public function __construct($user_data = [])
	    {
			/** Constructor body  **/
	        self::$full_name = $user_data['full_name'] ?? null;
	        self::$username = $user_data['username'] ?? null;
	        self::$email = $user_data['email'] ?? null;
	        self::$password = $user_data['password'] ?? null;
	        self::$password_confirmation = $user_data['password_confirmation'] ?? null;
	        self::$policy_checkbox = $user_data['policy_checkbox'] ?? null;
	        self::$status = $user_data['status'] ?? null;
	    }

	    /**
	     * Get all users records
	     * No pagination functionality is implemented
	     **/
	    public static function getAllUsers($user_id = null)
	    {
	        return self::$username;
	    }

		/** Attempt to create a new user record **/
		public static function createNewUser()
		{
			$validator = new Validator();

			/** Validating full_name **/
			$validator->validate('full_name', self::$full_name)->is_required()->is_string()->is_alphabet()->is_length_between(3, 30);

			/** Validating username **/
			$validator->validate('username', self::$username)->is_required()->is_string()->is_length_between(3, 20)->is_alphanumeric();
			
			/** Validating email **/
			$validator->validate('email', self::$email)->is_required()->is_string()->is_email()->is_length_between(3, 30);
			
			/** Validating password **/
			$validator->validate('password', self::$password)->is_required()->is_string()->is_secured_password(8, 16);

			/** Validating password_confirmation **/
			$validator->validate('password_confirmation', self::$password_confirmation)->is_required()->is_string()->is_password_confirmed(self::$password);

			/** Validating policy_checkbox **/
			$validator->validate('policy_checkbox', self::$policy_checkbox)->is_required()->is_checked('on');
			
			/** check if all validation has passed successfully **/
			$validator_errors = $validator->getErrorBag();
			if(empty($validator_errors)) {
				
				$valid_user_data = $validator->getValidatedRecords();

				/**
				 * Insert record to the database if neccessary
				**/
				return [
					'status' => 'successful',
					'message' => 'The new user record has been successgully created.',
					'data' => $valid_user_data,
				];

			} else {
				return [
					'status' => 'failed',
					'message' => 'Oops... An error occured while creating the new user record.',
					'errors' => $validator_errors
				];
			}
		}

	}