<?php
$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->pk_clientID,
);

$this->menu=array(
	array('label'=>'List Client', 'url'=>array('index')),
	array('label'=>'Create Client', 'url'=>array('create')),
	array('label'=>'Update Client', 'url'=>array('update', 'id'=>$model->pk_clientID)),
	array('label'=>'Delete Client', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk_clientID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Client', 'url'=>array('admin')),
);
?>

<h1>View Client #<?php echo $model->pk_clientID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk_clientID',
		'clientName',
		'dte_created',
		'bln_active',
	),
)); ?>
