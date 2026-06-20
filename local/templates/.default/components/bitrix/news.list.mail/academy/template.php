<?php
B_PROLOG_INCLUDED === true || die();
/**
 * @var array $arResult
 */
?>
<? if ($arResult['ITEMS']): ?>
    <ol>
        <? foreach ($arResult['ITEMS'] as $item): ?>
            <li>
                <a href="https://<?= $arResult['SERVER_NAME'] ?><?= $item['DETAIL_PAGE_URL'] ?>">
                    <?= $item['NAME'] ?>
                </a>
            </li>
        <? endforeach ?>
    </ol>
<? endif ?>