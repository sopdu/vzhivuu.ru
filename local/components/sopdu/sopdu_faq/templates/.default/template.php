<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="faq" id="faq">
	<div class="container">
		<h2>Частые вопросы</h2>
		<div class="question-buttons">
			<?foreach ($arResult as $section):?>
				<button class="green-btn-2 question-btn" data-questions="#<?=$section["SECTION"]["CODE"]?>"><?=$section["SECTION"]["NAME"]?></button>
			<?endforeach;?>
		</div>
		<?foreach ($arResult as $key=>$sec):?>
			<div class="faq-content <?if($key == 1):?>active<?endif;?>" id="<?=$sec["SECTION"]["CODE"]?>">
				<?foreach ($sec["ITEMS"] as $ITEM):?>
					<div class="spoiler">
						<p class="spoiler-question"><?=$ITEM["NAME"]?></p>
						<p class="spoiler-answer"><?=$ITEM["PREVIEW_TEXT"]?></p>
					</div>
				<?endforeach;?>
			</div>
		<?endforeach;?>
	</div>
</div>