<?php


namespace Kristianlentino\Yii2excelModel;


use codemix\excelexport\ExcelFile;
use Kristianlentino\Yii2excelModel\exceptions\InterfaceNotImplementedException;
use yii\helpers\Inflector;

class ExportableModel
{
	public ?string $file_name;
	public ?string $file_name_suffix = 'export_';
	public string $extension = AcceptedFormats::FORMAT_EXCEL;
	/**
	 * if this variable is not empty then the library will save the file in the specified path
	 */
	public ?string $path_to_save;

	public function getFileName()
	{
		if (empty($this->file_name)) {

			$className = get_called_class();
			$class = new $className();
			$reflection = new \ReflectionClass($class);

			$this->file_name = $this->file_name_suffix . Inflector::slug($reflection->getShortName());
		}
	}

	/**
	 * @throws InterfaceNotImplementedException
	 */
	public function export()
	{
		if ($this->check()) {

			$this->getFileName();
		}

		echo '<pre>';
		print_r($this->file_name);
		exit();
	}

	private function check()
	{
		$calledClass = get_called_class();

		$implemented_classes = class_implements($calledClass);

		if(!in_array('Kristianlentino\Yii2excelModel\ExcelExportableInterface',$implemented_classes)){

			throw new InterfaceNotImplementedException("You must implement the ExcelExportableInterface on the classe: $calledClass");
		}

		return true;
	}

}