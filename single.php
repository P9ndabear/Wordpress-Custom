<?php get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>

      <p>
        Door <?php the_author_posts_link(); ?>
        op <?php echo get_the_date(); ?>
      </p>

      <?php the_post_thumbnail('large'); ?>

      <?php the_content(); ?>

      <p>Categorie: <?php the_category(', '); ?></p>
      <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>