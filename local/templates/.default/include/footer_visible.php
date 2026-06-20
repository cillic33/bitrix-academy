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
						<?$APPLICATION->IncludeComponent(
							"bitrix:main.include",
							".default",
							[
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"COMPONENT_TEMPLATE" => ".default",
								"PATH" => "/include/working_time.php"
							],
							false
						);?>
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
	<?$APPLICATION->IncludeComponent(
			"bitrix:search.title",
			"",
			Array(
					"CATEGORY_0" => array("iblock_products"),
					"CATEGORY_0_TITLE" => "",
					"CATEGORY_0_iblock_products" => array("2"),
					"CHECK_DATES" => "N",
					"CONTAINER_ID" => "SIDE_SEARCH",
					"INPUT_ID" => "title-search-input-mobile",
					"NUM_CATEGORIES" => "1",
					"ORDER" => "date",
					"PAGE" => "#SITE_DIR#search/index.php",
					"SHOW_INPUT" => "Y",
					"SHOW_OTHERS" => "N",
					"TOP_COUNT" => "5",
					"USE_LANGUAGE_GUESS" => "Y"
			)
	);?>