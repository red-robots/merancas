<?php
/**
 * Template Name: Interns
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
      <section class="entry-content purple">
      	<?php the_content(); ?>
      		<?php $interns = get_field('interns'); if( $interns ) { 
      		// echo '<pre>';
      		// print_r($interns);
      		// echo '</pre>';
	      	?>
	      <section class="interns">

	      	<?php foreach( $interns as $intern ) { 
	      			$interns = $intern['intern'];
	      		?>
	      		<div class="year"><?php echo $intern['year']; ?></div>
		      		<div class="intern-wrap">
		      		<?php foreach( $interns as $person ) { ?>
		      			<div class="intern">
		      				<div class="photo">
		      					<img src="<?php echo $person['photo']['url']; ?>">
		      				</div>
		      				<div class="info">
		      					<?php echo $person['information']; ?>
		      				</div>
		      			</div>
		      		<?php } ?>
		      		</div>
	      	<?php } ?>
	      	
	      </section>
	      <?php } ?>
      	</section>

      
      
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
