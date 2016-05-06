
<div class="contacts-info-form">
	<div class="row">
		<div class="col-md-12">
			<p class="contacts-logo"><?php the_title()?></p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<p class="contact-text">
					<img src="<?php bloginfo('template_directory') ?>/public/img/pin.png" alt="pin">
					<?php the_field('address',4) ?>
				</p>
				<p class="contact-text">
					<img src="<?php bloginfo('template_directory') ?>/public/img/phone.png" alt="pin">
					<a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a><br>
					<a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a><br>
					<a href="tel:<?php the_field('phone3',4); ?>"><?php the_field('phone3',4); ?></a>
				</p>
				<p class="contact-text">
					<img src="<?php bloginfo('template_directory') ?>/public/img/envelope.png" alt="pin">
					<a href="mailto:<?php the_field('email',4); ?>"><?php the_field('email',4); ?></a>
				</p>
				<p class="contact-text">
					<img src="<?php bloginfo('template_directory') ?>/public/img/clock.png" alt="pin">
					График работы:<br>
					<?php the_field('grafic',4) ?>
				</p>
			</div>
			<div class=" map-sc col-md-9">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=wntz9HYtUA2gE8y_2ushGlBwtcdxi_Ph&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
			</div>
		</div>
	</div>
</div>