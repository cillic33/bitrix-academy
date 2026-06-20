<?

use Bitrix\Main\Context;
use Bitrix\Main\Web\Uri;
use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>
<?
$inputId = trim($arParams["~INPUT_ID"]);
if ($inputId == '')
{
	$inputId = "input-" . $this->GetEditAreaId('input');
}
$inputId = CUtil::JSEscape($inputId);

$containerId = trim($arParams["~CONTAINER_ID"]);
if ($containerId == '')
{
	$inputId = "container-" . $this->GetEditAreaId('container');
}

$containerId = CUtil::JSEscape($containerId);

$request = Context::getCurrent()->getRequest();

$uri = new Uri($arResult["FORM_ACTION"]);
$uri->addParams([
	"q" => $request->get("q"),
]);
?>
<div class="offcanvas offcanvas-start" id="<?= $containerId ?>">
	<div class="offcanvas-header ps-0 pt-3 pb-0">
		<div class="flex-grow-1 pe-3">
			<div class="search">
				<div class="search__form">
					<form action="<?=$arResult["FORM_ACTION"]?>">
						<input name="q" value="<?=$request->get("q")?>"
						       class="form-control rounded-pill"
						       id="<?= $inputId ?>"
						       autocomplete="off"
						       placeholder="<?=Loc::getMessage("SEARCH_PLACEHOLDER")?>"
						       type="text">
						<div class="search__icon fa-solid fa-magnifying-glass"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="offcanvas__btn"
		     data-bs-toggle="offcanvas"
		     data-bs-target="#SIDE_PANEL"
		     role="button">
			<div class="fa-solid fa-xmark"></div>
		</div>
	</div>
	<div class="offcanvas-body">
		<div class="list-group list-group-flush">
		</div>
	</div>
	<div class="p-3 flex-grow-0 flex-shrink-1 text-center">
		<a class="btn btn-outline-primary rounded-pill w-100 more-btn" role="button" href="<?=$uri->getUri()?>"><?=Loc::getMessage("SHOW_ALL")?></a>
	</div>
</div>

<script>
	BX.ready(function ()
	{
		new window.SearchTitleComponent({
			searchId: "<?= $inputId?>",
			containerId: "<?= $containerId?>",
			ajaxUrl: "<?= CUtil::JSEscape(POST_FORM_ACTION_URI)?>"
		});
	});
</script>
