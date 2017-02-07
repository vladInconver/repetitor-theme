<aside id="left_sidebar" class="nav_sidebar col-lg-4 col-md-3 col-sm-3 col-xs-12">
	<?php/*
		$args = array(
			'menu'            => '',
			'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
			'container_class' => 'menu',          // (string) class контейнера (div тега)
			'menu_class'      => 'menu',         // (string) class самого меню (ul тега)
			'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
			'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
			'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
			'theme_location'  => 'rep'            // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
		);
		wp_nav_menu($args);*/
	?>
	<ul class="menu">
		<li class="menu-item-link menu-item menu-item-type-custom menu-item-object-custom menu-item-573">
			<a rel="nofollow" href="#">Репетиторы ЕГЭ и ОГЭ</a>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-572">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по русскому языку<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_rus'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-571">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по математике<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_mat'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-570">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по обществознанию<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_obch'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-569">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по физике<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_fiz'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-568">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по биологии<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_biol'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-567">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по английскому языку<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_angl'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-566">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по литературе<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_lit'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-565">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по истории<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_hist'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-564">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по информатике<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_inform'            
				);
				wp_nav_menu($args);
			?>
		</li>
		<li class="menu-item-link menu-item menu-item-type-post_type menu-item-object-page menu-item-563">
			<a href="#" data-toggle="dropdown" aria-expanded="true">Репетиторы по химии<b class="caret"></b></a>
			<?php
				$args = array(
					'menu'            => '',
					'container'       => 'ul',           
					'container_class' => 'menu',          
					'menu_class'      => 'dropdown-menu',         
					'echo'            => true,            
					'fallback_cb'     => 'wp_page_menu',  
					'depth'           => 0,               
					'theme_location'  => 'rep_chem'            
				);
				wp_nav_menu($args);
			?>
		</li>
	</ul>
	<?php?>
</aside> 