<!-- Контакты и карта -->
<div>
	<div class="center-block text-contact">
		<?php the_title(); ?>
	</div>
	<div class="map-contact">
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=_4zkB6obMIyIAoApnKH9fgjUmfwZrpgJ&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
	</div>
</div>

<!-- Контактные данные -->
<div class="container contact-data">
	<div class="row">
		<div class="col-md-4">
			<img class="center-block" src="<?php bloginfo('template_directory') ?>/public/img/map-icon.png" alt="icon-map">
			<p class="contact-data-text">
				<?php the_field('address',14)?>
			</p>
		</div>
		<div class="col-md-4">
			<img class="center-block" src="<?php bloginfo('template_directory') ?>/public/img/telephone-icon.png" alt="icon-map">
			<p class="contact-data-text">
				<?php the_field('phone1',5)?> <br>
				<a href="tel:<?php the_field('phone1',8) ?>"><?php the_field('phone1',8) ?></a>
				<br>
				<a href="tel:<?php the_field('phone2',8) ?>"><?php the_field('phone2',8) ?></a>
				<br>
				<a href="tel:<?php the_field('phone3',8) ?>"><?php the_field('phone3',8) ?></a>
				<br>
				<a href="tel:<?php the_field('phone4',8) ?>"><?php the_field('phone4',8) ?></a>

			</p>
		</div>
		<div class="col-md-4">
			<img class="center-block" src="<?php bloginfo('template_directory') ?>/public/img/mail-icon.png" alt="icon-map">
			<p class="contact-data-text">
				<a href="mailto:<?php the_field('email',8) ?>"><?php the_field('email',8) ?></a> <br>
				Контактное лицо:
				Женис Тойбаев
			</p>
		</div>
	</div>
</div>