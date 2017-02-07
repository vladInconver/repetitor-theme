<?php
/**
 * Repetitor theme
 * Template Name: Repetitor theme | Шаблон вывода страницы Репетиторы
 * //repetitor.msk.ru
 * @package WordPress
 * @subpackage repetitor
 */

get_header(); // Подключаем хедер ?>

<main class="page_tamplate page_repetitoru_tamplate">
   <div class="containe_row-nav" >
        <div class="containe-nav containe">
            <div class="row wraper_first">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <h1><?php echo get_post_meta($post->ID, 'first_tezis_repy', true); ?></h1>
                    <div class="wrapper_p">
                        <p class="main_tez"><?php echo get_post_meta($post->ID, 'second_tezis_repy', true); ?></p>
                        <div class="wrapperA">
                            <p class="p_for_a"><?php echo get_post_meta($post->ID, 'third_tezis_repy', true); ?></p>
                            <a class="ancor_linc but but_ch_title" data-toggle="modal" href="#myModal"><?php echo get_post_meta($post->ID, 'ancor_button_repy', true); ?></a> 

                        </div>
                    </div>
                </div>
                <div class="right_bg"><img src="<?php echo get_field('background_img_repy');?>" alt="<?php echo get_post_meta($post->ID, 'ancor_button_repy', true); ?>"></div>
            </div>
        </div>
    </div>
    <div class="block_for_border_bottom_full_width">
        <div class="containe-nav containe">
            <?php
                if (get_post_meta($post->ID, 'random', true)) { ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="repet_rand_cont">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
            <?php } else{?>
                <h2 class="head_text_repy">
                    <?php echo get_post_meta($post->ID, 'head_text_repy', true); ?>
                </h2>
                <h2 class="content_text_repy">
                    <?php echo get_post_meta($post->ID, 'content_text_repy', true); ?>
                </h2>
            <?php }?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                    if (function_exists('inconver_breadcrumbs'))inconver_breadcrumbs(); 
            ?>
        </div>
    </div>
    <div class="inwrap_page_repetitoru_tamplate">
        <div class="container">
            <div class="row">    
                <?php get_template_part( 'tpl/left_sidebar' );?>        
                <div class="wrapper_blog_items col-lg-8 col-md-9 col-sm-9 col-xs-12">
                    <div class="row item_blog_h">
                    	<div class="line_blog_items">
                            <div class="bootstrap_select col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="btn-group bootstrap-select select_item show-menu-arrow">
									<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Выберите предмет">
										<span class="filter-option pull-left">Выберите предмет</span>
											<span class="bs-caret">
											<span class="caret"></span>
										</span>
									</button>
									<?php
										$args = array(
											'menu'            => '',
											'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
											'container_class' => '',          // (string) class контейнера (div тега)
											'menu_class'      => 'dropdown-menu',         // (string) class самого меню (ul тега)
											'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
											'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
											'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
											'theme_location'  => 'rep'            // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
										);
										wp_nav_menu($args);
									?>
								</div>
                            </div>
                            <div class="wrapper_btn_sign col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <button class="btn_sign but_ch_title" type="button" title="Хочу заниматься с лучшим репетитором в удобное время" data-toggle="modal" data-target="#myModal">Хочу заниматься с лучшим репетитором в удобное время</button>
                            </div>
                            <div class="clear"></div>
                    	</div>
                    </div>
                    <?php 
                        get_template_part( 'tpl/repetitor_block' );
                    ?>               
                </div>
            </div>
        </div>
        
        <div class="clear"></div>
	</div>
</main> 
<link rel="stylesheet" type="text/css" href="/wp-content/themes/inconver/js/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/inconver/css/repetitoru.css?v=111">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/inconver/css/repetitoru_adapt.css">

<?php get_footer(); // Подключаем футер ?>