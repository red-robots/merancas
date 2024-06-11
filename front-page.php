<?php
/**
 * The template for homepage
 *
 */
get_header();

$slides = get_field('slides');
?>

  <div id="primary" class=" home-content">
    <main id="main" class="site-main">

      <?php while ( have_posts() ) : the_post(); ?>
       

         <div id="slideshow">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <?php foreach( $slides as $s ) { ?>
                <div class="swiper-slide">
                  <img class="slideImage" src="<?php echo $s['url']; ?>" alt="<?php echo $s['alt']; ?>">
                </div>
              <?php } ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

           
          </div>

        

      <?php endwhile;  ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
