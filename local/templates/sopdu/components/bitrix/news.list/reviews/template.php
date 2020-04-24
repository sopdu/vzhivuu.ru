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
<div class="feedbacks" id="feedbacks">
	<div class="container">
		<h2>Впечатление клиентов</h2>
		<div class="feedback-slider owl-carousel">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="feedback-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="feedback-img" />
					<?endif;?>
					<div class="feedback-text-block">
						<p class="event-name">
                            <a href="/<?=CIBlockElement::GetByID($arItem["PROPERTIES"]["name_event"]["VALUE"])->Fetch()["CODE"]?>/">
                                <?=CIBlockElement::GetByID($arItem["PROPERTIES"]["name_event"]["VALUE"])->Fetch()["NAME"]?>
                            </a>
                        </p>
						<p class="feedback-header">"<?=$arItem["NAME"]?>"</p>
						<p class="feedback-text"><?=$arItem["PREVIEW_TEXT"]?></p>
					</div>
					<?if(!empty($arItem["PROPERTIES"]["video"]["VALUE"])):?>
						<iframe class="feedback-video" width="580" height="325" src="<?=$arItem["PROPERTIES"]["video"]["VALUE"]?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<?endif;?>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>