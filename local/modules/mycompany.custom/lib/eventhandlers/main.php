<?php

namespace MyCompany\Custom\EventHandlers;

class Main
{
	static function redirectFromTestPage(): void
	{
		global $USER, $APPLICATION;
		$curPage = $APPLICATION->GetCurPage();
		if (str_ends_with($curPage, 'test.php') && !$USER->IsAdmin())
		{
			LocalRedirect('/');
		}
	}

	static function setIsDevServerConstant()
	{
		$isDevServ = \Bitrix\Main\Config\Option::get('main', 'update_devsrv');
		if ($isDevServ === 'Y')
		{
			if (!defined('IS_DEV_SERVER'))
			{
				define('IS_DEV_SERVER', true);
			}
		}
	}
}
