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
        $tich_page = 'biol_tich';
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
    if( is_front_page() ){
        $offset = current_page_url();
        $offset = preg_replace("/[^0-9]/", '', $offset);
        if ($offset < 10) {
            $offset = 0;
        } else if ($offset >= 60){
            $offset = 60;
        }
        $args = array(
            'post_type' => 'tich_page',
            'orderby' => 'meta_value_num',
            'meta_query' => array( 
                                array('key' => 'rat_tich',
                                    'compare' => '=', 
                                    'type' => 'NUMERIC'
                                )
                            ),
            'offset' => $offset
        );
    }
    else {
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
                        'meta_key' => 'rat_tich',
                        'orderby'  => 'meta_value_num',
                        'order'    => 'DESC'
            );
        } 
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
<?php 
    if( is_front_page() ){?>
    <ul class="pagination">
        <li <?php if ($offset == 0): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 0): echo '#'; else: echo '/'; endif;?>">1</a></li>
        <li <?php if ($offset == 10): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 10): echo '#'; else: echo '?page=10'; endif;?>">2</a></li>
        <li <?php if ($offset == 20): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 20): echo '#'; else: echo '?page=20'; endif;?>">3</a></li>
        <li <?php if ($offset == 30): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 30): echo '#'; else: echo '?page=30'; endif;?>">4</a></li>
        <li <?php if ($offset == 40): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 40): echo '#'; else: echo '?page=40'; endif;?>">5</a></li>
        <li <?php if ($offset == 50): echo 'class="disabled"'; endif;?>><a class="next page-numbers" href="<?php if ($offset == 50): echo '#'; else: echo '?page=50'; endif;?>">6</a></li>
    </ul>
<?php }?>