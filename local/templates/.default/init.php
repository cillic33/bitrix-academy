<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Page\AssetLocation;
use Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();

$asset = Asset::getInstance();

$asset->addString('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.1, maximum-scale=1.0, minimal-ui, shrink-to-fit=no">', false, AssetLocation::BEFORE_CSS);
$asset->addString('<meta name="apple-mobile-web-app-capable" content="yes">', false, AssetLocation::BEFORE_CSS);
$asset->addString('<meta name="format-detection" content="telephone=no">', false, AssetLocation::BEFORE_CSS);

$asset->addString('<link rel="shortcut icon" href="'.DEFAULT_TEMPLATE_PATH.'/favicons/favicon.ico" type="image/x-icon">', false, AssetLocation::BEFORE_CSS);

$asset->addCss(DEFAULT_TEMPLATE_PATH."/merged.css");
$asset->addJs(DEFAULT_TEMPLATE_PATH."/merged.js");

$isMainPage = $request->getRequestedPageDirectory() == "/";