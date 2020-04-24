<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
	$arComponentParameters = [
		"GROUPS"        =>  [
			"sopduFormConstructorSetting"   =>  [
				"NAME"  =>  GetMessage("sopduFormConstructorSetting")
			]
		],
		"PARAMETERS"    =>  [
			"ACTIVE"        =>  [
				"PARENT"    =>  'sopduFormConstructorSetting',
				"NAME"      =>  GetMessage("sopduFormConstructorActive"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'CHECKBOX',
				"DEFAULT"   =>  'Y'
			]
		]
	];
?>