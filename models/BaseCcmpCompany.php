<?php

/**
 * This is the model base class for the table "ccmp_company".
 *
 * Columns in table "ccmp_company" available as properties of the model:
 * @property string $ccmp_id
 * @property string $ccmp_name
 * @property integer $ccmp_ccnt_id
 * @property string $ccmp_registrtion_no
 * @property string $ccmp_vat_registrtion_no
 * @property string $ccmp_registration_address
 * @property string $ccmp_official_address
 * @property string $ccmp_statuss
 * @property string $ccmp_description
 *
 * Relations of table "ccmp_company" available as properties of the model:
 * @property CcntCountry $ccmpCcnt
 */
abstract class BaseCcmpCompany extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'ccmp_company';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('ccmp_name', 'required'),
			array('ccmp_ccnt_id, ccmp_registrtion_no, ccmp_vat_registrtion_no, ccmp_registration_address, ccmp_official_address, ccmp_statuss, ccmp_description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('ccmp_ccnt_id', 'numerical', 'integerOnly'=>true),
			array('ccmp_name, ccmp_registration_address, ccmp_official_address', 'length', 'max'=>200),
			array('ccmp_registrtion_no, ccmp_vat_registrtion_no', 'length', 'max'=>20),
			array('ccmp_statuss', 'length', 'max'=>6),
			array('ccmp_description', 'safe'),
			array('ccmp_id, ccmp_name, ccmp_ccnt_id, ccmp_registrtion_no, ccmp_vat_registrtion_no, ccmp_registration_address, ccmp_official_address, ccmp_statuss, ccmp_description', 'safe', 'on'=>'search'),
		    )
		);
	}

	public function behaviors()
	{
		return array_merge(
		    parent::behaviors(), array(
			'savedRelated' => array(
				'class' => 'gii-template-collection.components.CSaveRelationsBehavior'
			)
		    )
		);
	}

	public function relations()
	{
		return array(
			'ccmpCcnt' => array(self::BELONGS_TO, 'CcntCountry', 'ccmp_ccnt_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'ccmp_id' => Yii::t('D1CompanyModule.crud', 'Ccmp'),
			'ccmp_name' => Yii::t('D1CompanyModule.crud', 'Ccmp Name'),
			'ccmp_ccnt_id' => Yii::t('D1CompanyModule.crud', 'Ccmp Ccnt'),
			'ccmp_registrtion_no' => Yii::t('D1CompanyModule.crud', 'Ccmp Registrtion No'),
			'ccmp_vat_registrtion_no' => Yii::t('D1CompanyModule.crud', 'Ccmp Vat Registrtion No'),
			'ccmp_registration_address' => Yii::t('D1CompanyModule.crud', 'Ccmp Registration Address'),
			'ccmp_official_address' => Yii::t('D1CompanyModule.crud', 'Ccmp Official Address'),
			'ccmp_statuss' => Yii::t('D1CompanyModule.crud', 'Ccmp Statuss'),
			'ccmp_description' => Yii::t('D1CompanyModule.crud', 'Ccmp Description'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.ccmp_id', $this->ccmp_id, true);
		$criteria->compare('t.ccmp_name', $this->ccmp_name, true);
		$criteria->compare('t.ccmp_ccnt_id', $this->ccmp_ccnt_id);
		$criteria->compare('t.ccmp_registrtion_no', $this->ccmp_registrtion_no, true);
		$criteria->compare('t.ccmp_vat_registrtion_no', $this->ccmp_vat_registrtion_no, true);
		$criteria->compare('t.ccmp_registration_address', $this->ccmp_registration_address, true);
		$criteria->compare('t.ccmp_official_address', $this->ccmp_official_address, true);
		$criteria->compare('t.ccmp_statuss', $this->ccmp_statuss, true);
		$criteria->compare('t.ccmp_description', $this->ccmp_description, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
