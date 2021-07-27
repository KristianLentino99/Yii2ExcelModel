<?php


namespace Kristianlentino\Yii2excelModel\exceptions;


use Throwable;
use yii\base\Exception;

class InterfaceNotImplementedException extends Exception
{

	public function __construct($message = "", $code = 0, Throwable $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}
}