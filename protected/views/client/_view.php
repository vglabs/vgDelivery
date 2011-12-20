<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk_clientID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk_clientID), array('view', 'id'=>$data->pk_clientID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientName')); ?>:</b>
	<?php echo CHtml::encode($data->clientName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_created')); ?>:</b>
	<?php echo CHtml::encode($data->dte_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bln_active')); ?>:</b>
	<?php echo CHtml::encode($data->bln_active); ?>
	<br />


</div>