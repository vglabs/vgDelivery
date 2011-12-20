<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pk_projectID'); ?>
		<?php echo $form->textField($model,'pk_projectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proj_name'); ?>
		<?php echo $form->textField($model,'proj_name',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_clientID'); ?>
		<?php echo $form->textField($model,'fk_clientID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_created'); ?>
		<?php echo $form->textField($model,'dte_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dte_started'); ?>
		<?php echo $form->textField($model,'dte_started'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_salesPersonID'); ?>
		<?php echo $form->textField($model,'fk_salesPersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_pmPersonID'); ?>
		<?php echo $form->textField($model,'fk_pmPersonID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proj_number'); ?>
		<?php echo $form->textField($model,'proj_number',array('size'=>60,'maxlength'=>255)); ?>
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