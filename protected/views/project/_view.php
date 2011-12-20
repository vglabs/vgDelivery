<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk_projectID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk_projectID), array('view', 'id'=>$data->pk_projectID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proj_name')); ?>:</b>
	<?php echo CHtml::encode($data->proj_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_clientID')); ?>:</b>
	<?php echo CHtml::encode($data->fk_clientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_created')); ?>:</b>
	<?php echo CHtml::encode($data->dte_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_started')); ?>:</b>
	<?php echo CHtml::encode($data->dte_started); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_salesPersonID')); ?>:</b>
	<?php echo CHtml::encode($data->fk_salesPersonID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_pmPersonID')); ?>:</b>
	<?php echo CHtml::encode($data->fk_pmPersonID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('proj_number')); ?>:</b>
	<?php echo CHtml::encode($data->proj_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_modified')); ?>:</b>
	<?php echo CHtml::encode($data->dte_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedUserID')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedUserID); ?>
	<br />

	*/ ?>

</div>