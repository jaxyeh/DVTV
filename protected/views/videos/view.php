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

<style>
/* styling of the container. */
a.player {
    display:block;
    width: 320px;
    height:240px;
    text-align:center;
    margin:15px;
    float:left;
    border:1px solid #999;
}

/* play button */
a.player img {
    margin-top:70px;
    border:0px;
}

/* when container is hovered we alter the border color */
a.player:hover {
    border:1px solid #000;
}
</style>


<a href="http://elmo.otterlabs.com/rawvideo/<?php echo $model->name; ?>.flv"
	class="player" id="player"
	style="display:block;width:320px;height:240px;margin:10px auto;
	background-image:url(../snapshots/<?php echo $model->name; ?>.jpg);">
	<img src="../images/play_large.png" alt="<?php echo $model->name; ?>"/>
</a>

<!-- this script block will install Flowplayer inside previous A tag -->
<script>
	flowplayer("player", "http://releases.flowplayer.org/swf/flowplayer-3.2.10.swf");
</script>
