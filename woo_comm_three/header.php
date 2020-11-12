<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandinavian_Lights</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class('custom_klasa'); ?>>

<header class="header">
  <div class="container d-flex align-items-center justify-content-between">
  <img src="<?php bloginfo('template_directory');?>./images/logo.jpg" class="logoImg">
        <?php wp_nav_menu(array('theme_location' => 'top-menu'));?>
  </div>  
</header>

    
