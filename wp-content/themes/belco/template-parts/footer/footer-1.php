<?php

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belco
 */

$belco_footer_logo = get_theme_mod('belco_footer_logo');
$belco_footer_top_space = function_exists('get_field') ? get_field('belco_footer_top_space') : '0';
$belco_copyright_center = $belco_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
$belco_footer_bg_url_from_page = function_exists('get_field') ? get_field('belco_footer_bg') : '';
$belco_footer_bg_color_from_page = function_exists('get_field') ? get_field('belco_footer_bg_color') : '';


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod('footer_widget_number', 4);

for ($num = 1; $num <= $footer_widgets; $num++) {
  if (is_active_sidebar('footer-' . $num)) {
    $footer_columns++;
  }
}

switch ($footer_columns) {
  case '1':
    $footer_class[1] = 'col-lg-12';
    break;
  case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
  case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
    break;
  case '4':
    $footer_class[1] = 'col-xl-3 col-lg-6 col-md-6 wow fadeInUp';
    $footer_class[2] = 'col-xl-3 col-lg-6 col-md-6 wow fadeInUp';
    $footer_class[3] = 'col-xl-3 col-lg-6 col-md-6 wow fadeInUp';
    $footer_class[4] = 'col-xl-3 col-lg-6 col-md-6 wow fadeInUp';
    break;
  default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>
<!-- Home Light Footer -->
<!--Site Footer Start-->
<footer class="site-footer">
  <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')) : ?>
    <div class="container">
      <div class="site-footer__top">
        <div class="row">
          <?php
          if ($footer_columns < 4) {
            print '<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">';
            dynamic_sidebar('footer-1');
            print '</div>';

            print '<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">';
            dynamic_sidebar('footer-2');
            print '</div>';

            print '<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">';
            dynamic_sidebar('footer-3');
            print '</div>';

            print '<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">';
            dynamic_sidebar('footer-4');
            print '</div>';
          } else {
            for ($num = 1; $num <= $footer_columns; $num++) {
              if (!is_active_sidebar('footer-' . $num)) {
                continue;
              }
              print '<div class="' . esc_attr($footer_class[$num]) . '">';
              dynamic_sidebar('footer-' . $num);
              print '</div>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="site-footer__bottom">
    <div class="container">
      <div class="site-footer__bottom-inner">
        <p class="site-footer__bottom-text"><?php print belco_copyright_text(); ?></p>
      </div>
    </div>
  </div>
</footer>
<!--Site Footer End-->
<!-- /.page-wrapper -->