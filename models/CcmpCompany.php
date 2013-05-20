<?php

// auto-loading
Yii::setPathOfAlias('CcmpCompany', dirname(__FILE__));
Yii::import('CcmpCompany.*');

class CcmpCompany extends BaseCcmpCompany
{
	// Add your model-specific methods here. This file will not be overriden by gtc except you force it.
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function init()
	{
		return parent::init();
	}

	public function get_label() {
		return (string) $this->ccmp_name;

	}

	public function behaviors()
	{
		return array_merge(
			parent::behaviors(),
			array(
                'LoggableBehavior'=>array(
                    'class' => 'vendor.sammaye.auditrail2.behaviors.LoggableBehavior',
                    'ignored' => array('bcar_mainit_t01_km'),
                    )                
            ));
	}


	public function rules()
	{
		return array_merge(
		    parent::rules()
            /*, array(
			array('column1, column2', 'rule1'),
			array('column3', 'rule2'),
		    )*/
		);
	}

}
