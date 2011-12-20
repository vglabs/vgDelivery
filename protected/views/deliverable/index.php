<?php
$this->breadcrumbs=array(
	'Deliverables',
);

$this->menu=array(
	array('label'=>'Create Deliverable', 'url'=>array('create')),
	array('label'=>'Manage Deliverable', 'url'=>array('admin')),
);
?>

<h1>Deliverables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
