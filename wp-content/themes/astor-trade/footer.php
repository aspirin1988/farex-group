<!-- Футер -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 map">
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=kF7YbUMeNb7RlfYJauR2PCjSSINhWzy3&width=320&height=320&lang=ru_RU&sourceType=constructor"></script>
			</div>
			<div class="col-md-4">
				<div class="contact">
					Наши контакты:
				</div>
				<div class="contact-info">
					<?php the_field('address') ?>
					<br>
					<a href="tel:<?php the_field('phone1',8) ?>"><?php the_field('phone1',8) ?></a>
					<br>
					<a href="tel:<?php the_field('phone2',8) ?>"><?php the_field('phone2',8) ?></a>
					<br>
					<a href="tel:<?php the_field('phone3',8) ?>"><?php the_field('phone3',8) ?></a>
					<br>
					<a href="tel:<?php the_field('phone4',8) ?>"><?php the_field('phone4',8) ?></a>
					<br>
					<br>
					<a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
				</div>
			</div>
			<div class="col-md-4 author-block">
				<div class="author">
					ТОО «Астор Трейд» Кирпичный завод
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<p class="copyright">© 2016 Автоэлит (Казахстан)
			Разработано компанией <a href="https://b-link.kz"><br>«B-link.kz»</a></p>
	</div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/carousel/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
		$(".owl-carousel").owlCarousel({
			autoWidth: true,
			items:3,
			margin: 30,
			loop:true,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:true,
					dots:true
				},
				600:{
					items:3,
					nav:false
				},
				1000:{
					items:3,
					loop:false
				}
			}
		});
	});
	var owl = $('.owl-carousel');
	owl.owlCarousel();
	$('#next').click(function() {
		owl.trigger('next.owl.carousel');
	});
	// Go to the previous item
	$('#prev').click(function() {
		// With optional speed parameter
		// Parameters has to be in square bracket '[]'
		owl.trigger('prev.owl.carousel', [300]);
	})
</script>
<script>

	function validate(event) {
		var theEvent = event || window.event;
		var key = theEvent.keyCode || theEvent.which;
		if ((key == 8) | (key == 37) | (key == 39)) return true;
		key = String.fromCharCode(key);

		var regular = /[0-9]|\./;
		if (!regular.test(key)) {
			theEvent.returnValue = false;
			theEvent.preventDefault();
		}
	}

	function calculate(cl) {
		var results = '';
		var error = 0;
		var error_str = '';
		var visota = $("#visota").val();
		if (isNaN(visota)) {
			error_str += "Нужно указать высоту\n";
			error++
		}
		var dlina = $("#dlina").val();
		if (isNaN(dlina)) {
			error_str += "Нужно указать длину\n";
			error++
		}
		var shirina = $("#shirina").val();
		if (isNaN(shirina)) {
			error_str += "Нужно указать ширину \n";
			error++
		}
		var dveri = $("#dveri").val();
		if (isNaN(dveri)) {
			error_str += "Нужно указать площадь дверей и остекления\n";
			error++
		}


		var kladka = $('input[name=kladka]:checked').val();
		var kirpich = $('input[name=kirpich]:checked').val();


		if (cl) {
			$("#res").html("");
			$("#visota").val = "";
			$("#dlina").val = "";
			$("#shirina").value = "";
			$("#dveri").value = "";
			visota = 0;
			dlina = 0;
			shirina = 0;
			dveri = 0;
			error = 0;
			return;
		}

		if (!error) {
			var koef = [
				[61,128,189, 256, 317],
				[45,95, 140,190, 235]
			];
			var vid = ["Кладка в ½ кирпича (толщина 120мм)","Кладка в 1 кирпич (толщина 250мм)",
				"Кладка в 1 ½ кирпича (толщина 380мм)","Кладка в 2 кирпича (толщина 510мм)","Кладка в 2 ½ кирпича (толщина 640мм)" ];
			var kirpType = ["Одинарный (250×120*65)","Утолщенный (250×120×88)" ];
			results = '';
			results += ' Вид кладки: ' + vid[kladka] + '' + '<br>';
			results += 'Размер строения: ' + visota + " * " + shirina + " * " + dlina + 'м' + '<br>';
			results += 'Размер кирпича:' + kirpType[kirpich] + ' шт. ' + '<br>';
			var G = (2 * visota * (dlina + shirina) - dveri) * koef[kirpich][kladka];
			results += 'Итого:' + G.toFixed(0) + ' шт. кирпича ';
			$("#res").html(results);
		} else {
			alert(error_str);
		}
	}

	function getRadioGroupValue(radioGroupObj)
	{
		for (var i = 0; i < radioGroupObj.length; i++)
			if (radioGroupObj[i].checked) return radioGroupObj[i].value;

		return null;
	}

</script>
</body>
</html>