<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); 

$map = get_field('map_embed');
?>
<div id="primary" class="content-area default-template">
	<main id="main" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
      <section class="entry-content"><?php the_content(); ?></section>
      <section class="map-embed">
      	<?php echo $map; ?>
      </section>
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
