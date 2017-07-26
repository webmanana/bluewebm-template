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
	<div class="wrapper">
	<section id="service-info">
		<div class="container">
			<div class="row">
				<div class="col s3">
					<div class="sidebar-item-title">Структурные подразделения</div>
					<ul class="left left-sidebar hide-on-med-and-down">
				      <li><a class="dropdown-button" data-hover="true" data-stoppropagation="true" href="#!" data-activates="dropdown1">Поликлиника<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown2">Врачебные амбулатории<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown3">Диагностические и вспомогательные подраздереления<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown4">Противотуберкулезный диспансер<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown5">Соморсунский детский туберкулезный санаторий<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown6">Стационар<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown7">Туберкулезная больница<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown8">Участковые больницы<i class="material-icons right">chevron_right</i></a></li>
				      <li><a class="dropdown-button" data-hover="true" href="#!" data-activates="dropdown9">Фельдшерско-акушерские пункты<i class="material-icons right">chevron_right</i></a></li>
				      <ul id='dropdown1' class='dropdown-content'>
				        <li><a href="/poliklinika/rentgen-kabinet/">Рентген кабинет</a></li>
				        <li><a href="/poliklinika/stomatolog/">Стоматолог</a></li>
				        <li><a href="/poliklinika/endokrinolog/">Эндокринолог</a></li>
				        <li><a href="/poliklinika/kardiolog/">Кардиолог</a></li>
				        <li><a href="/poliklinika/infektsionist/">Инфекционист</a></li>
				        <li><a href="/poliklinika/otolaringolog/">Отоларинголог</a></li>
				        <li><a href="/poliklinika/oftalmolog/">Офтальмолог</a></li>
				        <li><a href="/poliklinika/dermatovenerolog/">Дерматовенеролог</a></li>
				        <li><a href="/poliklinika/nevrolog/">Невролог</a></li>
				        <li><a href="/poliklinika/hirurg/">Хирург</a></li>
				        <li><a href="/poliklinika/akushersko-ginekologicheskie-uchastki/">Акушерско-гинекологические участки</a></li>
				        <li><a href="/poliklinika/pediatricheskie-uchastki/">Педиатрические участки</a></li>
				        <li><a href="/poliklinika/terapevticheskie-uchastki/">Терапевтические участки</a></li>
				        <li><a href="/poliklinika/profpatolog/">Профпатолог</a></li>
				        <li><a href="/poliklinika/kabinet-vrachebnoj-komissii/">Кабинет врачебной комиссии</a></li>
				      </ul>
				      <ul id='dropdown2' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/vrachebnye-ambulatorii/sulgachinskaya-va/">Сулгачинская ВА</a></li>
				        <li><a href="http://www.amga-crb.ru/vrachebnye-ambulatorii/chapchylganskaya-va/">Чапчылганская ВА</a></li>
				        <li><a href="http://www.amga-crb.ru/vrachebnye-ambulatorii/chakyrskaya-va/">Чакырская ВА</a></li>
				      </ul>
				      <ul id='dropdown3' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/tsentralizovannaya-sterilizatsionnaya/">Централизованная 
 стерилизационная</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/fizioterapevticheskij-kabinet/">Физиотерапевтический кабинет</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/otdelenie-perelivaniya-krovi/">Отделение переливания крови</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/kabinet-fgds/">Кабинет фгдс</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/kabinet-uzd/">Кабинет узд</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/kabinet-ekg/">Кабинет экг</a></li>
				        <li><a href="http://www.amga-crb.ru/diagnosticheskie-i-vspomogatelnye-p/rentgen-kabinet/">Рентген кабинет</a></li>
				      </ul>
				      <ul id='dropdown4' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/protivotubergkuleznyj-dispanser/rentgen-kabinet/">Рентген кабинет</a></li>
				        <li><a href="http://www.amga-crb.ru/protivotubergkuleznyj-dispanser/baklaboratoriya/">Баклаборатория</a></li>
				      </ul>
				      <ul id='dropdown5' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/uchastkovye-bolnitsy/somorsunskaya-ub/">Соморсунский детский туберкулезный</a></li>
				      </ul>
				      <ul id='dropdown6' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/statsionar/otdelenie-skoroj-pomoshhi/">Отделение скорой помощи</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/infektsionnoe-otdelenie/">Инфекционноеотделение</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/ginekologicheskoe-otdelenie/">Гинекологическое отделение</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/akusherskoe-otdelenie/">Акушерское отделение</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/prit/">Прит</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/hirurgicheskoe-otdelenie/">Хирургическое отделение</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/nevrologicheskoe-otdelenie/">Неврологическое отделение</a></li>
				        <li><a href="http://www.amga-crb.ru/statsionar/terapevticheskoe-otdelenie/">Терапевтическое отделение</a></li>
				      </ul>
				      <ul id='dropdown7' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/tuberkuleznaya-bolnitsa/">Туберкулезная больница</a></li>
				      </ul>
				      <ul id='dropdown8' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/uchastkovye-bolnitsy/emisskaya-ub/">Эмисская УБ</a></li>
				        <li><a href="http://www.amga-crb.ru/uchastkovye-bolnitsy/somorsunskaya-ub/">Соморсунская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/majskaya-ub/">Майская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/bolugurskaya-ub/">Болугурская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/betyunskaya-ub/">Бетюнская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/amgino-naharinskaya-ub/">Амгино-нахаринская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/altanskaya-ub/">Алтанская УБ</a></li>
				        <li><a href="/uchastkovye-bolnitsy/abaginskaya-ub/">Абагинская УБ</a></li>
				      </ul>
				      <ul id='dropdown9' class='dropdown-content'>
				        <li><a href="http://www.amga-crb.ru/feldshersko-akusherskie-punkty/serge-besskij-fap/">Сэргэ-бэсский фап</a></li>
				        <li><a href="http://www.amga-crb.ru/feldshersko-akusherskie-punkty/satagajskij-fap/">Сатагайский фап</a></li>
				        <li><a href="http://www.amga-crb.ru/feldshersko-akusherskie-punkty/myandiginskij-fap/">Мяндигинский ФАП</a></li>
				      </ul>
				    </ul>
				
				    <div class="card img-sidebar">
						<div class="card-image">
							<a href="https://www.rosminzdrav.ru/polls/9-anketa-dlya-otsenki-kachestva-okazaniya-uslug-meditsinskimi-organizatsiyami-v-ambulatornyh-usloviyah?region_code=SA" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/images/banner1.png">
							</a>
						</div>
					</div>
					<div class="card img-sidebar">
						<a href="https://minzdrav.sakha.gov.ru/nokoumo" target="_blank">
							<div style="background-color:#dd193c;color: #fff">Независимая оценка качества оказания услуг медицинскими организациями</div>
						</a>
					</div>
					<div class="card img-sidebar">
						<a href="#!">
							<div style="color: #000">
							<b style="color: #000;font-weight: 700;">Контакты</b><br>
								<b>Адрес:</b><br>678600, Республика Саха (Якутия)
								Амгинский улус,
								с. Амга, ул. Партизанская 2,<br>
								<b>Телефон/факс:</b> <br>+7 (41142) 41167<br>
								<b>Электронная почта:</b> <br>medamga@rambler.ru
							</div>
							</a>
					</div>
				</div>
				<div class="col s9">
					<div class="section-title">Последние новости</div>
						<div class="main-news">
							<?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'3' ) ); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
							<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
							<?php endwhile; // конец цикла
							else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
						</div>
					<div class="section-title" style="margin-top: 15px;">Руководство</div>
					<div class="main-leaders">
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/glavnyj-vrach/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Александрова Софья Лаврентьевна</div>
									<div class="leader-specialty">Главный врач</div>
								</div>
							</div>
						</div>
						</a>
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/zamestitel-glavnogo-vracha-po-ambula/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Архипов Михаил Архипович</div>
									<div class="leader-specialty">Заместитель главного врача по амбулаторно-поликлинической помощи</div>
								</div>
							</div>
						</div>
						</a>
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/zamestitel-glavnogo-vracha-po-statsio/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Татаринова Татьяна Ивановна</div>
									<div class="leader-specialty">Заместитель главного врача по лечебной работе </div>
								</div>
							</div>
						</div>
						</a>
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/zamestitel-glavnogo-vracha-po-ev/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Бурнашева Василиса Васильевна</div>
									<div class="leader-specialty">Заместитель главного врача по ЭВ</div>
								</div>
							</div>
						</div>
						</a>
                                        <div class="main-leaders">
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/zamestitelya-glavnogo-vracha-po-organi/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Кириллина Елена Николаевна</div>
									<div class="leader-specialty">Заместителя главного врача по организационно-методической работе</div>
								</div>
							</div>
						</div>
						</a>
						<a class="leader" href="http://www.amga-crb.ru/administratsiya/glavnyj-buhgalterpreview_id414preview_nonce90055fdce7_thumbnail_id-1previewtrue/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Карманова Марина Дмитриевна</div>
									<div class="leader-specialty">Главный-Бухгалтер</div>
								</div>
							</div>
						</div>
						</a>
						<a class="leader" href="/glavnaya-medsestra/">
						<div class="col s3">
							<div class="card">
								<div class="card-image">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no_avatar.jpg">
								</div>
								<div class="card-content">
									<div class="leader-title">Чупрова Матрена Дмитриевна</div>
									<div class="leader-specialty">Главная медсестра</div>
								</div>
							</div>
						</div>
						</a>
					</div> 
					</div> 
				</div>
			</div>
		</div>
	</section>
	
	</div>
<?php get_footer(); // подключаем footer.php ?>