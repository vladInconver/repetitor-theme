<?php
/**
 * inconver.com
 * Шаблон хэдера
 * http://inconver.com/
 * @package WordPress
 * @subpackage inconver.com
 */
    //исправление url
	$canonical = current_page_url();
	//end исправление url
	//title
	$title = get_post_meta($post->ID, 'title', true);
	if (stristr($canonical, "404")) {
		$title = 'Страница не найдена';
	}
	//end title
	//canonical url
	$can = explode("/",$canonical);	
	if (count($can) == 5 ) {
		$canonical = $can[0];	
		$canonical .= '//';
		$canonical .= $can[2]. '/';
		$canonical .= $can[3];
	} else {
		$canonical = current_page_url();
		if (stristr($canonical, "?")) {
			$canonical = stristr($canonical, '?', true);
		}
	}
	//canonical url end
	//redirect bad url
	if (preg_match("/[а-я]+/i", urldecode($can[4]) )) {
		header("Location: /404.html");
	}
    
    $request_uri = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="canonical" href="<?php echo $canonical;?>" />
<?php 
	 $offsetn = '';
     $offsetn = (int) preg_replace("/[^0-9]/", '', $offsetn); 
     if ($offsetn < 10) {?> 
		<link rel="next" href="<?php echo $canonical;?>?page=10"> 
	<?php } else if (($offsetn >= 10) && ($offsetn < 20)){?> 
		<link rel="prev" href="<?php echo $canonical;?>"> 
		<link rel="next" href="<?php echo $canonical;?>?page=20"> 
	<?php } else if ($offsetn >= 20 && $offsetn < 30){?> 
		<link rel="prev" href="<?php echo $canonical;?>?page=10"> 
		<link rel="next" href="<?php echo $canonical;?>?page=30"> 
	<?php } else if ($offsetn >= 30 && $offsetn < 40){?> 
		<link rel="prev" href="<?php echo $canonical;?>?page=20"> 
		<link rel="next" href="<?php echo $canonical;?>?page=40"> 
	<?php } else if ($offsetn >= 40 && $offsetn < 50){?> 
		<link rel="prev" href="<?php echo $canonical;?>?page=30"> 
		<link rel="next" href="<?php echo $canonical;?>?page=50"> 
	<?php } else if ($offsetn >= 50){?> 
		<link rel="prev" href="<?php echo $canonical;?>?page=40"> 
	<?php }
	if (get_post_meta($post->ID, 'select', true)) : ?>
		<meta name="robots" content="noindex,nofollow">
<?php endif; ?>

<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true);?>"> 
<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>"> 
<title><?php echo $title; ?></title>
	<?php	wp_head(); // Необходимо для работы плагинов и функционала wp?>

<script>
  function include_css(css_file) {
    var html_doc = document.getElementsByTagName('head')[0];
    css = document.createElement('link');
    css.rel = 'stylesheet';
    css.type = 'text/css';
    css.href = css_file;
    html_doc.appendChild(css);
    return false;
  }
  var date = +new Date;
  include_css("http://repetitor.msk.ru/wp-content/themes/repetitor-theme/design/style.css?v=" + date);
</script>
</head>
<body class="pageid_<?php echo get_the_ID();?><?php if( wp_is_mobile() ) { echo " modile_agent";}?>">
<!----<?php body_class();?>------>
	<div id="arrow_top"></div>
<div class="hid_bl_f_men" style="position:fixed; left:0; right:0; width:100%; height:100%; display:none; cursor:pointer; z-index:10;"></div>
	<header class="wrapper_all header_wrapper">
		<div class="header_flex_container">
			<div class="header_flex_element">
				<label class="header_togle_but_label" for="nav-trigger"></label>
				<a href="<?php
					if ($request_uri == '/') {
						echo '#';
					} else{						
						echo '/';
					} ;?>" class="logo">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo_fav.png" alt="Годограф">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo_rep.png" alt="Годограф">
				</a>
			</div>
			<div class="header_flex_element">
				<a class="header_togle_but_label anchor_linck" href="#left_sidebar"></a>
				<i class="fa fa-phone" aria-hidden="true"></i><span id="ya-phone-new">+7 (495) 970-99-66</span>
			</div>
			<div class="header_flex_element">
				<a class="but but_ch_title" data-toggle="modal" href="#myModal">Подобрать репетитора</a>
			</div>
		</div>
	</header>