<?php

class D1CompanyModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'D1Company.models.*',
			'D1Company.components.*',
		));
        $this->defaultController = 'CcmpCompany';
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
    
	/**
	 * @param $str
	 * @param $params
	 * @param $dic
	 * @return string
	 */
	public static function t($category,$message,$params=array()) {
	    return Yii::t(get_class().'.'.$category, $message, $params);
 
	}    
}
