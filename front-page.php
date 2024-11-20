<?php get_header(); ?>

<!-- main -->
<main>
  <div id="top" class="wrapper">
    <ul class="product-list">

      <?php
      $args = array(
        'posts_per_page' => 8
      );
      ?>

      <?php $posts = get_posts($args); ?>

      <?php foreach ($posts as $post): ?>
        <?php setup_postdata($post); ?>

        <li>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
            <p><?php the_title(); ?></p>
            <p>&yen;<?php echo get_field('price'); ?> +tax</p>
          </a>
        </li>
      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>
    </ul>
    <a href="<?php echo esc_url(home_url('/category/products/')); ?>" class="viewmore">View More</a>

  </div>
</main>


<?php get_footer(); ?>