<?php get_header(); ?>

<!-- main -->
<main>
  <section class="item-description">
    <div id="top" class="wrapper">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h2 class="page-ttl"><?php the_title(); ?></h2>
          <div class="description-inner">
            <div class="item-img">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
            </div>

            <div class="text">
              <?php the_content(); ?>
              <p class="price">&yen;<?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?> +tax</p>

              <dl class="item-flex">
                <dt>SIZE:</dt>
                <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'size', true)); ?></dd>
                <dt>COLOR:</dt>
                <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'color', true)); ?></dd>
                <dt>MATERIAL:</dt>
                <dd><?php echo esc_html(get_post_meta(get_the_ID(), 'material', true)); ?></dd>
              </dl>
              <a class="to-product" href="<?php echo esc_url(home_url('/category/products/')); ?>">Back To Products</a>
            </div>

          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
</main>


<?php get_footer(); ?>