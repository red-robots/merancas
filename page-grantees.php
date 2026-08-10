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
									<?php if ( ! empty($b['image']) && is_array($b['image']) ) { ?>
										<img src="<?php echo esc_url($b['image']['url']); ?>" alt="<?php echo esc_attr($b['image']['alt']); ?>">
									<?php } ?>
								</div>
								
								<div class="link">
									<h4><?php echo $b['title']; ?></h4>
									<!-- <a href="<?php echo $b['link']['url']; ?>" target="<?php echo $b['link']['target']; ?>"><?php echo $b['link']['title']; ?></a> -->
									<?php if ( ! empty($b['link']) ) : ?>

										<?php if ( is_array($b['link']) ) : ?>
											<a href="<?php echo esc_url($b['link']['url']); ?>"
											   target="<?php echo esc_attr($b['link']['target'] ?: '_self'); ?>">
												<?php echo esc_html($b['link']['title']); ?>
											</a>

										<?php elseif ( is_string($b['link']) ) : ?>
											<a href="<?php echo esc_url($b['link']); ?>">
												<?php echo esc_html($b['title']); ?>
											</a>
										<?php endif; ?>

									<?php endif; ?>
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
