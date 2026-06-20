	<header class="header">
		<div class="d-none d-lg-block">
			<div class="toolbar d-none d-sm-block">
				<div class="container-lg">
					<div class="toolbar__list">
						<?php $APPLICATION->includeComponent(
								"bitrix:menu",
								"toolbar",
								[
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "toolbar_submenu",
										"DELAY" => "N",
										"MAX_LEVEL" => "2",
										"MENU_CACHE_GET_VARS" => "",
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "N",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "toolbar",
										"USE_EXT" => "Y",
										"COMPONENT_TEMPLATE" => "toolbar",
								],
								false
						) ?>

					</div>
				</div>
			</div>
		</div>
		<div class="container-lg">
			<div class="header__inner">
				<button class="header__control" type="button" data-bs-target="#SIDE_PANEL" data-bs-toggle="offcanvas"><span
						class="header__burger"></span></button>
				<div class="header__logo">
					<div class="image image_size_157x53">
						<div class="image__inner">
							<a class="a" href="<?=SITE_DIR?>">
								<img class="img img_lazy lazyload"
									 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									 alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png">
							</a>
						</div>
					</div>
				</div>
				<div class="header__form">
					<?$APPLICATION->IncludeComponent(
							"bitrix:search.title",
							"",
							Array(
									"CATEGORY_0" => array("iblock_products"),
									"CATEGORY_0_TITLE" => "",
									"CATEGORY_0_iblock_products" => array("2"),
									"CHECK_DATES" => "N",
									"CONTAINER_ID" => "title-search",
									"INPUT_ID" => "title-search-input",
									"NUM_CATEGORIES" => "1",
									"ORDER" => "date",
									"PAGE" => "#SITE_DIR#search/index.php",
									"SHOW_INPUT" => "Y",
									"SHOW_OTHERS" => "N",
									"TOP_COUNT" => "5",
									"USE_LANGUAGE_GUESS" => "Y"
							)
					);?>
					<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.form", 
	"header", 
	[
		"AUTH_FORGOT_PASSWORD_URL" => "",
		"AUTH_REGISTER_URL" => "",
		"AUTH_SUCCESS_URL" => "",
		"COMPONENT_TEMPLATE" => "header",
		"AUTH_PAGE" => "/login/",
		"PERSONAL_PAGE" => "/personal/"
	],
	false
);?>
				</div>
				<?php $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"top",
					[
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => "",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "Y",
						"COMPONENT_TEMPLATE" => "main",
					],
					false
				) ?>
			</div>
		</div>
	</header>
	<main class="main">
		<div class="container-lg">