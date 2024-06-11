<?php
/**
 * Template Name: Grantees
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


      		<?php if( have_rows('grantees') ): ?>
	      		<div class="tabs">
				  <ul id="tabs-nav">
				  <?php while( have_rows('grantees') ): the_row(); 
				  	$title = get_sub_field('tab_title');
				  	$sani = sanitize_title_with_dashes($title);
					?>
					
					<li><a href="#<?php echo $sani; ?>"><?php echo $title; ?></a></li>
	      			
	      		<?php endwhile; ?>
	      			</ul>
	      		</div>
	      	<?php endif; ?>


	      	<?php if( have_rows('grantees') ): ?>
	      		<div id="tabs-content">
				  <?php while( have_rows('grantees') ): the_row(); 
				  	$title = get_sub_field('tab_title');
				  	$sani = sanitize_title_with_dashes($title);
				  	$block = get_sub_field('block');
					?>
					
					<div id="<?php echo $sani; ?>" class="tab-content">
						<?php foreach( $block as $b ) { ?>
							<div class="tee">
								<div class="image">
									<img src="<?php echo $b['image']['url']; ?>" alt="<?php echo $b['image']['alt']; ?>">
								</div>
								
								<div class="link">
									<h4><?php echo $b['title']; ?></h4>
									<a href="<?php echo $b['link']['url']; ?>" target="<?php echo $b['link']['target']; ?>"><?php echo $b['link']['title']; ?></a>
								</div>
							</div>	
						<?php } ?>
					</div>
	      			
	      		<?php endwhile; ?>
	      			
	      		</div>
	      	<?php endif; ?>


      	</section>
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
