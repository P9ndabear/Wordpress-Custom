<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  if (have_posts()) :
      while (have_posts()) : the_post();
          the_content();
      endwhile;
  else :
      _e('Sorry, no posts matched your criteria.', 'textdomain');
  endif;
  ?>

  <?php wp_footer(); ?>
</body>
</html>