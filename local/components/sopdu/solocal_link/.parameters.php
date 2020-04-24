<?php
	if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
	$arComponentParameters = [
		"GROUPS"        =>  [
			"sopduSolocalLinkSetting"   =>  [
				"NAME"  =>  GetMessage("sopduSolocalLinkSetting")
			]
		],
		"PARAMETERS"    =>  [
			"sopduSolocalLinkWhatsApp"  =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkWhatsApp"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkTelegram"  =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkTelegram"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkEmail"  =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkEmail"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkVk"    =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkVk"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkFacebook"    =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkFacebook"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkInstagram"    =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkInstagram"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			],
			"sopduSolocalLinkYoutube"    =>  [
				"PARENT"    =>  'sopduSolocalLinkSetting',
				"NAME"      =>  GetMessage("sopduSolocalLinkYoutube"),
				"REFRESH"   =>  'N',
				"TYPE"      =>  'STRING'
			]
		]
	];
?>