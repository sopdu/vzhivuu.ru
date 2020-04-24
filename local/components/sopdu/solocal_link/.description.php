<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
	"NAME"          =>  GetMessage("sopduSolocalLinkName"),
	"DESCRIPTION"   =>  GetMessage("sopduSolocalLinkDescription"),
	"CACHE_PATH"    =>  'Y',
	"PATH"          =>  [
		"ID"        =>  'sopdu',
		"NAME"      =>  GetMessage("sopduSolocalLinkDeveloper")
	]
];
?>
