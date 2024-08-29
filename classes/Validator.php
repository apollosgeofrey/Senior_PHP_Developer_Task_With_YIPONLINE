<?php
	
	/** An attempt to require the app initialization configs once **/
	require_once('./configs/app_initialization.php');	

	class Validator
	{
		/** Initialize the validatable item property **/
		private $validatable_key = null;
		private $validatable_value = null;
		private static $error_bag = [];
		private static $validatedRecords = [];

		/** Validator Class Constructor  **/
		public function __construct()
		{
			/** Constructor body  **/
		}

		/**
		 * Initialize the validaable parameter with the key => value pair
		 * The key is always the input paraneter name
		 * The value is always the input parameter value
		 **/
		/** Initialize the validaable parameter with the key => value pair **/
		public function validate($validatable_key, $validatable_value)
		{
			$this->validatable_key = $validatable_key;
			$this->validatable_value = $validatable_value;
			return $this;
		}

		/** is_required item validation **/
		public function is_required()
		{
			if (empty(trim($this->validatable_value ?? ''))) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." is required.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

			return $this;
		}
	
		/** is_string item validation **/
		public function is_string()
		{
			if (!is_string($this->validatable_value)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must be a string.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_alphabet item validation **/
		public function is_alphabet()
		{
			if (!preg_match('/^[a-zA-Z ]+$/', $this->validatable_value)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." can only be alphabetical letters.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_length_between item validation **/
		public function is_length_between(int $min, int $max)
		{
			$validatable_value = trim($this->validatable_value);
			$validatable_value_length = strlen($validatable_value);

			if (!($validatable_value_length >= $min)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must have a length greater than or equal to {$min} characters.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

			if (!($validatable_value_length <= $max)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must have a length less than or equal to {$max} characters.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_numeric item validation **/
		public function is_numeric()
		{
			if (!is_numeric($this->validatable_value)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must be a number.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_alphanumeric item validation **/
		public function is_alphanumeric()
		{
			if (!preg_match('/^[a-zA-Z0-9]+$/', $this->validatable_value)) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." can only be alphanumeric.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_email item validation **/
		public function is_email()
		{
			if (empty(filter_var($this->validatable_value, FILTER_VALIDATE_EMAIL))) {
				$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." provided must be a valid email address.";
				self::pushToErrorBag($this->validatable_key, $err_msg);
				self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }
			return $this;
		}

		/** is_secured_password item validation **/
		public function is_secured_password($min_length = 8, $max_length = 32)
		{	

			// Check if password length is at least $min_legth characters long
			$password_length = strlen($this->validatable_value);
		    if ($password_length < $min_length) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must be at least {$min_length} character long.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

			// Check if password length is at most $max_length characters long
		    if ($password_length > $max_length) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must be at most {$max_length} character long.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    // Check if password contains at least one upper case letter
		    if (!(preg_match('/[A-Z]/', $this->validatable_value))) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must contain at least one upper case letter.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    // Check if password contains at least one lower case letter
		    if (!(preg_match('/[a-z]/', $this->validatable_value))) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must contain at least one lower case letter.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    // Check if password contains at least one number
		    if (!(preg_match('/\d/', $this->validatable_value))) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must contain at least one number.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    // Check if password contains at least one special character
		    if (!(preg_match('/[\W_]/', $this->validatable_value))) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." must contain at least one special character.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    return $this;
		}

		/** is_password_confirmed item validation **/
		public function is_password_confirmed($password='')
		{
		    if ($password != $this->validatable_value) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." provided do not match.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    return $this;
		}

		/** is_checked item validation **/
		public function is_checked($is_checked=false)
		{
		    if ($is_checked !== $this->validatable_value) {
		    	$err_msg = "The ". (self::removeUnderscoreAndCapitalizeWords($this->validatable_key)) ." field must be checked.";
		    	self::pushToErrorBag($this->validatable_key, $err_msg);
		    	self::removeFromValidBag($this->validatable_key);
		    } else {
		    	self::pushToValidBag($this->validatable_key, $this->validatable_value);
		    }

		    return $this;
		}

		/** Remove underscore and capitalize words **/
		private static function removeUnderscoreAndCapitalizeWords($string = '')
		{
			$string = str_replace('_', ' ', $string);
			$string = ucwords($string);
			return $string;
		}

		/** Pushing errors to error bag **/
		private static function pushToErrorBag($err_key, $err_msg)
		{
			if (isset(self::$error_bag[$err_key])) {
				array_push(self::$error_bag[$err_key], $err_msg);
			} else {
				self::$error_bag[$err_key] = [$err_msg];
			}
		}

		/** Pushing validated records to validated bag **/
		private static function pushToValidBag($validated_key, $validated_value)
		{
			if (!isset(self::$validatedRecords[$validated_key])) {
				self::$validatedRecords[$validated_key] = $validated_value;
			}
		}

		/** Removing in-valid records from validated bag **/
		private static function removeFromValidBag($in_validated_key)
		{
			if (isset(self::$validatedRecords[$in_validated_key])) {
				unset(self::$validatedRecords[$in_validated_key]);
			}
		}

		/** Get the error bag **/
		public function getErrorBag()
		{
			return self::$error_bag;
		}

		/** Get all records that passed validation checks **/
		public function getValidatedRecords()
		{
			return self::$validatedRecords;			
		}
	}

