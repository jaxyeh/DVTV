<?php
$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Videos', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'Update Video', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>

<h1>View Videos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'duration',
		'userId',
		'recorderId',
	),
)); ?>
