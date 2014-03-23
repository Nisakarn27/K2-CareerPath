<?php
/* @var $this MajorController */
/* @var $model Major */

$this->menu=array(
	array('label'=>'กลับสู่หน้าหลัก', 'url'=>array('index')),

);
?>
<center>
<h1>รายชื่อสถานประกอบการ<br><br> <?php echo $model->name; ?></h1>
</center>

	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'major-grid',
	'dataProvider' => $model->search ( '$model=>id', 'search', array (
				'major_id' => $company->major_id = $model->id 
		) ),
	
	'columns'=>array(
			array (
		'name' => 'id',
		'value' => '$this->grid->dataProvider->pagination->offset+$row+1'
),
			'company.name',
			'company.description',
			'company.phone',
			'company.link',
			'company.skill',
			'name'
			
	),
)); ?>
