<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

	if (!CModule::IncludeModule("iblock"))	{
		ShowMessage(GetMessage("IBLOCK_ERROR"));
		return false;
	}
	// Получение списка типов инфоблоков
	$dbIBlockTypes = CIBlockType::GetList(array("SORT"=>"ASC"), array("ACTIVE"=>"Y"));
	while ($arIBlockTypes = $dbIBlockTypes->GetNext()){
		$paramIBlockTypes[$arIBlockTypes["ID"]] = $arIBlockTypes["ID"];
	}
	
	// Получение списка инфоблоков заданного типа
	$dbIBlocks = CIBlock::GetList(
		["SORT"  =>  "ASC"],
		[
			"ACTIVE"    =>  "Y",
			"TYPE"      =>  $arCurrentValues["IBLOCK_TYPE"],
		]
	);
	while ($arIBlocks = $dbIBlocks->GetNext()){
		$paramIBlocks[$arIBlocks["ID"]] = "[" . $arIBlocks["ID"] . "] " . $arIBlocks["NAME"];
	}
	
	$arComponentParameters = [
		"GROUPS"        =>  [
			"sopduFaqSetting"   =>  [
				"NAME"  =>  GetMessage("sopduFaqSetting")
			]
		],
		"PARAMETERS"    =>  [
			"IBLOCK_TYPE"   =>  [
				"PARENT"    =>  "sopduFaqSetting",
				"NAME"      =>  GetMessage("IBLOCK_TYPE"),
				"TYPE"      =>  "LIST",
				"VALUES"    =>  $paramIBlockTypes,
				"REFRESH"   =>  "Y",
				"MULTIPLE"  =>  "N",
			],
			"IBLOCK_ID"     =>  [
				"PARENT"    =>  "sopduFaqSetting",
				"NAME"      =>  GetMessage("IBLOCK_ID"),
				"TYPE"      =>  "LIST",
				"VALUES"    =>  $paramIBlocks,
				"REFRESH"   =>  "Y",
				"MULTIPLE"  =>  "N",
			],
			"ACTIVE"        =>  [
				"PARENT"    =>  'sopduFaqSetting',
				"NAME"      =>  GetMessage("ACTIVE"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'CHECKBOX',
				"DEFAULT"   =>  'Y'
			]
		]
	];
?>