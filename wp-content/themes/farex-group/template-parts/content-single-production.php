
<div class="about">
	<div class="container-fluid row-about row-production">
		<div class="row about-figure">
			<div class="col-md-4 figure"></div>
			<div class="col-md-4 text-figure"><?php the_title() ?></div>
			<div class="col-md-4 figure"></div>
		</div>
	</div>

	<div class="container">
		<div class="row row-product-text">
			<div class="col-md-4">
				<img class="img-production" src="<?php the_post_thumbnail_url() ?>" alt="">
			</div>
			<div class="col-md-8 description-product">
				<p>
					Описание
				</p>
				<?php echo get_the_content()?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 character">
				ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ
			</div>
		</div>

		<table class="table table-bordered">
			<tbody>
			<tr>
				<td>
					Формат, длина х ширина, мм (фут)
				</td>
				<td>
					<?php the_field('size') ?>
				</td>
			</tr>
			<tr>
				<td>
					Толщина, мм
				</td>
				<td>
					<?php the_field('height') ?>
				</td>
			</tr>
			<tr>
				<td>
					Тип поверхности
				</td>
				<td>
					<?php the_field('Surface') ?>
				</td>
			</tr>
			<tr>
				<td>
					Класс эмиссии формальдегида
				</td>
				<td>
					<?php the_field('class') ?>
				</td>
			</tr>
			<tr>
				<td>
					Влагостойкость
				</td>
				<td>
					<?php the_field('gloss') ?>
				</td>
			</tr>
			<tr>
				<td>
					Плотность, кг/м3
				</td>
				<td>
					<?php the_field('density') ?>
				</td>
			</tr>
			<tr>
				<td>
					Влажность, %
				</td>
				<td>
					<?php the_field('humidity') ?>
				</td>
			</tr>
			<tr>
				<td>
					Обработка торцов
				</td>
				<td>
					<?php the_field('treatment') ?>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>