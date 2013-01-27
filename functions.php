<?php
if(function_exists('register_sidebars')) {
  register_sidebars(1,
                    array(
                  'before_widget' => '<div id="%1$s" class="module %2$s">',
                  'after_widget' => '</div>'
                    )
  );
}


if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

if (!CUSTOM_TAGS) {
  $allowedtags = array(
                   'a' => array(
                   'href' => array (),
                   'title' => array ()),
                   'abbr' => array(
                   'title' => array ()),
                   'acronym' => array(
                   'title' => array ()),
                   'b' => array(),
                   'blockquote' => array(
                   'cite' => array ()),
                   //      'br' => array(),
                   'cite' => array (),
                   'code' => array(
                   'lang' => array()),
                   'del' => array(
                   'datetime' => array ()),
                   //      'dd' => array(),
                   //      'dl' => array(),
                   //      'dt' => array(),
                   'em' => array (),
                   'i' => array (),
                   'img' => array(),
                   //      'ins' => array('datetime' => array(), 'cite' => array()),
                   //      'li' => array(),
                   //      'ol' => array(),
                   //      'p' => array(),
                   'q' => array(
                   'cite' => array ()),
                   'strike' => array(),
                   'strong' => array(),
                   //      'sub' => array(),
                   //      'sup' => array(),
                   //      'u' => array(),
                   //      'ul' => array(),
  );
}
