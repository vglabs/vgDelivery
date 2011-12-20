<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->pk_projectID=>array('view','id'=>$model->pk_projectID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'View Project', 'url'=>array('view', 'id'=>$model->pk_projectID)),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>Update Project <?php echo $model->pk_projectID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>