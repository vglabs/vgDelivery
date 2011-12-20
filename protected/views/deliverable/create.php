<?php
$this->breadcrumbs=array(
	'Deliverables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Deliverable', 'url'=>array('index')),
	array('label'=>'Manage Deliverable', 'url'=>array('admin')),
);
?>

<h1>Create Deliverable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>