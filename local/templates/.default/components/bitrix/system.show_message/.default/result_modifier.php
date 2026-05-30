<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

switch ($arParams["STYLE"]) {
    case 'errortext':
    case 'error':
        $arResult["ALERT_CLASS"] = 'alert-danger';
        break;

    case 'success':
        $arResult["ALERT_CLASS"] = 'alert-success';
        break;

    case 'info':
        $arResult["ALERT_CLASS"] = 'alert-info';
        break;

    case 'notetext':
    case 'note':
    default:
        $arResult["ALERT_CLASS"] = 'alert-warning';
        break;
}