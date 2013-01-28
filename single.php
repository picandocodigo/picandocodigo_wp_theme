<?php get_header(); ?>
<div class="twelve columns">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">

      <div class="eleven columns">
        <h2>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
      </div>

      <div class="eleven columns meta_top">
        <ul class="li_menu">
          <li class="date">
            <?php the_time('F') ?> <?php the_time('j') ?>, <?php the_time('Y') ?>
          </li>
          <li class="comments">
            <a href="<?php comments_link(); ?>">
              <?php comments_number(
                    '0 comentarios',
                    '1 comentario',
                    '% comentarios');
                    ?>
            </a>
          </li>
          <?php edit_post_link('Editar entrada'); ?>
        </ul>
      </div>
      <div class="clear"> </div>

      <?php the_content(); ?>


      <div class="<?php echo $class;?> columns meta_bottom">
          <ul class="li_menu">
            <li class="category">
              <?php the_category(' | ') ?>
            </li>
            <li class="tag">
              <?php the_tags('') ?>
            </li>
          </ul>

      </div>

      <div class="twelve columns post_meta">
        <?php comments_rss_link('Feed de comentarios'); ?> | 
        <a href="<?php trackback_url(true); ?>" rel="trackback">
          Url para Trackbacks
        </a> | 
        <a href="http://feedburner.google.com/fb/a/mailverify?uri=picandocodigo&amp;loc=es_ES"> Suscribirse a los posts por correo electrónico.</a>

      <?php endwhile; ?>
	    <?php endif; ?>
      </div>
    </div>
<?php comments_template(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
