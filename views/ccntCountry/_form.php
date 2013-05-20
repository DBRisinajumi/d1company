<div class="">
    <p class="alert">
        <?php echo Yii::t('D1CompanyModule.crud','Fields with <span class="required">*</span> are required.');?> 
    </p>


    <?php
    $this->widget('echosen.EChosen',
        array('target'=>'select')
    );
    ?>
    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'ccnt-country-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccnt_name'); ?>

            <?php echo $form->textField($model,'ccnt_name',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'ccnt_name'); ?>
            <?php if('help.ccnt_name' != $help = Yii::t('D1CompanyModule.crud', 'help.ccnt_name')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccnt_code'); ?>
            <?php echo $form->textField($model,'ccnt_code',array('size'=>3,'maxlength'=>3)); ?>
            <?php echo $form->error($model,'ccnt_code'); ?>
            <?php if('help.ccnt_code' != $help = Yii::t('D1CompanyModule.crud', 'help.ccnt_code')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>

    </div> <!-- main inputs -->


    <div class="span4"> <!-- sub inputs -->

    </div> <!-- sub inputs -->
</div>


    <div class="form-actions">
        
    <?php
        echo CHtml::Button(Yii::t('D1CompanyModule.crud', 'Cancel'), array(
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('ccntcountry/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1CompanyModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->