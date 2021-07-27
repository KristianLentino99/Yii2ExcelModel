<?php


namespace kristianlentino\yii2excelmodel;


use yii\db\ActiveRecord;

class ExcelModel extends ActiveRecord
{

	public function __construct($config = [])
	{

		echo '<pre>';
		print_r('Ci passo');
		exit();
		parent::__construct($config);
	}

}