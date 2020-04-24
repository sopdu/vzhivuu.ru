<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="rules">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <?if(!empty($arResult["PROPERTIES"]["video"]["VALUE"])):?>
	                <iframe class="rules-video" width="580" height="325" src="<?=$arResult["PROPERTIES"]["video"]["VALUE"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<?else:?>
					<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["picture"]["VALUE"])?>"  width="580" height="325" />
				<?endif;?>
            </div>
	        <div class="col-lg-6 col-12">
		        <h2><?=$arResult["PROPERTIES"]["rules"]["NAME"]?></h2>
		        <?$n=1?>
		        <?foreach ($arResult["PROPERTIES"]["rules"]["VALUE"] as $rules):?>
			        <p class="rule-text rule-<?=$n?>"><?=$rules?></p>
			        <?$n++?>
				<?endforeach;?>
	        </div>
        </div>
    </div>
    <div class="sharps"></div>
</div>
<div class="advantages" id="advantages">
	<div class="container">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"advantage_game",
			array(
				"COMPONENT_TEMPLATE" => "advantage_game",
				"IBLOCK_TYPE" => "promo",
				"IBLOCK_ID" => "3",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "name_event",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "Y",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"STRICT_SECTION_CHECK" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SET_STATUS_404" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => ""
			),
			false
		);?>
	</div>
</div>
<?#if ($USER->IsAdmin() || $_GET["ALEX"] == 'alex123'):?>
<?if ($_GET["ALEX"] == 'alex123'):?>
	<?$APPLICATION->IncludeComponent(
		"sopdu:form_catalog",
		".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"ELEMENT" => $arResult["ID"]
		),
		false
	);?>
<?endif;?>
    <?php/*
<div class="game-config">
	<div class="container">
		<h2 class="white">Вы можете сами задать конфигурацию игры</h2>
		<div class="table-wrap">
			inner
		</div>
	</div>
</div>
*/?>
<div class="feedbacks" id="feedbacks">
	<div class="container">
		<h2><?=GetMessage("detailReview")?></h2>
		<div class="feedback-slider owl-carousel">
			<?
				$zaprosReview = CIBlockElement::GetList(
					[],
					[
						"ACTIVE"                =>  'Y',
						"IBLOCK_ID"             =>  5,
						"PROPERTY_6_VALUE"      =>  $arResult["ID"]
					],
					false,
					false,
					["NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "PROPERTY_video"]
				);
			?>
			<?while($rowReview = $zaprosReview->Fetch()):?>
				<div class="feedback-slide">
					<img src="<?=CFile::GetPath($rowReview["PREVIEW_PICTURE"])?>" alt="" class="feedback-img" />
					<div class="feedback-text-block">
						<p class="event-name"><?=$arResult["NAME"]?></p>
						<p class="feedback-header">"<?=$rowReview["NAME"]?>"</p>
						<p class="feedback-text"><?=$rowReview["PREVIEW_TEXT"]?></p>
					</div>
					<?if(!empty($rowReview["PROPERTY_VIDEO_VALUE"])):?>
						<iframe class="feedback-video" width="580" height="325" src="<?=$rowReview["PROPERTY_VIDEO_VALUE"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?endif;?>
				</div>
			<?endwhile;?>
		</div>
	</div>
	<div class="sharps2"></div>
</div>
<?if(!empty($arResult["PROPERTIES"]["question_picture"]["VALUE"]) || !empty($arResult["PROPERTIES"]["question_melody"]["VALUE"])):?>
    <div class="guess-molody">
        <div class="container">
            <h2><?=GetMessage("detailGuessMolody")?></h2>
            <?if(!empty($arResult["PROPERTIES"]["question_picture"]["VALUE"])):?>
                <p class="header-desc"><?=GetMessage("detailGuessPicture")?></p>
				<?$guessPicture = CFile::GetPath($arResult["PROPERTIES"]["question_picture"]["VALUE"])?>
				<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["question_picture"]["VALUE"])?>" class="guess-img" width="50%" />
            <?else:?>
                <p class="header-desc"><?=GetMessage("detailGuessMelody")?></p>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/guess-img.png" class="guess-img music-img" />
				<script type="text/javascript">
                    $('.guess-img').click(function () {
                        var myAudio = new Audio;
                        myAudio.src = "<?=CFile::GetPath($arResult["PROPERTIES"]["question_melody"]["VALUE"])?>";
                        myAudio.play();
                    });
				</script>
            <?endif;?>
            <div id="sopduFormResult">
                <form method="post" id="sopduFormAjax" action="javascript:void(null);" class="guess-form">
                    <input type="text" name="vopros[answer]" placeholder="Ваш ответ?" class="guess-input">
                    <input type="text" name="vopros[name]" placeholder="Ваше имя" class="guess-input">
                    <input type="tel" name="vopros[phone]" placeholder="Ваш телефон" class="guess-input">
                    <input type="hidden" name="vopros[game]" value="<?=$arResult["NAME"]?>" />
                    <button class="green-btn-2 guess-btn" id="btn" type="submit">Проверить ответ</button>
                </form>
            </div>
<?// include component?>
	        <?/*
			<form action="#" class="guess-form">
				<input type="text" name="answer" placeholder="Ваш ответ?" class="guess-input">
				<input type="text" name="name" placeholder="Ваше имя" class="guess-input">
				<input type="tel" name="phone" placeholder="Ваш телефон" class="guess-input">
				<button class="green-btn-2 guess-btn">Проверить ответ</button>
			</form>
			*/?>
<?// include component?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script type="text/javascript">
                $("#sopduFormAjax").on("submit", function(){
                    $.ajax({
                        url: '/ajax.php',
                        method: 'post',
                        dataType: 'html',
                        data: $(this).serialize(),
                        success: function(data){
                            $('#sopduFormResult').html(data);
                        }
                    });
                });
            </script>
        </div>
    </div>
<?endif;?>
<div class="scenario">
	<div class="container">
		<h2 class="white"><?=GetMessage("detailScenario")?></h2>
		<?$n=1?>
		<?foreach ($arResult["PROPERTIES"]["scenario"]["VALUE"] as $scenario):?>
            <?
				$zaprosScenario = CIBlockElement::GetList(
					[],
					[
	                    "IBLOCK_ID" =>  9,
                        "ID"        =>  $scenario,
                        "ACTIVE"    =>  'Y'
                    ],
					false,
                    false,
                    ["PROPERTY_title", "PREVIEW_TEXT"]
				);
				$resultScenario = $zaprosScenario->Fetch();
			?>
			<div class="scenario-item">
				<div class="scenario-img scenario-img-<?=$n?>"></div>
				<p class="scenario-name"><?=$resultScenario["PROPERTY_TITLE_VALUE"]?></p>
				<p class="scenario-text"><?=$resultScenario["PREVIEW_TEXT"]?></p>
			</div>
			<?$n++?>
		<?endforeach;?>
	</div>
</div>
<div class="games-list">
    <div class="container">
        <h2><?=GetMessage("detailGameList")?></h2>
        <p class="header-desc"><?=GetMessage("detailGameListText")?></p>
    </div>
    <div class="games-list-slider owl-carousel">
	    <?$APPLICATION->IncludeComponent("bitrix:news.list", "detailGame", Array(
		    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		    "AJAX_MODE" => "N",	// Включить режим AJAX
		    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
		    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		    "CACHE_TYPE" => "A",	// Тип кеширования
		    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		    "DISPLAY_DATE" => "N",	// Выводить дату элемента
		    "DISPLAY_NAME" => "Y",	// Выводить название элемента
		    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		    "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		    "FIELD_CODE" => array(	// Поля
			    0 => "",
			    1 => "",
		    ),
		    "FILTER_NAME" => "",	// Фильтр
		    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		    "IBLOCK_ID" => "2",	// Код информационного блока
		    "IBLOCK_TYPE" => "games",	// Тип информационного блока (используется только для проверки)
		    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		    "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		    "NEWS_COUNT" => "20",	// Количество новостей на странице
		    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		    "PAGER_TITLE" => "Игры",	// Название категорий
		    "PARENT_SECTION" => "",	// ID раздела
		    "PARENT_SECTION_CODE" => "",	// Код раздела
		    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		    "PROPERTY_CODE" => array(	// Свойства
			    0 => "",
			    1 => "",
		    ),
		    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		    "SET_STATUS_404" => "N",	// Устанавливать статус 404
		    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
		    "SHOW_404" => "N",	// Показ специальной страницы
		    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	    ),
		    false
	    );?>
    </div>
</div>


<?#='<pre>'; print_r($_SERVER["DOCUMENT_ROOT"].$templateFolder.'/games-list.php'); '</pre>';?>




<?#='<pre>'; print_r($arResult["PROPERTIES"]); '</pre>';?>
<?#='<pre>'; print_r($arResult); '</pre>';?>
<?php/*
inner

<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
*/?>