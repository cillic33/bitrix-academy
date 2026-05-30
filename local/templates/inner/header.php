<?php
B_PROLOG_INCLUDED === true || die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header_visible.php";
/**
 * @global CMain $APPLICATION
 */

$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
?>
	<nav>
		<div class="breadcrumb">
			<div class="breadcrumb-item"><a class="a" href="javascript:void(0)">Главная</a></div>
			<div class="breadcrumb-item active">Новости</div>
		</div>
	</nav>
	<h1 class="mt-0 pb-xl-4"><?$APPLICATION->ShowTitle(false)?></h1>
	<div class="mb-5 pb-4">
		<div class="row justify-content-between">
			<div class="col-12 col-lg-4 col-xl-3 d-none d-lg-block">
				<?php $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"left",
						[
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "2",
								"MENU_CACHE_GET_VARS" => [
								],
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "Y",
								"COMPONENT_TEMPLATE" => "left"
						],
						false
				); ?>
				<div class="alert alert-info mt-3">
					Заключение партнерского договора позволит вам вывести бизнес на новый уровень
				</div>
			</div>
			<div class="col-12 col-lg-8">