<?php
    if (get_post_meta($post->ID, 'random', true)) {
        $args = array(
                    'posts_per_page' => 1000,
                    'post_type' => 'tich_page',
                    'orderby' => 'rand'
        );
    } else{
        $args = array(
                    'posts_per_page' => 1000,
                    'post_type' => 'tich_page',
                    'orderby' => 'meta_value_num',
                    'meta_query' => array( 
                                        array('key' => 'order_tich',
                                            'compare' => '=', 
                                            'type' => 'NUMERIC'
                                        )
                                    )
        );
    } 
    $query = new WP_Query( $args );
    $m = 0;
    $myi = 1;
 	if (have_posts()) { 
        while ( $query->have_posts() ) {
	        $query->the_post();
	        if (get_post_meta($post->ID, 'biol_tich', 1)) {
?>
<!-- First row -->
	<div class="row blog_item_row">
        <article class="blog_item">                            
            <div class="top_blog_item">
                <div class="left_blog_item col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<?php 
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url = wp_get_attachment_image_src($thumb_id,'pic_tich_smol', true);
                        $pic_full_img = wp_get_attachment_image_src($thumb_id,'pic_full_img', true);
                    ?>
                    <div class="blog_cut_item_img" data-toggle="modal" data-target="#modal-img-<?php echo $myi; ?>" data-incvalueimg="<?php echo $thumb_url[0]; ?>">
                    </div>
                    
                    <div class="wrapper_register_btn">
                        <button class="register_btn" data-toggle="modal" data-target="#modal-checkin-<?php echo $myi; ?>">Записаться к преподавателю</button>
                    </div>
                </div>
                
                <div class="right_blog_item col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="blog_item_head">
                        <span class="blog_item_title"><?php echo the_title();?></span>
                        
                        <span class="blog_item_rating">
                            <div class="main__stars">
                                <span class="wrapper_stars">
                                    <?php 
                                        $rat_tich = get_post_meta($post->ID, 'rat_tich', true);
                                        $result1 = $rat_tich / 10;
                                        $result = (100/5)*$result1;
                                    ?>
                                    <div class="stars_color" style="width: <?php echo $result; ?>%;"></div>
                                    <img class="rating_img" src="<?php echo get_template_directory_uri(); ?>/img/rating.png" alt="Рейтинг Филатова Елена" />
                                </span>                               
                                <span class="amount_item_rating">
                                    <?php
                                        if (is_int($result1)) {
                                            echo $result1.'.0';
                                        } else{                                                        
                                            echo $result1;
                                        }
                                    ?>
                                </span>
                            </div>
                        </span>
                    </div>
                    
                    <div class="blog_item_subhead"><?php echo get_post_meta($post->ID, 'tutoring', true); ?></div>
                    
                    <div class="wrapper_blog_item_info">
                        <div class="row">
                            <div class="row_blog_info">
                                <?php 
                                    $exper = get_post_meta($post->ID, 'exper', true); 
                                    if (!empty($exper)) {?>
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Стаж:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php echo $exper; ?>
                                </div>                                                            
                                <?php }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row_blog_info">
                                <?php 
                                    $education = get_post_meta($post->ID, 'education', true); 
                                    if (!empty($education)) {?>
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Образование:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php echo $education;?>
                                </div>                                                         
                                <?php }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row_blog_info">
                                <?php 
                                    $quant = get_post_meta($post->ID, 'quant', true); 
                                    if (!empty($quant)) {?>
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Кол-во обученых часов:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php echo $quant; ?>
                                </div>                                                    
                                <?php }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row_blog_info">
                                <?php 
                                    $pric_stud = get_post_meta($post->ID, 'pric_stud', true); 
                                    if (!empty($pric_stud)) {?>
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Стоимость обучения:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php echo $pric_stud; ?>
                                </div>                                               
                                <?php }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row_blog_info">
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Стоимость обучения индивидуально:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php
                                        if (!empty($pric_groop)) { ?> 
                                        <?php    echo $pric_groop;
                                        } else { ?> 
                                            <strong>833 рубля/40 минут</strong>. Длительность занятия 120 минут
                                    <?php } ?> 
                                </div>          
                                <div class="clear"></div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="row_blog_info">
                                <?php 
                                    $mod_stud = get_post_meta($post->ID, 'mod_stud', true); 
                                    if (!empty($mod_stud)) {?>
                                <div class="item_blog_info_title col-lg-5 col-md-6 col-sm-6 col-xs-6">
                                    Форма обучения:
                                </div>
                                
                                <div class="item_blog_info_value col-lg-7 col-md-6 col-sm-6 col-xs-6">
                                    <?php echo $mod_stud; ?>
                                </div>                                          
                                <?php }
                                ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
            
            <div class="bottom_blog_item">
                <div class="wrapper_row">
                    <div class="item_blog_video">
                        <?php 
                        $video_tich_ti = get_post_meta($post->ID, 'video_tich', 1);
                            if (!empty($video_tich_ti)) {?>
                                <div class="blog_item_video" data-incvalue="<?php echo $video_tich_ti; ?>">
                                </div> 
                        <?php  } 
                        unset($video_tich_ti) 
                        ?>
                    </div>
                    
                    <div class="wrapper_item_blog_content">
                    <?php 
                        $content = get_the_content();
                        if (!empty($content)) {?>
                        <div class="item_blog_about_content">О себе:</div>
                        <div class="item_blog_content">
                            <?php echo $content;?>
                        </div>
                    <?php  } 
                    ?>
                    </div>
                    <div class="clear"></div>
                </div>
            
                <div class="clear"></div>
            </div>
            
        	<!-- Modal image -->
                <div class="modal_img modal fade" id="modal-img-<?php echo $myi; ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><?php the_title(); ?></h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="modal-body-item modal-body-item-active" data-incvalueimg="<?php echo $pic_full_img[0]; ?>">
                                    <div class="col-md-6">
                                        <img class="modal-body-img" alt="<?php echo get_the_title(); ?>" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="modal-subtitle">Оставьте заявку и мы вам перезвоним в течение 1 рабочего часа.</div>
                                        </div>
                                        <input type="hidden" name="tail" id="hidden_title" value="<?php echo get_the_title(); ?>" />
                                        <?php get_template_part( 'tpl/form/form_repet' );?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <p>Оставляя заявку. Вы соглашаетесь с <a href="#privat_policy" data-toggle="modal" >условиями сайта</a> и на обработку персональных данных</p>
                                <a href="#" class="btn btn-default" data-dismiss="modal">X Закрыть</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Modal image/ -->
            
            <!-- Modal with form -->
                <div class="modal fade" id="modal-checkin-<?php echo $myi; ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background: #f7d337 url('<?php echo get_template_directory_uri(); ?>/img/incline_bg.png') center">
                            <div class="modal-header">
                                <h4 class="modal-title form_modal-title">Записаться к выбранному преподавателю</h4>
                            </div>
                            
                            <div class="modal-body">
                                <div class="modal-subtitle">Оставьте заявку и мы вам перезвоним в течение 1 рабочего часа.</div>
                                    <input type="hidden" name="tail" id="hidden_title" value="<?php echo get_the_title(); ?>" />
                                    <?php get_template_part( 'tpl/form/form' );?>
                            </div>
                            
                            <div class="modal-footer">
                                <p>Оставляя заявку. Вы соглашаетесь с <a href="#privat_policy" data-toggle="modal" >условиями сайта</a> и на обработку персональных данных</p>
                                <a href="#" class="btn btn-default" data-dismiss="modal">X Закрыть</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Modal with form/ -->
            
            <div class="clear"></div>
        </article>
    </div>
    <?php 
    	}
	    $myi++;
	    $m++;
    }
}
    wp_reset_postdata();               
?>