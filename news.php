<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Страница с новостями
 */
get_header(); // подключаем header.php ?>
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
				</div>
				<div class="col s9">
					<div class="section-title">Последние новости</div>
					<div class="news">
						<?php query_posts(array('paged'=>get_query_var('paged'), 'posts_per_page'=>'12' ) ); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
						<?php get_template_part('news-loop'); // для отображения каждой записи берем шаблон loop.php ?>
						<?php endwhile; // конец цикла
						else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
					</div>
				</div>
			</div>
		</div>
	</section>
	
	</div>
<?php get_footer(); // подключаем footer.php ?>