<?php
    $tich_page = '';
    if (get_post_meta($post->ID, 'angl1', 1)) {
        $tich_page = 'angl_tich';
    } elseif (get_post_meta($post->ID, 'russ1', true)) {
        $tich_page = 'russ_tich';
    } elseif (get_post_meta($post->ID, 'obch1', true)) {
        $tich_page = 'obch_tich';
    } elseif (get_post_meta($post->ID, 'fiz1', true)) {
        $tich_page = 'fiz_tich';
    } elseif (get_post_meta($post->ID, 'chem1', true)) {
        $tich_page = 'chem_tich';
    } elseif (get_post_meta($post->ID, 'biol1', true)) {
        $tich_page = 'angl_tbiol_tichich';
    } elseif (get_post_meta($post->ID, 'mat1', true)) {
        $tich_page = 'mat_tich';
    } elseif (get_post_meta($post->ID, 'lit1', true)) {
        $tich_page = 'lit_tich';
    } elseif (get_post_meta($post->ID, 'his1', true)) {
        $tich_page = 'his_tich';
    } elseif (get_post_meta($post->ID, 'infor1', true)) {
        $tich_page = 'infor_tich';
    } elseif (get_post_meta($post->ID, 'geo1', true)) {
        $tich_page = 'geo_tich';
    }
    if (get_post_meta($post->ID, 'random', true)) {

        $args = array(
                    'posts_per_page' => 1000,
                    'post_type' => 'tich_page',
                    'orderby' => 'rand',
                    'meta_query' => array(
                        array(
                            'key'   => $tich_page,
                            'value' => '1',
                        ),
                    ),    
        );
    } else{
        $args = array(
                    'posts_per_page' => 1000,
                    'post_type' => 'tich_page',
                    'meta_query' => array(
                        array(
                            'key'   => $tich_page,
                            'value' => '1',
                        ),
                    ),    
                    'meta_key' => 'order_tich',
                    'orderby'  => 'meta_value_num',
                    'order'    => 'DESC'
        );
    } 
    $query = new WP_Query( $args );
    $myi = 1;
 	if (have_posts()) { 
        while ( $query->have_posts() ) {
	        $query->the_post();
            get_template_part( 'tpl/block_view' );
	        $myi++;
    }
}
    wp_reset_postdata();               
?>