<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="social-icons social-footer">
	<?if(!empty($arResult["whatsapp"])):?>
		<a href="<?=$arResult["whatsapp"]?>" class="social-link"><div class="social-icon footer-wa"></div></a>
	<?endif;?>
	<?if(!empty($arResult["email"])):?>
		<a href="<?=$arResult["email"]?>" class="social-link"><div class="social-icon footer-mail"></div></a>
	<?endif;?>
	<?if(!empty($arResult["telegram"])):?>
		<a href="<?=$arResult["telegram"]?>" class="social-link"><div class="social-icon footer-tg"></div></a>
	<?endif;?>
</div>
