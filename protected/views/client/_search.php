<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk_clientID'); ?>
		<?php echo $form->textField($model,'pk_clientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientName'); ?>
		<?php echo $form->textField($model,'clientName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bln_active'); ?>
		<?php echo $form->textField($model,'bln_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->