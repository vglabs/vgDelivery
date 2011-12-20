<?php
$this->breadcrumbs=array(
	'Deliverables'=>array('index'),
	$model->pk_deliverableID,
);

$this->menu=array(
	array('label'=>'List Deliverable', 'url'=>array('index')),
	array('label'=>'Create Deliverable', 'url'=>array('create')),
	array('label'=>'Update Deliverable', 'url'=>array('update', 'id'=>$model->pk_deliverableID)),
	array('label'=>'Delete Deliverable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk_deliverableID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Deliverable', 'url'=>array('admin')),
);
?>

<h1>View Deliverable #<?php echo $model->pk_deliverableID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk_deliverableID',
		'fk_deliveryObjectID',
		'dte_created',
		'deliveryNotes',
		'deliveryTitle',
		'dte_modified',
		'modifiedUserID',
	),
)); ?>
