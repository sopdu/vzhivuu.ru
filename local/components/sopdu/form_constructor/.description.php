<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	$arComponentDescription = [
		"NAME"          =>  GetMessage("sopduFormConstrustorName"),
		"DESCRIPTION"   =>  GetMessage("sopduFormConstrustorDescription"),
		"CACHE_PATH"    =>  'N',
		"PATH"          =>  [
			"ID"        =>  'sopdu',
			"NAME"      =>  GetMessage("sopduFormConstrustorDeveloper")
		]
	];
?>