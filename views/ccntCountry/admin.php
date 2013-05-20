<?php
$this->breadcrumbs[] = 'Ccnt Countries';


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('ccnt-country-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1CompanyModule.crud', 'Ccnt Countries'); ?> <small><?php echo Yii::t('D1CompanyModule.crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'ccnt-country-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		'ccnt_id',
		'ccnt_name',
		'ccnt_code',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('ccnt_id' => \$data->ccnt_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('ccnt_id' => \$data->ccnt_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('ccnt_id' => \$data->ccnt_id))",
        ),
    ),
)); ?>
