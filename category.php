<?php get_header(); ?>

<!-- main -->
<main>
  <div id="top" class="wrapper">
    <?php
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
    ?>
    <h1 class="page-title"><?php echo $catname; ?></h1>

    <ul class="product-list">


      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="">
              <p><?php the_title(); ?></p>
              <p>&yen;<?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?> +tax</p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>

    <?php
    $args = array(
      'type' => 'list',
      'prev_text' => 'PREV',
      'next_text' => 'NEXT'
    );
    echo paginate_links($args);
    ?>

  </div>
</main>


<?php get_footer(); ?>