<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); 

// $blocks = get_field('blocks');
?>
<div id="primary" class="content-area default-template">
	<main id="main" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
      <section class="entry-content">
      	<?php the_content(); ?>
      		<?php 
      		// Check value exists.
			if( have_rows('blocks') ):

			    // Loop through rows.
			    while ( have_rows('blocks') ) : the_row(); ?>

			        <?php // Case: Paragraph layout.
			        if( get_row_layout() == 'text_block' ):
			            $text_block = get_sub_field('text');
			            // $box_callouts = get_sub_field('box_callouts');
			            ?>

			            <?php if( $text_block ) { ?>
			            	<div class="text-block">
			            		<?php echo $text_block; ?>
			            	</div>
			           <?php } ?>

			           

			        <?php // Case: Download layout.
			        elseif( get_row_layout() == 'box_callouts' ): 
			            $box_callouts = get_sub_field('callouts');
			            ?>
			            <?php if( $box_callouts ) { ?>
			           	<div class="callouts">
			            	<?php foreach( $box_callouts as $b ) { 
			            		// echo '<pre>';
			            		// print_r($b);
			            		?>
			            		<div class="callout"><?php echo $b['callout']; ?></div>
			            	<?php } ?>
			            </div>
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
