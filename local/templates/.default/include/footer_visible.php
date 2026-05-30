<?php B_PROLOG_INCLUDED === true || die();
/**
 * @global CMain $APPLICATION
 */
?>
		</div>
	</main>
	<footer class="footer">
		<div class="container-lg">
			<div class="footer__inner">
				<div class="footer__logo">
					<div class="image image_size_157x53">
						<div class="image__inner">
							<a class="a" href="<?=SITE_DIR?>">
								<img class="img img_lazy lazyload"
									 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									 alt="image"
									 data-src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png">
							</a>
						</div>
					</div>
				</div>
				<div class="footer__contact"><small>Телефон</small>
					<div>
						<a class="a" href="tel:8(495)212-85-09">8 (495) 212-85-09</a>
					</div>
				</div>
				<div class="footer__contact"><small>Время работы</small>
					<div>
						<span class="d-none d-md-inline">ежедневно</span>
						<span>с 9-00</span>
						до
						<span>18-00</span>
					</div>
				</div>
				<div class="footer__contact">
					<small>Адрес</small>
					<div>г. Москва, ул. Летняя стр.12, офис 512</div>
				</div>
			</div>
		</div>
		<div class="toolbar toolbar_large">
			<div class="container-lg">
				<div class="toolbar__list">
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">О компании</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Отзывы</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">История</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Вакансии</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Миссия и стратегия</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Новости</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Партнерам</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Контакты</a></div>
					<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)">Акции</a></div>
					<div class="toolbar__li toolbar__li_social">
						<div class="toolbar__list">
							<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)"><i class="fa-brands fa-vk"></i></a></div>
							<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a></div>
							<div class="toolbar__li"><a class="toolbar__link" href="javascript:void(0)"><i class="fa-brands fa-telegram"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container-lg">
				<div class="copyright__list">
					<div class="copyright__li">
						&copy; 2000&dash;<?=date("Y")?> &laquo;Магазин мебели&raquo;
					</div>
					<div class="copyright__li d-flex align-items-center gap-1">
						<a class="a" href="javascript:void(0)">Разработка сайта</a> —
						<img class="img img_lazy lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="image" data-src="<?=DEFAULT_TEMPLATE_PATH?>/images/developer.svg">
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="offcanvas offcanvas-start" id="SIDE_PANEL">
		<div class="offcanvas-header">
			<div class="offcanvas__btn" data-bs-dismiss="offcanvas">
				<div class="fa-solid fa-xmark"></div>
				<span class="flex-grow-1 ps-2">Закрыть</span>
			</div>
			<div class="offcanvas__btn" data-bs-toggle="offcanvas" data-bs-target="#SIDE_SEARCH" role="button">
				<div class="fa-solid fa-magnifying-glass"></div>
				<span class="flex-grow-1 ps-2">Поиск</span>
			</div>
		</div>
		<div class="offcanvas-body p-0">
			<?php $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"mobile",
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
		<div class="p-3 flex-grow-0 flex-shrink-1 text-center">
			<a class="btn btn-primary w-100 rounded-pill" role="button" href="tel:84952128509">8 (495) 212-85-09</a>
			<div class="mt-2 text-muted">ежедневно с 9-00 до 18-00</div>
		</div>
	</div>
	<div class="offcanvas offcanvas-start" id="SIDE_SEARCH">
		<div class="offcanvas-header ps-0 pt-3 pb-0">
			<div class="flex-grow-1 pe-3">
				<div class="search">
					<div class="search__form"><input class="form-control rounded-pill" id="uniq169564607471910" placeholder="Поиск по сайту" type="text">
						<div class="search__icon fa-solid fa-magnifying-glass"></div>
					</div>
				</div>
			</div>
			<div class="offcanvas__btn" data-bs-toggle="offcanvas" data-bs-target="#SIDE_PANEL" role="button">
				<div class="fa-solid fa-xmark"></div>
			</div>
		</div>
		<div class="offcanvas-body p-0">
			<div class="list-group list-group-flush">
				<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b></a>
				<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой</a>
				<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый</a>
				<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый Мускари</a>
				<a class="a list-group-item list-group-item-action" href="javascript:void(0)"><b>Диван</b> угловой тканевый Мускари</a>
			</div>
		</div>
		<div class="p-3 flex-grow-0 flex-shrink-1 text-center">
			<a class="btn btn-outline-primary rounded-pill w-100" role="button" href="javascript:void(0)">Смотреть все результаты</a>
		</div>
	</div>