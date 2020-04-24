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
<div class="our-games" id="games">
    <div class="ball-left"></div>
    <div class="ball-right"></div>
    <div class="container">
        <h2><?=GetMessage("our_game")?></h2>
        <p class="header-desc"><?=GetMessage("subTitle")?></p>
        <div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
                <div class="col-lg-3 col-6 text-center p-2" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="game-link">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" class="game-img">
                        <p class="game-name"><?=$arItem["NAME"]?></p>
                    </a>
                </div>
			<?endforeach;?>
        </div>
    </div>
</div>