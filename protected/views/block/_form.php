<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'block-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'blockTitle'); ?>
		<?php echo $form->textField($model,'blockTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'blockTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blockDescrip'); ?>
		<?php echo $form->textField($model,'blockDescrip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'blockDescrip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blockFilePath'); ?>
		<?php echo $form->textField($model,'blockFilePath',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'blockFilePath'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'bln_clientSignOff'); ?>
		<?php echo $form->textField($model,'bln_clientSignOff'); ?>
		<?php echo $form->error($model,'bln_clientSignOff'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dte_signOff'); ?>
		<?php echo $form->textField($model,'dte_signOff'); ?>
		<?php echo $form->error($model,'dte_signOff'); ?>
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