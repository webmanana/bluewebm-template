<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">  
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41684319 = new Ya.Metrika({
                    id:41684319,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41684319" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header>
        <section id="infobar">
        	<div class="container">
				<div class="row clear padding-top">
					<a href="http://amga-crb.ru" class="logo">
						<div class="brand-logo" href="/"></div>
						<div class="sitename">
							Государственное бюджетное учреждение Республики Саха (Якутия)
							<br>
							<span>Амгинская центральная районная больница</span>
						</div>
					</a>
					<div class="header-phone">
						Горячая линия:
						<br>
						<span>
						<i class="fa fa-phone red-text" aria-hidden="true"></i>
						8 (924) 360-10-03
						</span>
						<br>
						<span>
						<i class="fa fa-phone red-text" aria-hidden="true"></i>
						8 (800) 250-47-14
						</span>
					</div>
					<a class="el-zap" target="_blank" href="http://er14.ru"> Электронная регистратура </a>
				</div>
			</div>
		</section>
		<nav id="top-nav" role="navigation">
			<div class="nav-wrapper container" id="topnav">
			
				<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
					'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
					'container'=> false, // обертка списка, тут не нужна
			  		'menu_id' => 'nav-mobile', // id для ul
			  		'items_wrap' => '<ul id="%1$s" class="left hide-on-med-and-down %2$s">%3$s</ul>',
					'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
			  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
		  			);
					wp_nav_menu($args); // выводим верхнее меню
				?>
		    </div>
	  	</nav>	
	</header>