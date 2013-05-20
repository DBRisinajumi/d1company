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
    'id'=>'ccmp-company-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_name'); ?>

            <?php echo $form->textField($model,'ccmp_name',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'ccmp_name'); ?>
            <?php if('help.ccmp_name' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_name')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_registrtion_no'); ?>
            <?php echo $form->textField($model,'ccmp_registrtion_no',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'ccmp_registrtion_no'); ?>
            <?php if('help.ccmp_registrtion_no' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_registrtion_no')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_vat_registrtion_no'); ?>
            <?php echo $form->textField($model,'ccmp_vat_registrtion_no',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'ccmp_vat_registrtion_no'); ?>
            <?php if('help.ccmp_vat_registrtion_no' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_vat_registrtion_no')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_registration_address'); ?>
            <?php echo $form->textField($model,'ccmp_registration_address',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'ccmp_registration_address'); ?>
            <?php if('help.ccmp_registration_address' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_registration_address')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_official_address'); ?>
            <?php echo $form->textField($model,'ccmp_official_address',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'ccmp_official_address'); ?>
            <?php if('help.ccmp_official_address' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_official_address')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_statuss'); ?>
            <?php echo CHtml::activeDropDownList($model, 'ccmp_statuss', array(
			'ACTIVE' => 'ACTIVE' ,
			'CLOSED' => 'CLOSED' ,
)); ?>
            <?php echo $form->error($model,'ccmp_statuss'); ?>
            <?php if('help.ccmp_statuss' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_statuss')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'ccmp_description'); ?>
            <?php echo $form->textArea($model,'ccmp_description',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'ccmp_description'); ?>
            <?php if('help.ccmp_description' != $help = Yii::t('D1CompanyModule.crud', 'help.ccmp_description')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="ccmpCcnt"><?php echo Yii::t('D1CompanyModule.crud', 'CcmpCcnt'); ?></label>
                <?php
                $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'ccmpCcnt',
							'fields' => 'ccnt_name',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						)
              ?>
        </div>
    </div>

    </div> <!-- main inputs -->


    <div class="span4"> <!-- sub inputs -->

    </div> <!-- sub inputs -->
</div>


    <div class="form-actions">
        
    <?php
        echo CHtml::Button(Yii::t('D1CompanyModule.crud', 'Cancel'), array(
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('ccmpcompany/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1CompanyModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->