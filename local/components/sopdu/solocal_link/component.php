<?php
	if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	$arResult = [
		"whatsapp"  =>  $arParams["sopduSolocalLinkWhatsApp"],
		"telegram"  =>  $arParams["sopduSolocalLinkTelegram"],
		"email"     =>  $arParams["sopduSolocalLinkEmail"],
		"vk"        =>  $arParams["sopduSolocalLinkVk"],
		"facebook"  =>  $arParams["sopduSolocalLinkFacebook"],
		"instagram" =>  $arParams["sopduSolocalLinkInstagram"],
		"youtube"   =>  $arParams["sopduSolocalLinkYoutube"]
	];
	$this->IncludeComponentTemplate();
?>