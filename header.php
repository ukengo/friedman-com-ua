<?php
$args = array(
  'menu' => 'Основное меню',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
  // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
  'container' => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
  'container_class' => '',              // (string) class контейнера (div тега)
  'container_id' => '',              // (string) id контейнера (div тега)
  'menu_class' => '',          // (string) class самого меню (ul тега)
  'menu_id' => '',              // (string) id самого меню (ul тега)
  'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
  'fallback_cb' => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
  'before' => '',              // (string) Текст перед <a> каждой ссылки
  'after' => '',              // (string) Текст после </a> каждой ссылки
  'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
  'link_after' => '',              // (string) Текст после анкора (текста) ссылки
  'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
  'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
);
$user_id = get_current_user_id();
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css?9" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript"
    src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.1.1.min.js"></script>
  <script type="text/javascript"
    src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.1.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
 <!-- <script src="https://kit.fontawesome.com/9a6286b843.js" crossorigin="anonymous"></script> -->

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-T8Q6DR');
  </script>
  <!-- End Google Tag Manager -->

  </script>



  <title><?php the_title(); ?></title>

  <?php wp_head(); ?>

  <!--[if IE]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  <script type="text/javascript">
    document.ready = function () {
      textDisplay = document.getElementById("hidden").style.display = "none";
    };
    function show() {
      textDisplay = document.getElementById("hidden").style.display = "block";
    }
  </script>

  <?php if ($user_id == 1): ?>
    <style>
      body {
        -moz-user-select: auto !important;
        -webkit-user-select: auto !important;
        -ms-user-select: auto !important;
        -o-user-select: auto !important;
        user-select: auto !important;
      }
    </style>
  <?php endif; ?>


  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T8Q6DR');</script>
  <!-- End Google Tag Manager -->

</head>

<body>
	
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T8Q6DR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  </div>
  <!-- прижать футер -->
  <div class="footer-bottom">
  <header class="header">
    <section class="wrapper">
      <div class="main-logo-container">
        <div class="logo-block">
          <a class="logo" style="background-image: url('<?php the_field("logo", "options"); ?>')"
            href="<?php echo pll_home_url(pll_current_language()); ?>">friedman</a>
        </div>
        <p class="slogan"><?php the_field('slogan', 'options'); ?></p>
        <div class="contacts">
          <?php
          $phones_1 = get_field('phones', 'options');
          $phones_2 = get_field('phones_2', 'options');
          $arr_1 = explode(',', $phones_1);
          $arr_2 = explode(',', $phones_2);
          ?>
          <div class="socials socials_header">
            <a href="https://wa.me/380674021578" target="_blank" class="socials__link socials__link_wa"
			   target="_blank">  				
			  </a>			  
            <a href="//t.me/vit_melnik" class="socials__link socials__link_tg socials__link_big" target="_blank">
            </a>
			  <a href="viber://chat?number=%2B380675042079" class="vibertel socials__link socials__link_vib"></a>
			  <a href="//www.facebook.com/friedmanukraine/" class="socials__link socials__link_fb socials__link_none"
              target="_blank">
            </a>
            <a href="//www.instagram.com/friedmanukraine/?igshid=agxwczlsw46"
              class="socials__link socials__link_ins socials__link_none" target="_blank">
            </a>
          </div>
          <div class="telephones telephones_header">
            <b>
              <a style="text-decoration: none;" href="tel:<?php echo $arr_1[0]; ?>"><?php echo $arr_1[0]; ?>
              </a>
              <br>
              <a style="text-decoration: none;" href="tel:<?php echo $arr_2[0]; ?>"><?php echo $arr_2[0]; ?></a>
              <div>
                <a style="text-decoration: none;"
                  href="mailto:<?php the_field("mail", "options"); ?>"><?php the_field("mail", "options"); ?></a>
              </div>
            </b>
          </div>
        </div>
        <div id="lang-items" class="lang-items conveythis-no-translate notranslate" translate="no">
          <?php //pll_the_languages(array('dropdown' => 1, 'show_names' => 0, 'display_names_as' => 0, 	'hide_if_empty'=>0,'hide_if_no_translation' => 1, 'hide_current' => 1)); ?>
<?php

ob_start();
pll_the_languages(array(
    'dropdown' => 1,
    'show_names' => 0,
    'display_names_as' => 'slug',
    'hide_if_no_translation' => 0,
    'hide_current' => 0,
    'echo' => 1
));
$polylang_html = ob_get_clean();

$show_en = false;
if (is_singular()) {
    $show_en = get_post_meta(get_the_ID(), 'conveythis_translate', true);
} elseif (is_category() || is_tag() || is_tax()) {
    $term = get_queried_object();
    $show_en = get_term_meta($term->term_id, 'conveythis_translate', true);
} elseif (is_post_type_archive('news')) {
    $news_page = get_page_by_path('news');
    if ($news_page) {
        $show_en = get_post_meta($news_page->ID, 'conveythis_translate', true);
    }
}

if ($show_en) {
	$polylang_html = preg_replace('/<option[^>]*lang="en"[^>]*>.*?<\/option>/i', '', $polylang_html);
	$en_url = esc_url(get_conveythis_url());
	$current_lang = get_effective_language();
	$en_selected = ($current_lang == 'en') ? ' selected="selected"' : '';
	$english_option = '<option value="' . $en_url . '" lang="en"' . $en_selected . '>en</option>';
	$polylang_html = str_replace('</select>', $english_option . '</select>', $polylang_html);
}
echo $polylang_html;
?>
		</div>
        <a class="btn-order" href="<?php pll_e('link_form'); ?>"><span
            class="decor"><?php pll_e('<strong>Получить</strong> консультацию'); ?></a>
      </div>
    </section>

    <div class="nav-search-flex">
      <div class="main-nav-container">
        <section class="wrapper wrapper-flex">
          <nav class="main-nav">
            <?php wp_nav_menu($args); ?>
          </nav>
          <div class="search-form">
            <?php get_search_form(); ?>
          </div>
        </section>
      </div>
    </div>

    <div class="mob_button">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div>
    </div>
  </header>
  <div class="wrapper-footer-bottom">