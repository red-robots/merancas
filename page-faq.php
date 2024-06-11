<?php
/**
 * Template Name: FAQ
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); ?>
<div id="primary" class="content-area default-template">
	<main id="main" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
      <section class="entry-content">
      	<?php the_content(); ?>

      	<?php 
      		// Check value exists.
			if( have_rows('content_type') ):

			    // Loop through rows.
			    while ( have_rows('content_type') ) : the_row(); ?>

			        <?php // Case: Paragraph layout.
			        if( get_row_layout() == 'faq' ):
			            $faqs = get_sub_field('faqs');
			            ?>

			            <?php if( $faqs ) { ?>
			            	<div class="faqs">
			            		<?php foreach( $faqs as $f ) { ?>
				            		<div class="faqrow">
						               <div class="question"><div class="question-image"></div><?php echo $f['question']; ?></div>
						               <div class="answer"><?php echo $f['answer']; ?></div>
						            </div>
				            	<?php } ?>
			            	</div>
			           <?php } ?>

			           

			        <?php // Case: Download layout.
			        elseif( get_row_layout() == 'file_tabs' ): 
			            $tab = get_sub_field('tab'); ?>
			            <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
			          <?php  foreach( $tab as $t ) {
						?>

			        	<?php } ?>

			    <?php endif;

			    // End loop.
			    endwhile;

			// No value.
			else :
			    // Do something...
			endif;
      		 ?>

      		 
      	</section>
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
