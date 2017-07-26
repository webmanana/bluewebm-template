<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */ 
?>
<a style="background:url(<?php the_post_thumbnail_url($width, $height, $crop); ?>);" class="main-news-item" href="<?php the_permalink(); ?>">
	<div class="news-content">
		<div class="news-title"><?php echo ShortenText(get_the_title()); ?></div>
		<div class="news-date"><?php the_time('j F, Y'); ?></div>
		<div class="news-excerpt"><?php the_excerpt(); ?></div>
	</div>
</a>