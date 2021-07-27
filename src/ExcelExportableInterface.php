<?php
namespace Kristianlentino\Yii2excelModel;


use codemix\excelexport\ExcelFile;

interface ExcelExportableInterface
{

	public function prepareForExport();
	public function getFileName();
	public function getSheets(array $get);
	public static function getLabelsBySheet(string $sheetName,array $get);
	public static function getFieldsForExport($model,array $get);

	/**
	 * @param ExcelFile $file
	 * @return mixed
	 */
	public function afterExport(ExcelFile $file);
}