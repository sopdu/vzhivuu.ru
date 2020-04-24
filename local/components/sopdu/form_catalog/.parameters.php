<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
	$arComponentParameters = [
		"GROUPS"        =>  [
			"sopduFormCatalogSetting"   =>  [
				"NAME"  =>  GetMessage("sopduFormCatalogSetting")
			]
		],
		"PARAMETERS"    =>  [
			"ELEMENT"   =>  [
				"PARENT"    =>  'sopduFormCatalogSetting',
				"NAME"      =>  GetMessage("sopduFormCatalogGame"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			]
		]
	];
?>