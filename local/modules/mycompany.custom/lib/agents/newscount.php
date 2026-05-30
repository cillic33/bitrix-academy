<?php

namespace MyCompany\Custom\Agents;

use CEventLog;
use CIBlockElement;

class NewsCount
{
	static function checkNewsCountAgent(int $lastId = 0): string
	{
		\Bitrix\Main\Loader::includeModule('iblock');
		$today = new \Bitrix\Main\Type\Date();
		$yesterday = (new \Bitrix\Main\Type\Date())->add('-1 day');

		$result = CIblockElement::GetList(
			['ID' => 'ASC'],
			[
				'IBLOCK_ID' => IBLOCK_NEWS_ID,
				'>ID' => $lastId,
			],
			false,
			false,
			['ID']
		);

		$count = 0;
		while ($item = $result->Fetch())
		{
			$lastId = $item['ID'];
			$count++;
		}

		if ($count > 0)
		{
			CEventLog::Add([
				'SEVERITY' => 'INFO',
				'AUDIT_TYPE_ID' => 'NEWS_COUNT_AGENT',
				'MODULE_ID' => '',
				'DESCRIPTION' => "Добавлено новостей: $count",
			]);
		}

		return __METHOD__ . "($lastId);";
	}
}