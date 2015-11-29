<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charser'); ?>">
    <meta name="viewport" content="wight=device-wight">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
<!---site-header--->
<header class="site-header">
  
  <h1><a href="<?php echo home-url;><?php bloginfo('name') ?></a> </h1>
  <h5><?php bloginfo('description');</h5>
</header>
</!---site-header--->
