<!-- Лого калькулятора -->
<div class="center-block text-contact">
	<?php the_field('devise'); ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<img class="logo-calc" src="<?php the_field('header'); ?>" alt="calculation">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="line center-block">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="text-calc">
			Уважаемые Клиенты! С помощью Кирпичного калькулятора
			Вы можете предварительно рассчитать необходимый Вам объем
			керамического кирпича. Введите исходные данные и нажмите
			"Расcчитать".
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<h3 class="mode">Вид кладки:</h3>
		<p class="mode-brick">
			<input type="radio" name="kladka" value="0" checked>
			Кладка в ½ кирпича (толщина 120мм)
		</p>
		<p class="mode-brick">
			<input type="radio" name="kladka" value="1">
			Кладка в 1 кирпич (толщина 250мм)
		</p>
		<p class="mode-brick">
			<input type="radio" name="kladka" value="2">
			Кладка в 1 ½ кирпича (толщина 380мм)
		</p>
		<p class="mode-brick">
			<input type="radio" name="kladka" value="3">
			Кладка в 2 кирпича (толщина 510мм)
		</p>
		<p class="mode-brick">
			<input type="radio" name="kladka" value="4">
			Кладка в 2 ½ кирпича (толщина 640мм
		</p>
	</div>
	<div class="col-md-3">
		<h3 class="mode">Размеры строения:</h3>
		<p class="mode-brick">
			Высота (м):
		</p>
		<input type="text" size="20" name="visota" id="visota" onkeypress="validate(event)">
		<p class="mode-brick">
			Длина (м):
		</p>
		<input type="text" size="20" name="dlina" id="dlina" onkeypress="validate(event)">
		<p class="mode-brick">
			Ширина (м):
		</p>
		<input type="text" size="20" name="shirina" id="shirina" onkeypress="validate(event)">
		<p class="mode-brick">
			Двери и оконные проёмы (м²):
		</p>
		<input type="text" size="20" name="dveri" id="dveri" onkeypress="validate(event)">
	</div>
	<div class="col-md-4">
		<h3 class="mode">Размер кирпича:</h3>
		<p class="mode-brick">
			<input type="radio" value="0" name="kirpich" checked>
			Одинарный (250×120*65)
		</p>
		<p class="mode-brick">
			<input type="radio" value="1" name="kirpich">
			Утолщенный (250×120×88)
		</p>
	</div>

</div>

<div class="row">
	<div class="col-md-12">
		<div class="line center-block">
		</div>
	</div>
</div>

<div class="result">
	<div class="center-block buttons">
		<input type="button" onclick="javascript:void(calculate(0))" value="Рассчитать">
		<input type="button" onclick="javascript:void(calculate(1))" value="Очистить">
	</div>
	<p class="center-text">
		*Расчет производится без учета растворного шва
	</p>
	<div class="row">
		<div class="col-md-12">
			<div class="line center-block">
			</div>
		</div>
	</div>
	<div id="res" class="center-text">

	</div>
</div>