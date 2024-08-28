<?php
	
	/** An attempt to require the app initialization configs once **/
	require_once('./configs/app_initialization.php');	

	/** Importing Smarty parent class **/
	use \Smarty\Smarty as ParentSmarty;


	class Smarty extends ParentSmarty
	{
		/** Smarty Class Constructor  **/
		public function __construct()
		{
			/** Constructor body  **/
		}

		/** Creates and instance of the Smarty Class Constuctor  **/
		public static function createSmartyInstance()
		{
			/** Instantiate the parent Smarty class and return it  **/
			$parentSmartyObject = new parent();
			$parentSmartyObject->setTemplateDir('./smarty_templates/templates_view');
			$parentSmartyObject->setCacheDir('./smarty_templates/templates_cached');
			$parentSmartyObject->setConfigDir('./smarty_templates/templates_configured');
			$parentSmartyObject->setCompileDir('./smarty_templates/templates_compiled');
	        return $parentSmartyObject;
		}

	}