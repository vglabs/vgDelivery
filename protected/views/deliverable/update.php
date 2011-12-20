<?php
$this->breadcrumbs=array(
	'Deliverables'=>array('index'),
	$model->pk_deliverableID=>array('view','id'=>$model->pk_deliverableID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Deliverable', 'url'=>array('index')),
	array('label'=>'Create Deliverable', 'url'=>array('create')),
	array('label'=>'View Deliverable', 'url'=>array('view', 'id'=>$model->pk_deliverableID)),
	array('label'=>'Manage Deliverable', 'url'=>array('admin')),
);
?>

<h1>Update Deliverable <?php echo $model->pk_deliverableID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>