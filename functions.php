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

function picandocodigo_comments($comment, $args, $depth) {
  // Comentario actual
  $GLOBALS['comment'] = $comment;

  // Pingback and trackbacks
  if ($comment->comment_type =="pingback" || $comment->comment_type =="trackback"):   ?>
    <li class="pings" id="comment-<?php comment_ID() ?>">
      <?php if(function_exists('useragent_spy_custom')): useragent_spy_custom(); endif; ?>
      <strong><?php comment_author_link() ?></strong> |
      <?php comment_date('j F. Y - '); comment_time();
            edit_comment_link(' Editar comentario','','');?> 
      <br/>
      <div class="ping-text"><?php comment_text() ?></div>

  <!--// Regular comments-->
  <?php else: ?>
    <li
       class="<?php if ($comment->user_id == 1) : echo "admin"; else: echo "user"; endif; ?>"
       id="comment-<?php comment_ID() ?>">
      <?php echo get_avatar( $comment, 50, null,"Avatar" ); ?>
      <span class="author"><?php comment_author_link() ?></span>
        <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
          <?php comment_date('j F. Y') ?> - <?php comment_time() ?>
        </a>

      <?php if ($comment->comment_approved == '0') : ?>
        <em><p>Tu comentario est&aacute; esperando ser moderado.</p></em>
      <?php endif; ?>
  
      <?php  if(function_exists('useragent_spy_custom')): useragent_spy_custom(); endif; ?>
      <?php comment_text() ?>
      <div class="reply">
        <?php 
           comment_reply_link(
             array_merge(
               $args, array(
                 'reply_text' => 'Responder',
                 'add_below'=> $add_below,
                 'depth' => $depth,
                 'max_depth' => $args['max_depth']
               )
             )
           );
        ?>
      </div>
      <?php edit_comment_link('Editar comentario','',''); ?>
    <?php endif; ?>
  <?php } ?>
