<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/src/fancybox/jquery.fancybox.css">
<form class="game-config">
	<div class="container">
		<h2 class="white"><?=GetMessage("sopduCatTitle")?></h2>
		<div class="table-wrap">
			<table class="game-config-table">
				<tbody>
					<tr class="header-row">
						<td class="td-1 img"><?=GetMessage("sopduCatRecvizit")?></td>
						<td class="td-2 rent-name"></td>
						<td class="td-3 count"><?=GetMessage("sopduCatKolvo")?></td>
						<td class="td-4 price"></td>
						<td class="td-5 on-off"></td>
					</tr>
					<?foreach ($arResult["ITEM"] as $recvizit):?>
						<?if($recvizit["element_type"][0] == 13):?>
							<tr>
								<td class="td-1 img">
									<?if(!empty($recvizit["picture"][0])):?>
										<div class="img-wrap owl-carousel">
											<?foreach ($recvizit["picture"] as $picture):?>
												<a href="<?=CFile::GetPath($picture)?>" class="table-img-link">
													<div class="table-img"><img src="<?=CFile::GetPath($picture)?>" /></div>
												</a>
											<?endforeach;?>
										</div>
									<?endif;?>
								</td>
                                <td class="td-2 rent-name">
                                    <p class="requisite-name"><?=$recvizit["name"]?></p>
                                    <p class="requisite-desc"><?=$recvizit["text"]?></p>
                                    <input type="hidden" name="catalogForm[name]" value="<?=$recvizit["name"]?>" />
                                    <input type="hidden" name="catalogForm[type]" value="Реквизит" />
                                </td>
							<td class="td-3 count"><input type="number" value="1" min="0" class="requisite-number"></td>
							<?if($recvizit["game_active"][0] == 12):?>
								<td class="td-4 price disabled">
									<p default-price="<?=$recvizit["price"][0]?>" class="price">
										<span class="price-value"><?=$recvizit["price"][0]?></span><?=GetMessage("sopduCatRuble")?>
									</p>
								</td>
							<?else:?>
								<td class="td-4 price">
									<p default-price="<?=$recvizit["price"][0]?>" class="price disabled">
										<span class="price-value"><?=$recvizit["price"][0]?></span><?=GetMessage("sopduCatRuble")?>
									</p>
								</td>
							<?endif?>
							<td class="td-5 on-off">
								<div class="button r" id="button-1">
									<?if($recvizit["game_active"][0] == 12):?>
										<input type="checkbox" class="checkbox" checked />
									<?else:?>
										<input type="checkbox" class="checkbox" />
									<?endif;?>
									<div class="knobs"></div>
									<div class="layer"></div>
								</div> <!-- button r -->
							</td>
						<?endif;?>
                        </tr>
					<?endforeach;?>
					<tr class="header-row">
						<td colspan="2" class="td-1 img"><?=GetMessage("sopduCatUsluga")?></td>
						<td class="td-3 count"><?=GetMessage("sopduCatKolvo")?></td>
						<td class="td-4 price"></td>
						<td class="td-5 on-off"></td>
					</tr>
					<?foreach ($arResult["ITEM"] as $recvizit):?>
						<?if($recvizit["element_type"][0] == 14):?>
							<tr>
								<td colspan="2" class="td-2 rent-name">
									<p class="requisite-name"><?=$recvizit["name"]?></p>
									<p class="requisite-desc"><?=$recvizit["text"]?></p>
                                    <input type="hidden" name="catalogForm[name]" value="<?=$recvizit["name"]?>" />
                                    <input type="hidden" name="catalogForm[type]" value="Реквизит" />
								</td>
								<td class="td-3 count"><input type="number" value="1" min="0" class="requisite-number"></td>
								
								<?if($recvizit["game_active"][0] == 12):?>
									<td class="td-4 price disabled">
										<p default-price="<?=$recvizit["price"][0]?>" class="price">
											<span class="price-value"><?=$recvizit["price"][0]?></span><?=GetMessage("sopduCatRuble")?>
										</p>
									</td>
								<?else:?>
									<td class="td-4 price">
										<p default-price="<?=$recvizit["price"][0]?>" class="price disabled">
											<span class="price-value"><?=$recvizit["price"][0]?></span><?=GetMessage("sopduCatRuble")?>
										</p>
									</td>
								<?endif?>
								<td class="td-5 on-off">
									<div class="button r" id="button-1">
										<?if($recvizit["game_active"][0] == 12):?>
											<input type="checkbox" class="checkbox" checked />
										<?else:?>
											<input type="checkbox" class="checkbox" />
										<?endif;?>
										<div class="knobs"></div>
										<div class="layer"></div>
									</div>
								</td>
							</tr>
						<?endif;?>
					<?endforeach;?>
				</tbody>
			</table>
		</div>
		<div class="config-submit-wrap">
			<button class="green-btn config-btn"><?=GetMessage("sopduCatZakazat")?></button>
			<div class="submit-text">
				<p class="submit-price"><span class="submit-price-value">321312</span><?=GetMessage("sopduCatRuble")?></p>
				<p class="price-text"><?=GetMessage("sopduCatOrentir")?></p>
			</div>
		</div>
	</div>
</form>

<?#='<pre>'; print_r($arResult); '</pre>';?>