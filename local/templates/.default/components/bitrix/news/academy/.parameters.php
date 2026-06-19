<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;
use Bitrix\Main\IO\Directory;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\IO\FileNotFoundException;

/** @var array $arCurrentValues */

$arTemplateParameters = [
	"LIST_RESIZE_IMG_WIDTH" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_WIDTH"),
		"TYPE" => "STRING",
		"DEFAULT" => "850"
	],
	"LIST_RESIZE_IMG_HEIGHT" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_HEIGHT"),
		"TYPE" => "STRING",
		"DEFAULT" => "430"
	],
	"DETAIL_RESIZE_IMG_WIDTH" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_WIDTH"),
		"TYPE" => "STRING",
		"DEFAULT" => "850"
	],
	"DETAIL_RESIZE_IMG_HEIGHT" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_HEIGHT"),
		"TYPE" => "STRING",
		"DEFAULT" => "430"
	]
];