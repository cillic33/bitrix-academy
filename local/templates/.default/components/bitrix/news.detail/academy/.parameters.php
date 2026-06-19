<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arTemplateParameters = [
	"RESIZE_IMG_WIDTH" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_WIDTH"),
		"TYPE" => "STRING",
		"DEFAULT" => "850"
	],
	"RESIZE_IMG_HEIGHT" => [
		"NAME" => Loc::getMessage("ACADEMY_RESIZE_IMG_HEIGHT"),
		"TYPE" => "STRING",
		"DEFAULT" => "430"
	]
];