<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	CModule::IncludeModule("iblock");
	function getProperty($element, $code){
		$zapros = CIBlockElement::GetProperty(10, $element, [], ["CODE" => $code]);
		while ($row = $zapros->Fetch()){
			$result[] = $row["VALUE"];
		}
		return $result;
	}
	function getCatalog(){
		$zapros = CIBlockElement::GetList(
			[],
			[
				"ACTIVE"    =>  'Y',
				"IBLOCK_ID" =>  10,
				//"ID"        =>  73
			],
			false,
			false,
			["ID", "NAME", "PREVIEW_TEXT"]
		);
		while ($row = $zapros->Fetch()){
			$result[$row["ID"]] = [
				"id"            =>  $row["ID"],
				"name"          =>  $row["NAME"],
				"text"          =>  $row["PREVIEW_TEXT"],
				"price"         =>  getProperty($row["ID"], 'price'),
				"game_active"   =>  getProperty($row["ID"], 'game_active'),
				"element_type"  =>  getProperty($row["ID"], 'element_type'),
				"game"          =>  getProperty($row["ID"], 'game'),
				"picture"       =>  getProperty($row["ID"], 'picture'),
				"video"         =>  getProperty($row["ID"], 'video')
			];
		}
		return $result;
	}
	foreach (getCatalog() as $cat){
		if(in_array($arParams["ELEMENT"], $cat["game"])){
			$arResult["ITEM"][] = $cat;
		}
	}
	$this->IncludeComponentTemplate();
?>