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
    my_title();
   ?></title>
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
  <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/images/favicon.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url');?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url');?>/images/apple-touch-icon-114x114.png">

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/picandocodigo" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="http://feeds.feedburner.com/picandocodigo" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:site" content="@picandocodigo"/>
  <meta name="twitter:title" content="<?php my_title(); ?>"/>
  <meta name="twitter:description" content="<?php echo my_description(); ?>"/>
  <meta name="twitter:creator" content="@picandocodigo"/>
  <meta name="twitter:image:src" content="<?php echo my_thumbnail(); ?>"/>
  <meta name="twitter:domain" content="picandocodigo.net"/>

  <?php
    //wp_get_archives('type=monthly&format=link');
    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
    wp_head();
  ?>


</head>
<body>
  <!-- Primary Page Layout
  ================================================== -->

  <div class="container">
    <div id="header">
      <div class="twelve columns">

        <div class="five columns">
          <a href="<?php bloginfo('url');?>">
            <h1 id="blog_title"><span>Picando C&oacute;digo</span></h1>
          </a>
        </div>

        <div class="six columns buttons">
          <ul class="li_menu">
            <li>
              <a href="http://feeds.feedburner.com/picandocodigo" title="Feed RSS">
                <img src="<?php bloginfo('template_url');?>/images/rss.png" alt="RSS"/>
              </a>
            </li>
            <li>
              <a href="http://github.com/picandocodigo" title="GitHub">
                <img src="<?php bloginfo('template_url');?>/images/github.png" alt="GitHub"/>
              </a>
            </li>
            <li>
              <a href="http://twitter.com/picandocodigo" title="Twitter">
                <img src="<?php bloginfo('template_url');?>/images/twitter.png" alt="Twitter"/>
              </a>
            </li>
            <li>
              <a href="http://identi.ca/picandocodigo" title="Identi.ca">
                <img src="<?php bloginfo('template_url');?>/images/identi.ca.png" alt="Identica"/>
              </a>
            </li>
            <li>
              <a href="http://steamcommunity.com/id/picandocodigo" title="Steam">
                <img src="<?php bloginfo('template_url');?>/images/steam.png" alt="Steam"/>
              </a>
            </li>
            <li>
              <a href="/contact" title="Contacto">
                <img src="<?php bloginfo('template_url');?>/images/mail.png" alt="Contacto"/>
              </a>
            </li>
        </div>
      </div>

      <div class="four columns">
        <p id="bio">
          Mi nombre es <a href="http://fernandobriano.com/">Fernando Briano</a> y soy programador.
        </p>
      </div>

      <div class="sixteen columns bg3">
        <div class="eleven columns" id="nav_menu">
          <ul class="li_menu">
            <li class="house"><a href="<?php bloginfo('url');?>" title="Inicio"> </a></li>
            <li><a href="http://picandocodigo.net/programacion/">Programaci&oacute;n</a></li>
            <li><a href="http://picandocodigo.net/software-libre/">Software Libre</a></li>
            <li><a href="http://picandocodigo.net/comics/">Comics</a></li>
          </ul>
        </div>
        <div class="searchbox">
          <form method="get" action="<?php bloginfo('url'); ?>/">
            <fieldset>
              <input type="text" name="s" class="text" />
              <button type="submit">Buscar</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
