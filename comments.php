<!-- WordPress crap -->
<?php
  // Do not delete these lines
  if (isset($_SERVER['SCRIPT_FILENAME']) &&
      'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">
      <?php echo "Este post est&aaute; protegido por contrase&ntilde;a."; ?>
    </p> 
  <?php return;}
?>
<!-- End of WordPress stuff -->


<div class="comments" id="comments">
  <?php if ( comments_open() ):?> <!--// 1 - comments open -->
    <h3>
      <?php comments_number('No hay comentarios', 'Un comentario', '% comentarios' );?> para la entrada.
    </h3>

    <?php if ( have_comments() ): ?>
      <ol class="commentlist">
			  <?php wp_list_comments('callback=picandocodigo_comments&type=comment'); ?>
		  </ol>
    <?php endif;?>
    <div class="form">
    <h4>
      <?php comment_form_title( 'Dejar un comentario', 'Responder a  %s' ); ?>
    </h4>

    <small><?php cancel_comment_reply_link() ?></small>

    <div class="metadata">
      <p>Para <strong>MOSTRAR C&Oacute;DIGO</strong>,
        encerrarlo entre los tags <strong>pre</strong> de esta forma:<br/>
        &lt;pre lang="L"&gt; y &lt;/pre&gt;, donde L es un lenguaje compatible
        <a href="http://qbnz.com/highlighter/" target="_blank">GeSHI</a>.
        <a href="http://picandocodigo.net/2008/07/como-mostrar-codigo-fuente-en-los-comentarios0/">
          M&aacute;s info</a>.
      </p>

      <p>
        <strong>XHTML:</strong> Las siguientes tags est&aacute;n permitidas:
        <?php echo allowed_tags(); ?>
      </p>

      <p>
        Al agregar un comentario en esta p&aacute;gina,
        aceptas la siguiente licencia para su publicaci&oacute;n:<br/>
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.es">
          Creative Commons Attribution-Share Alike 3.0 Unported License
        </a>
      </p>
    </div>

    <?php if ( get_option('comment_registration')
          && !is_user_logged_in() ) : ?><!--// 2 - for registered users -->
      <p>
        Debes estar
        <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">
          logueado
        </a>
        para comentar.
      </p>

    <?php else : ?><!--// 2 - no registered users -->

      <form id="respond" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php comment_id_fields(); ?>

        <?php if ( is_user_logged_in() ) : ?><!--// 3 - está logueado -->
          <p> Logueado como
            <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
              <?php echo $user_identity; ?>
            </a>
            <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Cerrar sesi&oacute;n">
              Logout &raquo;
            </a>
          </p>

        <?php else : ?><!-- 3 not logged in -->
          <p> <?php do_action('alt_comment_login');?>
            <label for="author">
              Nombre (requerido)
            </label>
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
          </p>

          <p>
            <label for="email">
              E-Mail (no va a ser publicado) (requerido)
            </label>
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
          </p>

          <p>
            <label for="url">
              Sitio web
            </label>
            <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
          </p>
        <?php endif; ?><!-- 3 -->

        <p>
          <label for="comment">Comentario</label>
          <textarea name="comment" id="comment" cols="150" rows="10" tabindex="4"></textarea>
        </p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentario" />
        <?php do_action('comment_form', $post->ID); ?>
      </form>
      </div>
    <?php endif; ?><!-- 2 -->

  <?php else: ?><!-- 1 -->
	  <!-- If comments are closed. -->
		<?php _e('Los comentarios están cerrados.'); ?>
  <?php endif; ?>
	
	<ol>
		<?php //wp_list_comments('type=pings');
			    wp_list_comments('callback=picandocodigo_comments&type=pings');
				  // PINGBACKS Y TRACKBACKS ?>
	</ol>
</div>

