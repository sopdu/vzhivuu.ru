<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="social-icons social-footer social-icons-bottom">
	<?if(!empty($arResult["whatsapp"])):?>
		<a href="<?=$arResult["whatsapp"]?>" class="social-link"><div class="social-icon wa"></div></a>
	<?endif;?>
	<?if(!empty($arResult["email"])):?>
		<a href="<?=$arResult["email"]?>" class="social-link"><div class="social-icon mail"></div></a>
	<?endif;?>
	<?if(!empty($arResult["telegram"])):?>
		<a href="<?=$arResult["telegram"]?>" class="social-link"><div class="social-icon tg"></div></a>
	<?endif;?>
	<?if(!empty($arResult["vk"])):?>
		<a href="<?=$arResult["vk"]?>" class="social-link"><div class="social-icon vk"></div></a>
	<?endif;?>
	<?if(!empty($arResult["facebook"])):?>
		<a href="<?=$arResult["facebook"]?>" class="social-link"><div class="social-icon fb"></div></a>
	<?endif;?>
	<?if(!empty($arResult["instagram"])):?>
		<a href="<?=$arResult["instagram"]?>" class="social-link"><div class="social-icon ig"></div></a>
	<?endif;?>
	<?if(!empty($arResult["youtube"])):?>
		<a href="<?=$arResult["youtube"]?>" class="social-link"><div class="social-icon yt"></div></a>
	<?endif;?>
</div>
