<?php
	
	/** An attempt to require the app initialization configs once **/
	require_once('./configs/app_initialization.php');	

	class User
	{

		/** User class properties **/
	    private $id;
	    private $full_name;
	    private $username;
	    private $email;
	    private $password;
	    private $status;
	    private $date_created;

		/** User Class Constructor  **/
	    public function __construct($id=null, $username, $email, $password, $status='active', $date_created=null)
	    {
			/** Constructor body  **/
	        $this->id = $id;
	        $this->username = $username;
	        $this->email = $email;
	        $this->password = $password;
	        $this->status = $status;
	        $this->date_created = $date_created;
	    }

	    /** Get a user record by their ID **/
	    public static function getUserById($user_id = null)
	    {
	        return $this->username;
	    }

	    /** Get a user record by their email address **/
	    public static function getUserByEmail($user_id = null)
	    {
	        return $this->username;
	    }

	    /** Get a user record by their username **/
	    public static function getUserByUsername($user_id = null)
	    {
	        return $this->username;
	    }

		/** Attempt to create a new user record **/
		public static function createNewUser()
		{
			// 
		}

	}