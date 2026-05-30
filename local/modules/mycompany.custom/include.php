<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/*
 * Здесь размещается код, выполняемый каждый раз при подключении этого модуля
 */

require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/constants.php";

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('iblock', 'OnAfterIblockElementAdd', [
	'MyCompany\Custom\EventHandlers\Iblock',
	'onNewsAdd'
]);

$eventManager->addEventHandler('main', 'OnProlog', [
	'MyCompany\Custom\EventHandlers\Main',
	'redirectFromTestPage'
]);

$eventManager->addEventHandler('main', 'OnProlog', [
	'MyCompany\Custom\EventHandlers\Main',
	'setIsDevServerConstant'
]);