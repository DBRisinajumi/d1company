<?php
$this->breadcrumbs[Yii::t('D1CompanyModule.crud','Ccnt Countries')] = array('admin');
$this->breadcrumbs[] = $model->ccnt_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1CompanyModule.crud','Ccnt Country')?> <small><?php echo Yii::t('D1CompanyModule.crud','View')?> #<?php echo $model->ccnt_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    <?php echo Yii::t('D1CompanyModule.crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'ccnt_id',
        'ccnt_name',
        'ccnt_code',
),
        )); ?></p>


<h2>
    <?php echo Yii::t('D1CompanyModule.crud','Relations')?></h2>

<div class='well'>
    <div class='row'>
<div class='span3'><?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'ccmpCompanies', 'icon'=>'icon-list-alt', 'url'=> array('ccmpCompany/admin')),
                array('icon'=>'icon-plus', 'url'=>array('ccmpCompany/create', 'CcmpCompany' => array('ccmp_ccnt_id'=>$model->{$model->tableSchema->primaryKey}))),
        ),
    )); ?></div><div class='span8'>
<?php
    echo '<span class=label>CHasManyRelation</span>';
    if (is_array($model->ccmpCompanies)) {

        echo CHtml::openTag('ul');
            foreach($model->ccmpCompanies as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->ccmp_name, array('ccmpCompany/view','ccmp_id'=>$relatedModel->ccmp_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->
