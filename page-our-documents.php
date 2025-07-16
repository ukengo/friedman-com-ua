<?
/*
Template Name: Наши документы
*/
get_header(); ?>



<script type="text/javascript"
  src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" type="text/css"
  href="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

<section class="wrapper">
<div class="content-position"> 
    <div class="content-column">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<div class="breadcrumbs" id="breadcrumbs">', '</div>');
      }
      ?>

      <h1><?php pll_e('Наши документы'); ?></h1>
      <ul class="tabs-nav">
        <li><?php pll_e('documents-link'); ?>
        </li>
        <li><a
            href="<?php echo get_site_url(); ?>/<?php pll_e('get-contract1'); ?>"><?php pll_e('Оформить договор'); ?></a>
        </li>

      </ul>


      <div class="hr"></div>
      <ul class="documents-list big">

        <?php while (have_rows('docs_list')):
          the_row(); ?>

          <li>
            <a href="<?php the_sub_field('link'); ?>" class="iframe" target="_blank">
              <span class="img-box">
                <img src="<?php the_sub_field('img'); ?>" alt=" <?php the_sub_field('name'); ?>"></span>
              <?php the_sub_field('name'); ?><a href="<?php the_sub_field('link'); ?>"><?php pll_e('Скачать'); ?></a>
            </a>
          </li>

        <?php endwhile; ?>

      </ul>
    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_sidebar('news'); ?>
<div class="footer-place"></div>
</section>

<?php get_footer();
?>
<script>
jQuery('#menu-item-12354').addClass('current_page_item');
jQuery('#menu-item-12779').addClass('current_page_item');
jQuery('#menu-item-1164').addClass('current_page_item');
	
</script>
<?php