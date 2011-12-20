<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk_deliverableID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk_deliverableID), array('view', 'id'=>$data->pk_deliverableID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_deliveryObjectID')); ?>:</b>
	<?php echo CHtml::encode($data->fk_deliveryObjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_created')); ?>:</b>
	<?php echo CHtml::encode($data->dte_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliveryNotes')); ?>:</b>
	<?php echo CHtml::encode($data->deliveryNotes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliveryTitle')); ?>:</b>
	<?php echo CHtml::encode($data->deliveryTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_modified')); ?>:</b>
	<?php echo CHtml::encode($data->dte_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedUserID')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedUserID); ?>
	<br />


</div>