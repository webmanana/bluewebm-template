<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<div class="wrapper">
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1><?php single_cat_title(); // название категории ?></h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
						<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
					<?php endwhile; // конец цикла
					else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
					<?php pagination(); // пагинация, функция нах-ся в function.php ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); // подключаем footer.php ?>