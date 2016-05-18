<footer class="container-fluid footer-page">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<a href="/"><img class="logo-footer" src="<?php the_field('footer-logo',4)?>" alt="logo-footer"></a>
				<p class="too">
					<?php the_field('company',4);?>
				</p>
				<div class="figure"></div>
				<p class="plus">
					<?php the_field('device',4);?>
				</p>
			</div>
			<div class="col-md-3 col-md-offset-4">
				<p class="contacts-info">

				</p>
				<p class="contacts-info">
					<a href="tel:<?php the_field('phone1',4); ?>"><?php the_field('phone1',4); ?></a> <br>
					<a href="tel:<?php the_field('phone2',4); ?>"><?php the_field('phone2',4); ?></a> <br>
					<a href="tel:<?php the_field('phone3',4); ?>"><?php the_field('phone3',4); ?></a>
				</p>
				<p class="contacts-info">
					<a href="mailto:<?php the_field('email',4); ?>"><?php the_field('email',4); ?></a>
				</p>
			</div>
		</div>
		<div class="text-center">
			<p class="copyright">© 2016 Farex Group (Казахстан)
				Разработано компанией <a href="https://b-link.kz"><br>«B-link.kz»</a></p>
		</div>
	</div>
</footer>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory') ?>/public/css/js/bootstrap.min.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('form.form.blink-mailer').hide(500); $('div.form .form-control-custom.response-mailer').html(success);  $('div.form').show(800)}, function(error) {});
</script>
<?php the_field('google',4)?>
<?php the_field('yandex',4)?>
</body>
</html>