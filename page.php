<?php get_header(); ?>
<div class="twelve columns">

  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="post" id="post-<?php the_ID(); ?>">
        <h2>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>

        <?php edit_post_link('Editar p&aacute;gina'); ?>

        <?php the_content(); ?>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
  <?php comments_template(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
