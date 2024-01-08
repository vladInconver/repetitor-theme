<?php
/**
 * inconver.com 
 * Шаблон футера
 * http://inconver.com/
 * @package WordPress
 * @subpackage inconver.com
 */
?>
</div>
<!--NEW-->
	<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
		<div class="footer_container">		
			<div class="foot_first col-lg-3">
				<p> © 2017 Учебный центр “Годограф”<br>Новости ЕГЭ и ОГЭ</p>
				<p class="phone_foot">+7 (495) 970-99-66</p>
				<address><a href="mailto:info@godege.ru">info@godege.ru</a></address>
			</div>
			<div class="new-class foot_sec col-lg-4">
				<div>
					<p><a href="//godege.ru?utm_source=blog">Курсы ЕГЭ и ОГЭ в Москве:</a></p>
					<ul>
						<li><span>м.</span> Проспект Мира / Цветной Бульвар</li>
						<li><span>м.</span> Митино</li>
						<li><span>м.</span> Профсоюзная</li>
						<li><span>м.</span> Аннино</li>
						<li><span>м.</span> Крестьянская застава / Пролетарская</li>
						<li><span>м.</span> Солнцево</li>
						<li><span>г.</span> Подольск</li>
					</ul>
				</div>
			</div>
			<div class="foot_thr col-lg-5" >
			<noindex>
				<div>

					<label class="footer_menu_label" for="footer_menu_label">Курсы ЕГЭ в других городах России:</label>
					<input type="checkbox" id="footer_menu_label" class="footer_togle_menu_but" />
					<?php
						$args = array(
							'menu'            => '',
							'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
							'container_class' => 'menu',          // (string) class контейнера (div тега)
							'menu_class'      => 'footer_menu',         // (string) class самого меню (ul тега)
							'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
							'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
							'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
							'theme_location'  => 'top'            // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
						);
						wp_nav_menu($args);
					?>
				</div>
			</noindex>
			</div>
			<div class="foot_fift col-xs-12">
					<?php
						$args = array(
							'menu'            => '',
							'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
							'container_class' => 'menu',          // (string) class контейнера (div тега)
							'menu_class'      => '',         // (string) class самого меню (ul тега)
							'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
							'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
							'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
							'theme_location'  => 'bot'            // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
						);
						wp_nav_menu($args);
					?>
				<ul class="soci">
					<li>
						<a target="_blank" href="https://new.vk.com/godege"><i class="fa fa-vk" aria-hidden="true"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://www.youtube.com/channel/UCNBpaUKdQq2O-s5q40tCpNA"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://www.instagram.com/godograf.ege/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/profile.php?id=100009770833324"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://ok.ru/group/53615113601124"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
					</li>
				</ul>	
			</div>
		</div>	
		<a id="topTop" class="anchor_linck" href="#arrow_top">➤</a>
	</footer>
		<!-- HTML-код модального окна -->
		<div id="myModal" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content" style="background: #e1e1ed url('<?php echo get_template_directory_uri(); ?>/img/incline_bg.png') center">
		      <!-- Заголовок модального окна -->
			  	<h4 class="form_firstP">Подпишитесь на рассылку</h4>
			  	<p class="form_secondP">Мы будет отправлять вам письма, если это действительно важно.</p>
		      <!-- Основное содержимое модального окна -->
		      <div class="modal-body">
		      	<input class="inputHidd" name="tail" type="hidden" value="Заказ обратного звонка">
				<?php get_template_part( 'tpl/form/form' );?>
		      </div>
		      <!-- Футер модального окна -->
		      <div class="modal-footer">
		        <a href="#" class="btn btn-default" data-dismiss="modal">X Закрыть</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- HTML-код модального окна -->
		<div id="privat_policy" class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <!-- Заголовок модального окна -->
		      <div class="modal-header">
		        <h4 class="modal-title">Политика конфиденциальности</h4>
		      </div>
		      <!-- Основное содержимое модального окна -->
		      <div class="modal-body">
				<?php get_template_part( 'tpl/privat' );?>
		      </div>
		      <!-- Футер модального окна -->
		      <div class="modal-footer">
		        <a href="#" class="btn btn-default" data-dismiss="modal">X Закрыть</a>
		      </div>
		    </div>
		  </div>
		</div>
		<div id="ucall_container">
		  	<div title="Нажмите, чтобы заказать звонок" class="pulse-button"> 
		  	
		  		<a href="tel:+74959709966"><div id="ya-phone-new" class="ya-phone dani_phone_father"><i id="ph-ucall-widget" class="hvr-buzz"></i></div></a>
	  		
		  	</div>
		</div>
	
	<?php wp_footer(); // Необходимо для нормальной работы плагинов ?>
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40604530 = new Ya.Metrika({ id:40604530, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="//mc.yandex.ru/watch/40604530" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<!-- google-analytics-->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-48140332-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? '//ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- /google-analytics counter -->
	<!-- godege modal --
	<script type="text/javascript">
		function fun_include_js(a){var b=document.getElementsByTagName("script")[0];return js=document.createElement("script"),js.type="text/javascript",js.async=!0,js.src=a,b.parentNode.insertBefore(js,b),!1}var date=+new Date;fun_include_js("//godege.ru/i/repetitor/target.js?v="+date);
	</script>
	<!-- /godege modal -->
</body>
</html>