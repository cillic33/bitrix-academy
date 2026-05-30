<?php B_PROLOG_INCLUDED === true || die();
/**
 * @global CMain $APPLICATION
 */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Application;

define("DEFAULT_TEMPLATE_PATH", "/local/templates/.default");
include_once Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH ."/init.php";
?>
<!DOCTYPE html>
<html class="ua-no-js" lang="<?=LANGUAGE_ID?>">

<head>
	<script data-skip-moving="true">
		!function(e, n) {
			function r() {
				var e={
					elem: n.createElement("modernizr")
				}.elem.style;
				try {
					return e.fontSize="3ch", -1 !== e.fontSize.indexOf("ch")
				} catch (e) {
					return !1
				}
			}

			function t() {
				var n, r=e.crypto || e.msCrypto;
				if (r && "getRandomValues" in r && "Uint32Array" in e) {
					var t=new Uint32Array(10),
						a=r.getRandomValues(t);
					n=a && "number" == typeof a[0]
				}
				return !!n
			}

			var a=n.documentElement.className;
			a=a.replace("ua-no-js", "ua-js"), "performance" in e && t() && r() || navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform) && Promise && t() && r() ? a+=" ua-modern" : a+=" ua-no-modern", n.documentElement.className+=" " + a
		}(window, document);
	</script>
	<script data-skip-moving="true">
		!function(o, n) {
			document.documentElement.className+="ontouchstart" in o || navigator.maxTouchPoints ? " ua-touch" : " ua-no-touch"
		}(window);
	</script>
	<title><?php $APPLICATION->showTitle() ?></title>
	<?php $APPLICATION->showHead() ?>
</head>

<body><!--noindex-->
<div id="panel">
	<?php $APPLICATION->showPanel() ?>
</div>
<noscript class="page__alert"><?=Loc::getMessage("ACADEMY_TEMPLATE_NO_JS")?></noscript>
<div class="page__alert visible-no-modern">
	<?=Loc::getMessage("ACADEMY_TEMPLATE_OLD_BROWSER_BEFORE_LINK")?>
	<a rel="nofollow" target="_blank" onclick="window.open(this.href, '_blank');return 0" href="https://browsehappy.com/"><?=Loc::getMessage("ACADEMY_TEMPLATE_OLD_BROWSER_IN_LINK")?></a>
	<?=Loc::getMessage("ACADEMY_TEMPLATE_OLD_BROWSER_AFTER_LINK")?>
</div><!--/noindex-->