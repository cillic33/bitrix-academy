<?php include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

/**
 * @global CMain $APPLICATION
 */

use Bitrix\Main\Application;

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404");
$request = Application::getInstance()->getContext()->getRequest();
?>
	<div class="modal d-block bg-light">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-light border-0">
				<div class="modal-header justify-content-between border-0 px-0 pb-md-5">
					<div class="image image_size_157x53 text-center">
						<div class="image__inner">
							<a class="a" href="<?=SITE_DIR?>">
								<img class="img img_lazy lazyload"
									 src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
									 alt="image"
									 data-src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png"></a>
						</div>
					</div>
				</div>
				<div class="modal-body rounded-4 p-4">
					<div class="p-lg-2">
						<div class="error-box">
							<div class="d-grid gap-3">
								<div class="error-box__code">404</div>
								<h4 class="mt-0">Неправильно набран адрес или такой страницы не существует</h4>
								<div>
									<div class="d-grid d-sm-flex gap-3 justify-content-sm-center">
										<?php if ($request->get("backurl")):?>
											<a class="btn btn-outline-primary rounded-pill px-5" role="button" href="<?=$request->get("backurl")?>">Вернуться назад</a>
										<?php endif;?>
										<a class="btn btn-primary rounded-pill px-5" role="button" href="<?=SITE_DIR?>">На главную</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>