<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Front Page WooComm_Two</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('test'); ?>>

<header id="header">
        <div class="container">
        <div class="row d-flex justify-content-between" style="width:100%;">
            <div class="col-sm-3">
              <img src="<?php bloginfo('template_directory');?>/images/logo.svg" alt="WooCommLogo" id="logo">
            </div>
            <div class="col-sm-9">
            <?php wp_nav_menu(array(
                'theme_location' => 'Top_menu',
            )) ?>
            </div>
            
        </div>
        </div>
</header>


<div class="container" id="container1">
  <div class="row">
    <div class="col-sm">
      Press the button next to...
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-primary" id="btnOne" onclick="popup()">Get more</button>
    </div>
    <div class="col-sm">
    <p id="demo">Some details about new cars...</p>
    </div>
  </div>
</div>





    
