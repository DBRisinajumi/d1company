<?php

class CcmpCompanyController extends Controller
{
    #public $layout='//layouts/column2';
    public $defaultAction = "admin";
    public $scenario = "crud";

    public function filters() {
	return array(
			'accessControl',
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('create','editableSaver','update','delete','admin','view'),
				'roles'=>array('D1Company.CcmpCompany.Admin'),
				),
			array('allow',
				'actions'=>array('admin','view'),
				'roles'=>array('D1Company.CcmpCompany.View'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

    public function beforeAction($action){
        parent::beforeAction($action);
        // map identifcationColumn to id
        if (!isset($_GET['id']) && isset($_GET['ccmp_id'])) {
            $model=CcmpCompany::model()->find('ccmp_id = :ccmp_id', array(
            ':ccmp_id' => $_GET['ccmp_id']));
            if ($model !== null) {
                $_GET['id'] = $model->ccmp_id;
            } else {
                throw new CHttpException(400);
            }
        }
        if ($this->module !== null) {
            $this->breadcrumbs[$this->module->Id] = array('/'.$this->module->Id);
        }
        return true;
    }

    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $this->render('view',array('model' => $model,));
    }

    public function actionCreate()
    {
        $model = new CcmpCompany;
        $model->scenario = $this->scenario;

                $this->performAjaxValidation($model, 'ccmp-company-form');
    
        if(isset($_POST['CcmpCompany'])) {
            $model->attributes = $_POST['CcmpCompany'];

            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->ccmp_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('ccmp_id', $e->getMessage());
            }
        } elseif(isset($_GET['CcmpCompany'])) {
            $model->attributes = $_GET['CcmpCompany'];
        }

        $this->render('create',array( 'model'=>$model));
    }


    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model->scenario = $this->scenario;

                $this->performAjaxValidation($model, 'ccmp-company-form');
        
        if(isset($_POST['CcmpCompany']))
        {
            $model->attributes = $_POST['CcmpCompany'];


            try {
                if($model->save()) {
                    if (isset($_GET['returnUrl'])) {
                        $this->redirect($_GET['returnUrl']);
                    } else {
                        $this->redirect(array('view','id'=>$model->ccmp_id));
                    }
                }
            } catch (Exception $e) {
                $model->addError('ccmp_id', $e->getMessage());
            }
        }

        $this->render('update',array('model'=>$model,));
    }

    public function actionEditableSaver()
    {
        Yii::import('EditableSaver'); //or you can add import 'ext.editable.*' to config
        $es = new EditableSaver('CcmpCompany');  // classname of model to be updated
        $es->update();
    }

    public function actionDelete($id)
    {
        if(Yii::app()->request->isPostRequest)
        {
            try {
                $this->loadModel($id)->delete();
            } catch (Exception $e) {
                throw new CHttpException(500,$e->getMessage());
            }

            if(!isset($_GET['ajax']))
            {
                if (isset($_GET['returnUrl'])) {
                    $this->redirect($_GET['returnUrl']);
                } else {
                    $this->redirect(array('admin'));
                }
            }
        }
        else
            throw new CHttpException(400,Yii::t('D1CompanyModule.crud', 'Invalid request. Please do not repeat this request again.'));
    }

    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('CcmpCompany');
        $this->render('index',array('dataProvider'=>$dataProvider,));
    }

    public function actionAdmin()
    {
        $model=new CcmpCompany('search');
        $model->unsetAttributes();

        if(isset($_GET['CcmpCompany'])) {
            $model->attributes = $_GET['CcmpCompany'];
        }

        $this->render('admin',array('model'=>$model,));
    }

    public function loadModel($id)
    {
        $model=CcmpCompany::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,Yii::t('D1CompanyModule.crud', 'The requested page does not exist.'));
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='ccmp-company-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
