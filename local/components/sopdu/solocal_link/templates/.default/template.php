<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="social-icons">
	<?if(!empty($arResult["whatsapp"])):?>
		<a href="<?=$arResult["whatsapp"]?>" class="social-link"><div class="social-icon wa"></div></a>
	<?endif;?>
	<?if(!empty($arResult["telegram"])):?>
		<a href="<?=$arResult["telegram"]?>" class="social-link"><div class="social-icon tg"></div></a>
	<?endif;?>
	<?if(!empty($arResult["email"])):?>
		<a href="<?=$arResult["email"]?>" class="social-link"><div class="social-icon mailru"></div></a>
	<?endif;?>
</div>
