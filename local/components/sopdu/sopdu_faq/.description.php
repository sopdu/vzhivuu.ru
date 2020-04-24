<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$arComponentDescription = [
		"NAME"          =>  GetMessage("sopduFaqCompnentName"),
		"DESCRIPTION"   =>  GetMessage("sopduFaqComponentDescription"),
		"CACHE_PATH"    =>  'Y',
		"PATH"          =>  [
			"ID"        =>  'sopdu',
			"NAME"      =>  GetMessage("sopduFaqDeveloper")
		]
	];
?>