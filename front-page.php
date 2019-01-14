<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( 'images/produce-section.jpg' ) ?>);"></div>
  <div class="page-banner__content container t-center c-white page-banner__content--front-page">
    <h1 class="headline headline--large headline--front-page">Welcome!</h1>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">New Recipes</h2>


      <?php

          // $today = date('Ymd');
          $homepageRecipes = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'product',
            // 'meta_key' => 'recipe_post',
            // 'orderby' => 'meta_value_num',
            // 'order' => 'ASC',
            // 'meta_query' => array(
              // array(
                // 'key' => 'recipe_post',
                // 'compare' => '>=',
                // 'value' => $today,
                // 'type' => 'numeric'
              // )
            // )
              ));
        

        while ($homepageRecipes->have_posts()){
            $homepageRecipes->the_post() ?>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
          <span class="event-summary__month">
            <?php the_time('M'); ?></span>
          <span class="event-summary__day">
            <?php the_time('d'); ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?></a></h5>
          <p>
            <?php if(has_excerpt()){
              echo get_the_excerpt();

            } 
            else{
              echo wp_trim_words(get_the_content(), 18);
            }
            ?>
            <a href="<?php the_permalink(); ?>" class="nu gray">Read
              more</a></p>
        </div>
      </div>
      <?php } wp_reset_postdata();
        ?>




      <p class="t-center no-margin"><a href="<?php echo site_url('/product'); ?>" class="btn btn--yellow">View All
          Recipes</a></p>
    </div>
  </div>
</div>
</div>



<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( 'images/bus.jpg' ) ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Wellness Reminders</h2>
        <p class="t-center">Check out our reminders to get you through flu season!</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( 'images/apples.jpg' ) ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
        <p class="t-center">Check out our nutritional facts and healthy tips!</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( 'images/bread.jpg' ) ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Recipe Bundle</h2>
        <p class="t-center">Fictional Store offers a new subscription service with the ingredients used in our great
          recipes!</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

<?php
    get_footer();

?>