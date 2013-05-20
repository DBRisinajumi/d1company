<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_id'); ?>
                            <?php echo $form->textField($model,'ccmp_id',array('size'=>10,'maxlength'=>10)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_name'); ?>
                            <?php echo $form->textField($model,'ccmp_name',array('size'=>60,'maxlength'=>200)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_ccnt_id'); ?>
                            <?php echo $form->dropDownList($model,'ccmp_ccnt_id',CHtml::listData(CcntCountry::model()->findAll(), 'ccnt_id', 'ccnt_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_registrtion_no'); ?>
                            <?php echo $form->textField($model,'ccmp_registrtion_no',array('size'=>20,'maxlength'=>20)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_vat_registrtion_no'); ?>
                            <?php echo $form->textField($model,'ccmp_vat_registrtion_no',array('size'=>20,'maxlength'=>20)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_registration_address'); ?>
                            <?php echo $form->textField($model,'ccmp_registration_address',array('size'=>60,'maxlength'=>200)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_official_address'); ?>
                            <?php echo $form->textField($model,'ccmp_official_address',array('size'=>60,'maxlength'=>200)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_statuss'); ?>
                            <?php echo CHtml::activeDropDownList($model, 'ccmp_statuss', array(
			'ACTIVE' => 'ACTIVE' ,
			'CLOSED' => 'CLOSED' ,
)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'ccmp_description'); ?>
                            <?php echo $form->textArea($model,'ccmp_description',array('rows'=>6, 'cols'=>50)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('D1CompanyModule.crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
