<?php
/* @var $this MajorController */
/* @var $model Major */

$this->breadcrumbs=array(
	'Majors'=>array('index'),
	'Manage',
);
?>

<h1>Manage Majors</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'major-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
