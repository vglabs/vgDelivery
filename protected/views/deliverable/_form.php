<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deliverable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_deliveryObjectID'); ?>
		<?php echo $form->textField($model,'fk_deliveryObjectID'); ?>
		<?php echo $form->error($model,'fk_deliveryObjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
		<?php echo $form->error($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deliveryNotes'); ?>
		<?php echo $form->textArea($model,'deliveryNotes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deliveryNotes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deliveryTitle'); ?>
		<?php echo $form->textField($model,'deliveryTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'deliveryTitle'); ?>
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