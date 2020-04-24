<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	if($arParams["ACTIVE"] == 'Y'){
		$zaprosElement = CIBlockElement::GetList(
			[],
			[
				"ACTIVE"    =>  'Y',
				"IBLOCK_ID" =>  $arParams["IBLOCK_ID"]
			],
			false,
			false,
			["ID", "NAME", "PREVIEW_TEXT", "IBLOCK_SECTION_ID"]
		);
		while ($rowElement = $zaprosElement->Fetch()){
			$zaprosSection = CIBlockSection::GetByID($rowElement["IBLOCK_SECTION_ID"]);
			$rowSection = $zaprosSection->Fetch();
			$arResult[$rowSection["ID"]]["SECTION"] = [
				"NAME"  =>  $rowSection["NAME"],
				"CODE"  =>  $rowSection["CODE"],
			];
			$arResult[$rowSection["ID"]]["ITEMS"][$rowElement["ID"]] = [
				"NAME"          =>  $rowElement["NAME"],
				"PREVIEW_TEXT"  =>  $rowElement["PREVIEW_TEXT"]
			];
		}
		$this->IncludeComponentTemplate();
	}
?>