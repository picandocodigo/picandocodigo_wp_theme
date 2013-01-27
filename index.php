<?php get_header(); ?>

<div class="twelve columns">

<!-- The posts loop -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">

      <?php if (has_post_thumbnail()): ?>
        <div class="three columns thumbnail_post">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft wp-caption')); ?>
          </a>
        </div>

        <?php $class = "eight";
             else:
               $class = "eleven";
             endif; ?>
        <div class="<?php echo $class;?> columns">
          <h2>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>

          <div class="<?php echo $class;?> columns meta_top">
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
            </ul>

            <?php edit_post_link('Editar entrada'); ?>
          </div>

          <?php the_excerpt(); ?>

          <div class="<?php echo $class;?> columns meta_bottom">
            <ul class="li_menu">
              <li class="read"><a href="<?php the_permalink(); ?>">Leer entrada</a></li>
              <li class="category">
                <?php the_category(' | ') ?>
              </li>
              <li class="tag">
                <?php the_tags('') ?>
              </li>
            </ul>

          </div>

        </div>
    </div><!-- endpost -->
  <?php endwhile; ?>

  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	<?php else :
    include("nothing_found.php");
  endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
