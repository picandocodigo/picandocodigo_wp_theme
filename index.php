<?php get_header(); ?>

<div class="twelve columns">
<!-- The posts loop -->
  <?php if (have_posts()) : ?>
    <?php $count = 1; ?>
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
            <?php if($count < 4): ?>
                  <?php the_excerpt('Leer el resto &raquo;'); ?>
                  <?php $count+=1; ?>
                  <?php else: ?>
                  <div class="entry">
                    <?php the_excerpt('leer m&aacute;s &raquo;') ?>
                  </div>
                  <?php endif; ?>
                  <?php the_category(' | ') ?>
          </div>
      </div><!-- endpost -->


  <?php endwhile; ?>

  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	<?php else : ?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
