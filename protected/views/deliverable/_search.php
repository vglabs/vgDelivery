<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk_deliverableID'); ?>
		<?php echo $form->textField($model,'pk_deliverableID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_deliveryObjectID'); ?>
		<?php echo $form->textField($model,'fk_deliveryObjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deliveryNotes'); ?>
		<?php echo $form->textArea($model,'deliveryNotes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deliveryTitle'); ?>
		<?php echo $form->textField($model,'deliveryTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_modified'); ?>
		<?php echo $form->textField($model,'dte_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modifiedUserID'); ?>
		<?php echo $form->textField($model,'modifiedUserID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->