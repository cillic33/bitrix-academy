	<header class="header">
		<div class="d-none d-lg-block">
			<div class="toolbar d-none d-sm-block">
				<div class="container-lg">
					<div class="toolbar__list">
						<div class="toolbar__li dropdown"><a class="toolbar__link" data-bs-toggle="dropdown" href="#" aria-expanded="false">Компания<i class="fa-solid fa-chevron-down ms-2"></i></a>
							<div class="dropdown-menu" style="">
								<div><a class="a dropdown-item" href="#">О компании</a></div>
								<div><a class="a dropdown-item" href="#">Отзывы</a></div>
								<div><a class="a dropdown-item" href="#">История</a></div>
								<div><a class="a dropdown-item" href="#">Вакансии</a></div>
								<div><a class="a dropdown-item" href="#">Миссия и стратегия</a></div>
								<div><a class="a dropdown-item" href="#">Новости</a></div>
								<div><a class="a dropdown-item" href="#">Партнерам</a></div>
								<div><a class="a dropdown-item" href="#">Контакты</a></div>
								<div><a class="a dropdown-item" href="#">Акции</a></div>
							</div>
						</div>
						<div class="toolbar__li"><a class="toolbar__link" href="#">Новости</a></div>
						<div class="toolbar__li"><a class="toolbar__link" href="#">Партнерам</a></div>
						<div class="toolbar__li"><a class="toolbar__link" href="#">Контакты</a></div>
						<div class="toolbar__li toolbar__li_contact">
							<a class="toolbar__link" href="tel:8(495)212-85-09">8 (495) 212-85-09</a>
							<span class="ms-3">с 9-00 до 18-00</span>
						</div>
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
					<div class="header__user">
						<div class="user-thumbnail">
							<div class="user-thumbnail__control">
								<a class="btn btn-primary rounded-pill w-100" role="button" href="/login/">
									Вход<span class="d-none d-lg-inline"> для дилеров</span>
								</a>
							</div>
						</div>
					</div>
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