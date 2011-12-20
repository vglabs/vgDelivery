<?php
$this->breadcrumbs=array(
	'Blocks'=>array('index'),
	$model->pk_blockID=>array('view','id'=>$model->pk_blockID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Block', 'url'=>array('index')),
	array('label'=>'Create Block', 'url'=>array('create')),
	array('label'=>'View Block', 'url'=>array('view', 'id'=>$model->pk_blockID)),
	array('label'=>'Manage Block', 'url'=>array('admin')),
);
?>

<h1>Update Block <?php echo $model->pk_blockID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>