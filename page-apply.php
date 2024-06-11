<?php
/**
 * Template Name: Apply
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
			if( have_rows('content_types') ):

			    // Loop through rows.
			    while ( have_rows('content_types') ) : the_row(); ?>

			        <?php // Case: Paragraph layout.
			        if( get_row_layout() == 'text_block' ):
			            $text_block = get_sub_field('text');
			            ?>

			            <?php if( $text_block ) { ?>
			            	<div class="text-block">
			            		<?php echo $text_block; ?>
			            	</div>
			           <?php } ?>

			           

			        <?php // Case: Download layout.
			        elseif( get_row_layout() == 'apply_box' ): 
			            $box = get_sub_field('box');
			            $link = get_sub_field('links');
			            
			            ?>

			            <div class="apply-box">
			            	<?php foreach( $box as $b ) { 
			            		$link = $b['links'];
			            		
			            		?>
			            	<div class="content">
			            		<?php echo $b['content']; ?>
			            	
				            	<?php foreach( $link as $l ) { ?>
				            		<div class="btn-row">
					            		<div class="button">
					            			<a href="<?php echo $l['link']['url']; ?>" target="<?php echo $l['link']['target']; ?>"><?php echo $l['link']['title']; ?></a>
					            		</div>
				            		</div>
				            	<?php } ?>
			            	
			            	</div>
			            	<?php } ?>
			            </div>

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
