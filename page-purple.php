<?php
/**
 * Template Name: Purple
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); ?>
<div id="primary" class="content-area default-template">
	<main id="main" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-title "><h1 class="page-title"><?php the_title(); ?></h1></header>
      <section class="entry-content purple"><?php the_content(); ?></section>
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
