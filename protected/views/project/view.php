<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->pk_projectID,
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->pk_projectID)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pk_projectID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->pk_projectID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pk_projectID',
		'proj_name',
		'fk_clientID',
		'dte_created',
		'dte_started',
		'fk_salesPersonID',
		'fk_pmPersonID',
		'proj_number',
		'dte_modified',
		'modifiedUserID',
	),
)); ?>
