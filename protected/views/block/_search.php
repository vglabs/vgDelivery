<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk_blockID'); ?>
		<?php echo $form->textField($model,'pk_blockID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blockTitle'); ?>
		<?php echo $form->textField($model,'blockTitle',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blockDescrip'); ?>
		<?php echo $form->textField($model,'blockDescrip',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blockFilePath'); ?>
		<?php echo $form->textField($model,'blockFilePath',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bln_active'); ?>
		<?php echo $form->textField($model,'bln_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bln_clientSignOff'); ?>
		<?php echo $form->textField($model,'bln_clientSignOff'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_signOff'); ?>
		<?php echo $form->textField($model,'dte_signOff'); ?>
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