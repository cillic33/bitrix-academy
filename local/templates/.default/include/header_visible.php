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
					<div class="header__search">
						<div class="search" data-bs-toggle="dropdown" data-bs-display="static">
							<div class="search__form"><input class="form-control rounded-pill" id="uniq169564607472865" placeholder="Поиск по сайту" type="text">
								<div class="search__icon fa-solid fa-magnifying-glass"></div>
							</div>
							<div class="search__dropdown dropdown-menu top-0 p-0 m-0">
								<div class="list-group list-group-flush">
									<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b></a>
									<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой</a>
									<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый</a>
									<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый Мускари</a>
									<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый Мускари</a>
								</div>
								<div class="p-3 flex-grow-0 flex-shrink-1 text-center">
									<a class="btn btn-outline-primary rounded-pill w-100" role="button" href="javascript:void(0)">Смотреть все результаты</a>
								</div>
							</div>
						</div>
					</div>
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