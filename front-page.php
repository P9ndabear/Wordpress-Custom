<?php get_header(); ?>

<main>
  <section>
    <h1>Welkom bij de Capybara Site</h1>
    <p>Alles over de grootste knaagdieren ter wereld.</p>
  </section>

  <section>
    <h2>Laatste berichten</h2>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <?php the_post_thumbnail('medium'); ?>
          <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>Nog geen berichten.</p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>