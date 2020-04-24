<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
	global $APPLICATION;
	$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH."/src/bootstrap.css");
	$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH."/src/ion.rangeSlider.min.css");
	$APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH."/src/owl.carousel.min.css");
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<?/*<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />*/?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="yandex-verification" content="34d380680a0c7522" />
</head>
<? if ($APPLICATION->GetCurPage(false) === '/'): ?>
<body>
<?else:?>
<body class="game-page">
<?endif;?>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="clear"></div>
<div class="container-fluid p-0">
	
	<header id="main">
		<div class="rombs">
			<div class="navigation">
				<nav class="navbar navbar-expand-lg navbar-light mmenu">
					<div class="container">
						<a class="navbar-brand" href="/">
							<img class="logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" area-controls="navbarSupportedContent" aria-expanded="false" aria-lable="Toggle navigation">
							<span class="navbar-toggler-icon"> </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?
                                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                                    "top_menu",
                                    Array(),
								false
							    );
                            ?>
                            <div class="contacts-block-mobile">
                                <p class="phone">
                                    <a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')?>" class="phone">
		                                <?$APPLICATION->IncludeComponent(
			                                "bitrix:main.include",
			                                ".default",
			                                array(
				                                "COMPONENT_TEMPLATE" => ".default",
				                                "COMPOSITE_FRAME_MODE" => "A",
				                                "COMPOSITE_FRAME_TYPE" => "AUTO",
				                                "AREA_FILE_SHOW" => "file",
				                                "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
				                                "EDIT_TEMPLATE" => "standard.php"
			                                ),
			                                false
		                                );?>
                                    </a>
                                </p>
	                            <?$APPLICATION->IncludeComponent(
		                            "bitrix:main.include",
		                            ".default",
		                            array(
			                            "COMPONENT_TEMPLATE" => ".default",
			                            "COMPOSITE_FRAME_MODE" => "A",
			                            "COMPOSITE_FRAME_TYPE" => "AUTO",
			                            "AREA_FILE_SHOW" => "file",
			                            "PATH" => SITE_TEMPLATE_PATH."/include/solocal.php",
			                            "EDIT_TEMPLATE" => "standard.php"
		                            ),
		                            false
	                            );?>
                            </div>
                            <div class="contacts-block">
                                <p class="phone">
                                    <a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')?>" class="phone">
		                                <?$APPLICATION->IncludeComponent(
			                                "bitrix:main.include",
			                                ".default",
			                                array(
				                                "COMPONENT_TEMPLATE" => ".default",
				                                "COMPOSITE_FRAME_MODE" => "A",
				                                "COMPOSITE_FRAME_TYPE" => "AUTO",
				                                "AREA_FILE_SHOW" => "file",
				                                "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
				                                "EDIT_TEMPLATE" => "standard.php"
			                                ),
			                                false
		                                );?>
                                    </a>
                                </p>
	                            <?$APPLICATION->IncludeComponent(
		                            "sopdu:solocal_link",
		                            ".default",
		                            array(
			                            "COMPONENT_TEMPLATE" => ".default",
			                            "sopduSolocalLinkWhatsApp" => "1",
			                            "sopduSolocalLinkTelegram" => "2",
			                            "sopduSolocalLinkEmail" => "3"
		                            ),
		                            false
	                            );?>
                            </div>
						</div>
					</div>
				</nav>
			</div>
            <?
                if(CSite::InDir('/index.php')){
	                $arrFilter = ["PROPERTY_index_page_VALUE" => 'Да'];
                } else {
                    $exp = explode('/', $_SERVER["REDIRECT_URL"]);
		            CModule::IncludeModule("iblock");
                    $zaprosGameID = CIBlockElement::GetList([], ["ACTIVE" => 'Y', "IBLOCK_ID" => 2, "CODE" => $exp[1]], false, false, ["ID"])->Fetch()["ID"];
                    $zaprosBanerID = CIBlockElement::GetProperty(2, $zaprosGameID, [], ["CODE" => 'baner_top'])->Fetch()["VALUE"];
		            $arrFilter = ["ID" => $zaprosBanerID];
                }
	            $APPLICATION->IncludeComponent(
		            "bitrix:news.list",
		            "top_promo",
		            array(
			            "IBLOCK_TYPE" => "promo",
			            "IBLOCK_ID" => "1",
			            "NEWS_COUNT" => "1",
			            "SORT_BY1" => "ACTIVE_FROM",
			            "SORT_ORDER1" => "RAND",
			            "SORT_BY2" => "RAND",
			            "SORT_ORDER2" => "",
			            "FILTER_NAME" => "arrFilter",
			            "USE_FILTER" => "Y",
			            "FIELD_CODE" => array(
				            0 => "",
				            1 => "",
			            ),
			            "PROPERTY_CODE" => array(
				            0 => "game_name",
				            1 => "index_page",
				            2 => "game_page",
				            3 => "button_link",
				            4 => "",
			            ),
			            "CHECK_DATES" => "Y",
			            "DETAIL_URL" => "",
			            "AJAX_MODE" => "N",
			            "AJAX_OPTION_JUMP" => "N",
			            "AJAX_OPTION_STYLE" => "Y",
			            "AJAX_OPTION_HISTORY" => "N",
			            "CACHE_TYPE" => "A",
			            "CACHE_TIME" => "36000000",
			            "CACHE_FILTER" => "N",
			            "CACHE_GROUPS" => "Y",
			            "PREVIEW_TRUNCATE_LEN" => "",
			            "ACTIVE_DATE_FORMAT" => "d.m.Y",
			            "SET_TITLE" => "N",
			            "SET_STATUS_404" => "N",
			            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			            "ADD_SECTIONS_CHAIN" => "N",
			            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
			            "PARENT_SECTION" => "",
			            "PARENT_SECTION_CODE" => "",
			            "DISPLAY_TOP_PAGER" => "N",
			            "DISPLAY_BOTTOM_PAGER" => "N",
			            "PAGER_TITLE" => "Новости",
			            "PAGER_SHOW_ALWAYS" => "N",
			            "PAGER_TEMPLATE" => "",
			            "PAGER_DESC_NUMBERING" => "N",
			            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			            "PAGER_SHOW_ALL" => "N",
			            "DISPLAY_DATE" => "N",
			            "DISPLAY_NAME" => "Y",
			            "DISPLAY_PICTURE" => "Y",
			            "DISPLAY_PREVIEW_TEXT" => "Y",
			            "AJAX_OPTION_ADDITIONAL" => "",
			            "COMPONENT_TEMPLATE" => "top_promo",
			            "SET_BROWSER_TITLE" => "N",
			            "SET_META_KEYWORDS" => "N",
			            "SET_META_DESCRIPTION" => "N",
			            "SET_LAST_MODIFIED" => "N",
			            "INCLUDE_SUBSECTIONS" => "Y",
			            "STRICT_SECTION_CHECK" => "N",
			            "PAGER_BASE_LINK_ENABLE" => "N",
			            "SHOW_404" => "N",
			            "MESSAGE_404" => ""
		            ),
		            false
	            );
            ?>
		</div>
	</header>

 