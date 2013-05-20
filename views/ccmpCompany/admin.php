<?php
$this->breadcrumbs[] = Yii::t('D1CompanyModule.crud','Ccmp Companies');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('ccmp-company-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1CompanyModule.crud', 'Ccmp Companies'); ?> <small><?php echo Yii::t('D1CompanyModule.crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php 
if(Yii::app()->user->checkAccess('D1CompanyEdit')){
    $aGridButtons =         array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('ccmp_id' => \$data->ccmp_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('ccmp_id' => \$data->ccmp_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('ccmp_id' => \$data->ccmp_id))",
        );
}else{
    $aGridButtons = array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('ccmp_id' => \$data->ccmp_id))",
            'buttons'  => array(
                'update' => array('visible'=>'FALSE'),
                'delete' => array('visible'=>'FALSE'),
            ),
        );    
}
$this->widget('TbGridView',
    array(
        'id'=>'ccmp-company-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		//'ccmp_id',
		'ccmp_name',
		array(
					'name'=>'ccmp_ccnt_id',
					'value'=>'CHtml::value($data,\'ccmpCcnt.ccnt_name\')',
							'filter'=>CHtml::listData(CcntCountry::model()->findAll(), 'ccnt_id', 'ccnt_name'),
							),
		'ccmp_registrtion_no',
		'ccmp_vat_registrtion_no',
		'ccmp_registration_address',
		'ccmp_official_address',
		/*
		'ccmp_statuss',
#		'ccmp_description',
		*/
        $aGridButtons,
    ),
)); ?>
