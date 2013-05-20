<?php
$this->breadcrumbs[Yii::t('D1CompanyModule.crud', 'Ccmp Company')] = array('admin');
$this->breadcrumbs[] = $model->ccmp_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?=D1CompanyModule::t('crud', 'Ccmp Company')?> <small>View #<?php echo $model->ccmp_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    Data
</h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        //'ccmp_id',
        'ccmp_name',
        array(
            'name'=>'ccmp_ccnt_id',
            'value'=>($model->ccmpCcnt !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->ccmpCcnt->ccnt_name, array('ccntCountry/view','ccnt_id'=>$model->ccmpCcnt->ccnt_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'ccmp_registrtion_no',
        'ccmp_vat_registrtion_no',
        'ccmp_registration_address',
        'ccmp_official_address',
        'ccmp_statuss',
        'ccmp_description',
),
        )); ?></p>


<h2>
    <?=Yii::t('D1CompanyModule.crud', 'Relations')?>
</h2>

