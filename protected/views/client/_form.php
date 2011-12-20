<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clientName'); ?>
		<?php echo $form->textField($model,'clientName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'clientName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
		<?php echo $form->error($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bln_active'); ?>
		<?php echo $form->textField($model,'bln_active'); ?>
		<?php echo $form->error($model,'bln_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->