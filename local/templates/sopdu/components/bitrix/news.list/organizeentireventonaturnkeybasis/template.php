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
<div class="organize">
	<div class="row">
		<div class="col-lg-5 col-12">
			<h2 class="white">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"AREA_FILE_SHOW" => "file",
						"PATH" => $this->GetFolder().'/include.php',
						"EDIT_TEMPLATE" => ""
					),
					false
				);?>
			</h2>
			<div class="box"></div>
		</div>
		<div class="col-lg-7 col-12">
			<ul class="organize-list">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<li class="organize-list-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<p class="list-header">
							<?=$arItem["NAME"]?>
							<?if(count($arItem["PROPERTIES"]["list"]["VALUE"]) > 1):?>:<?endif;?>
						</p>
						<?if(count($arItem["PROPERTIES"]["list"]["VALUE"]) > 1):?>
							<ul class="list-second">
								<?foreach ($arItem["PROPERTIES"]["list"]["VALUE"] as $list):?>
									<li class="list-text">- <?=$list?></li>
								<?endforeach;?>
							</ul>
						<?else:?>
							<p class="list-text"><?=$arItem["PROPERTIES"]["list"]["VALUE"][0]?></p>
						<?endif;?>
					</li>
				<?endforeach;?>
			</ul>
		</div>
	</div>
</div>