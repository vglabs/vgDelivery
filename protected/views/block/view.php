<?php
$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	$model->pk_blockID,
);

$this->menu=array(
	array('label'=>'List Block', 'url'=>array('index')),
	array('label'=>'Create Block', 'url'=>array('create')),
	array('label'=>'Update Block', 'url'=>array('update', 'id'=>$model->pk_blockID)),
	array('label'=>'Delete Block', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk_blockID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Block', 'url'=>array('admin')),
);
?>

<h1>View Block #<?php echo $model->pk_blockID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk_blockID',
		'blockTitle',
		'blockDescrip',
		'blockFilePath',
		'dte_created',
		'bln_active',
		'bln_clientSignOff',
		'dte_signOff',
		'dte_modified',
		'modifiedUserID',
	),
)); ?>
