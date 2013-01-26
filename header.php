<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>
   <?php
     if(is_single()):
       wp_title();
       echo ' - ';
       bloginfo('name');
     else:
       bloginfo('name');
     endif;
    ?></title>
  <meta name="description" content="">
  <meta name="author" content="Fernando Briano">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Favicons
  ================================================== -->
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
  <!-- Primary Page Layout
  ================================================== -->

  <div class="container">
    <div id="header">
      <div class="thirteen columns">

        <div class="five columns">
          <a href="/">
            <h1 id="blog_title"><span>Picando C&oacute;digo</span></h1>
          </a>
        </div>

        <div class="seven columns">
          <ul class="li_menu buttons">
            <li>
              <img src="<?php bloginfo('template_url');?>/images/rss.png" alt="RSS"/>
            </li>
            <li>
              <img src="<?php bloginfo('template_url');?>/images/github.png" alt="GitHub"/>
            </li>
            <li>
              <img src="<?php bloginfo('template_url');?>/images/twitter.png" alt="Twitter"/>
            </li>
            <li>
              <img src="<?php bloginfo('template_url');?>/images/identi.ca.png" alt="Identica"/>
            </li>
            <li>
              <img src="<?php bloginfo('template_url');?>/images/steam.png" alt="Steam"/>
            </li>
        </div>

      </div>
      <div class="three columns">
        
        <p id="bio">
          Mi nombre es <a href="http://fernandobriano.com/">Fernando Briano</a> y desde 2007 este es mi blog sobre programaci&oacute;n, software libre y dem&aacute;s.
        </p>
      </div>

      <div id="nav_menu" class="sixteen columns">
        <ul class="li_menu">
          <li>Casita</li>
          <li>Programación</li>
          <li>Software Libre</li>
          <li>Comics</li>
        </ul>
      </div>
    </div>
