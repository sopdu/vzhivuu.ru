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
<div class="container">
    <div class="header">
        <div class="header-content">
            <?foreach($arResult["ITEMS"] as $arItem):?>
	            <?
	                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	            ?>
                <div class="header-content-box" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <h1>
                        <?=$arItem["NAME"]?>
                        <?if(!empty($arItem["PROPERTIES"]["game_name"]["VALUE"])):?>
                            <br />
                            <span class="game-header">«<?=$arItem["PROPERTIES"]["game_name"]["VALUE"]?>»</span>
                        <?endif;?>
                    </h1>
                    <p class="main-header-desc"><?=$arItem["PREVIEW_TEXT"]?></p>
                    <p class="personal-offer"><?=$arItem["DETAIL_TEXT"]?>
                    <?if(!empty($arItem["PROPERTIES"]["button_link"]["VALUE"])):?>
						<a class="btn-link" href="<?=$arItem["PROPERTIES"]["button_link"]["VALUE"]?>"><button class="green-btn header-btn"><?=GetMessage("getKP")?></button></a>
                    <?endif;?>
                </div>
				<div style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')" class="header-illustration"></div>
				<?/*
                <?if(empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
                    <div style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')" class="header-illustration"></div>
                <?else:?>
                    <div class="header-illustration"></div>
                <?endif;?>
				*/?>
            <?endforeach;?>
        </div>
    </div>
</div>