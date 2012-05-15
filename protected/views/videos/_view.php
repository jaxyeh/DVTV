<div class="view">

	<div class="showVideoImage" style="float:left;width:100;padding: 5px;">
		<?php
		$imghtml=CHtml::image($data->name.'.jpg',$data->name);
		echo CHtml::link($imghtml, array('view', 'id'=>$data->id));
		?>
	</div>

	<div class="showVideoData" style="float:left;width:400;">
		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
		<?php echo CHtml::encode($data->name); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
		<?php echo CHtml::encode($data->duration); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
		<?php echo CHtml::encode($data->userId); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('recorderId')); ?>:</b>
		<?php echo CHtml::encode($data->recorderId); ?>
		<br />
	</div>
</div>