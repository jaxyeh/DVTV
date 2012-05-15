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

<?php
/* $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'duration',
		'userId',
		'recorderId',
	),
)); */?>

<script src="http://releases.flowplayer.org/js/flowplayer-3.2.9.min.js"></script>

<a href="http://elmo.otterlabs.com/rawvideo/<?php echo $model->name; ?>.flv" class="player"
style="display:block;width:425px;height:300px;margin:10px auto" id="player">
<img
    src="../snapshots/<?php echo $model->name; ?>.jpg"
    alt="<?php echo $model->name; ?>" />
</a>

<!-- this script block will install Flowplayer inside previous A tag -->
<script>
flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.10.swf");
</script>

<!--
<script type="text/javascript" src="http://cdn.sublimevideo.net/js/tpva14ln.js"></script>
-->
