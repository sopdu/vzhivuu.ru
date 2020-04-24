<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$arComponentDescription = [
		"NAME"          =>  GetMessage("sopduFormCatalogName"),
		"DESCRIPTION"   =>  GetMessage("sopduFormCatalogDescription"),
		"CACHE_PATH"    =>  'Y',
		"PATH"          =>  [
			"ID"        =>  'sopdu',
			"NAME"      =>  GetMessage("sopduFormCatalogDeveloper")
		]
	];
?>