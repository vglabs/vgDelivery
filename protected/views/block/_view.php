<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pk_blockID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pk_blockID), array('view', 'id'=>$data->pk_blockID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blockTitle')); ?>:</b>
	<?php echo CHtml::encode($data->blockTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blockDescrip')); ?>:</b>
	<?php echo CHtml::encode($data->blockDescrip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blockFilePath')); ?>:</b>
	<?php echo CHtml::encode($data->blockFilePath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_created')); ?>:</b>
	<?php echo CHtml::encode($data->dte_created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bln_active')); ?>:</b>
	<?php echo CHtml::encode($data->bln_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bln_clientSignOff')); ?>:</b>
	<?php echo CHtml::encode($data->bln_clientSignOff); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_signOff')); ?>:</b>
	<?php echo CHtml::encode($data->dte_signOff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dte_modified')); ?>:</b>
	<?php echo CHtml::encode($data->dte_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modifiedUserID')); ?>:</b>
	<?php echo CHtml::encode($data->modifiedUserID); ?>
	<br />

	*/ ?>

</div>