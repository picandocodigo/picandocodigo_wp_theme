<?php get_header(); ?>
<div class="twelve columns">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h2>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>

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
        <a href="http://picandocodigo.net/2013/half-life-beta-para-steam-en-linux/feed/">
          Feed de comentarios
        </a> | 
        <a href="http://picandocodigo.net/2013/half-life-beta-para-steam-en-linux/trackback/" rel="trackback">
          Url para Trackbacks
        </a> | 
        <a href="http://feedburner.google.com/fb/a/mailverify?uri=picandocodigo&amp;loc=es_ES"> Suscribirse a los posts por correo electrónico.</a>

      <?php endwhile; ?>
	    <?php else :
            include("nothing_found.php");
            endif; ?>
      </div>
    </div>
<?php comments_template(); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
