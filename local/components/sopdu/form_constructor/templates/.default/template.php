<?php
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>



		<form action="" class="order-form" method="post">
			<div class="white-block">
				<h2>Для любой компании и вечеринки</h2>
				<div class="row text-center">
					<div class="col-xl-3 col-sm-6 col-12 d-flex flex-column justify-content-end p-2">
						<p class="range-header">Возраст</p>
						<div class="range-img age-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/every-party/age/1.jpg');"></div>
						<p class="range-val age-val">Дети</p>
						<input type="text" class="range age-range" name="age" data-min="1" data-max="4" data-grid="true" />
					</div> <!-- col -->
					
					<div class="col-xl-3 col-sm-6 col-12 d-flex flex-column justify-content-end p-2">
						<p class="range-header">Помещение</p>
						<div class="range-img flat-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/every-party/flat/1.jpg');"></div>
						<p class="range-val flat-val">Квартира</p>
						<input type="text" class="range flat-range" name="flat" data-min="1" data-max="4" data-grid="true" />
					</div> <!-- col -->
					
					<div class="col-xl-3 col-sm-6 col-12 d-flex flex-column justify-content-end p-2">
						<p class="range-header">Уровень участников</p>
						<div class="range-img level-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/every-party/level/1.jpg');"></div>
						<p class="range-val level-val">Не знакомы с игрой</p>
						<input type="text" class="range level-range" name="level" data-min="1" data-max="4" data-grid="true" />
					</div> <!-- col -->
					
					<div class="col-xl-3 col-sm-6 col-12 d-flex flex-column justify-content-end p-2">
						<p class="range-header">Количество участников</p>
						<div class="range-img players-img" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/every-party/players/1.jpg');"></div>
						<p class="range-val players-val">< 10 чел</p>
						<input type="text" class="range players-range" name="players" data-min="1" data-max="4" data-grid="true" />
					</div> <!-- col -->
				</div> <!-- row -->
			</div> <!-- white-block -->
			
			<div class="modal fade order-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<input type="text" name="name" class="modal-input" placeholder="Ваше имя">
						<input type="tel" name="phone" class="modal-input" placeholder="Ваш телефон">
						<button class="green-btn modal-btn">Заказать</button>
					</div> <!-- modal-content -->
				</div> <!-- modal-dialog -->
			</div> <!-- order-modal -->
			
			
			<div class="grey-block">
				<p class="order-text">Каждому игроку будет комфортно и интересно!</p>
				<button type="button" data-toggle="modal" data-target=".order-modal" class="green-btn order-btn">Заказать</button>
			</div> <!-- grey-block -->
		</form>
		
		
		<div class="organize">
			<div class="row">
				<div class="col-lg-5 col-12">
					<h2 class="white">Всё мероприятие мы организуем под ключ</h2>
					<div class="box"></div>
				</div> <!-- col -->
				<div class="col-lg-7 col-12">
					<ul class="organize-list">
						<li class="organize-list-item">
							<p class="list-header">Аренда реквизита</p>
							<p class="list-text">(включая доставку / вывоз)</p>
						</li>
						
						<li class="organize-list-item">
							<p class="list-header">Организация игры:</p>
							<ul class="list-second">
								<li class="list-text">- Подготовка игры (подготовка сценария, поиск вопросов, мподготовка ПО и т.д.)</li>
								<li class="list-text">- Проведение игры (ведущие и тех. поддержка)</li>
							</ul>
						</li>
						
						<li class="organize-list-item">
							<p class="list-header">Организация всего мероприятия «под ключ»:</p>
							<ul class="list-second">
								<li class="list-text">- Разработка сценария всего мероприятия</li>
								<li class="list-text">- Поиск площадки</li>
								<li class="list-text">- Кейтеринг</li>
								<li class="list-text">- Фото и видео съемка</li>
								<li class="list-text">- Подготовка звукового, светового и видеооборудования</li>
								<li class="list-text">- Дополнительные развлечения (музыканты, актеры и т.д.)</li>
								<li class="list-text">… и многое другое!</li>
							</ul>
						</li>
					</ul>
				</div>
			</div> <!-- row -->
		</div> <!-- organize -->

