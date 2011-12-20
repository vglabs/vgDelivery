<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'proj_name'); ?>
		<?php echo $form->textField($model,'proj_name',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'proj_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_clientID'); ?>
		<?php echo $form->textField($model,'fk_clientID'); ?>
		<?php echo $form->error($model,'fk_clientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
		<?php echo $form->error($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_started'); ?>
		<?php echo $form->textField($model,'dte_started'); ?>
		<?php echo $form->error($model,'dte_started'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_salesPersonID'); ?>
		<?php echo $form->textField($model,'fk_salesPersonID'); ?>
		<?php echo $form->error($model,'fk_salesPersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_pmPersonID'); ?>
		<?php echo $form->textField($model,'fk_pmPersonID'); ?>
		<?php echo $form->error($model,'fk_pmPersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proj_number'); ?>
		<?php echo $form->textField($model,'proj_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'proj_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_modified'); ?>
		<?php echo $form->textField($model,'dte_modified'); ?>
		<?php echo $form->error($model,'dte_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modifiedUserID'); ?>
		<?php echo $form->textField($model,'modifiedUserID'); ?>
		<?php echo $form->error($model,'modifiedUserID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->