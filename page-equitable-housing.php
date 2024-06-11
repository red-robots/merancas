<?php
/**
 * Template Name: Equitable Housing
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bellaworks
 */
get_header(); 

$map = get_field('map_embed');
$pic = get_field('pic');
$table = get_field('table');
?>
<div id="primary" class="content-area default-template">
	<main id="main" class="site-main wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
      <section class="entry-content"><?php the_content(); ?></section>
      <?php if( $map || $pic ) { ?>
		<section class="map">
	      	<div class="left">
	      		<?php echo $map; ?>
	      	</div>
	      	<div class="right">
	      		<img src="<?php echo $pic['url']; ?>" alt="<?php echo $pic['alt']; ?>">
	      	</div>
      	</section>
      <?php } ?>
      <?php if( $table ) { ?>
      	<section class="table">

      		<div class="theader">Site</div>
      		<div class="theader">PID</div>
      		<div class="theader">Acres</div>
      		<div class="theader">Status</div>
      		<?php foreach( $table as $t ) { ?>
      			<div class="tdiv">
      				<?php echo $t['site']; ?>
      			</div>
      			<div class="tdiv">
      				<?php echo $t['pid']; ?>
      			</div>
      			<div class="tdiv">
      				<?php echo $t['acres']; ?>
      			</div>
      			<div class="tdiv">
      				<?php echo $t['status']; ?>
      			</div>
      		<?php } ?>
      	</section>


      	<section class="table-mobile">

      		
      		<?php foreach( $table as $t ) { ?>
      			<div class="block">
	      			<div class="tdiv">
	      				<strong>Site:</strong> <?php echo $t['site']; ?>
	      			</div>
	      			<div class="tdiv">
	      				<strong>PID:</strong> <?php echo $t['pid']; ?>
	      			</div>
	      			<div class="tdiv">
	      				<strong>Acres:</strong> <?php echo $t['acres']; ?>
	      			</div>
	      			<div class="tdiv">
	      				<strong>Status:</strong> <?php echo $t['status']; ?>
	      			</div>
      			</div>
      		<?php } ?>
      	</section>

      <?php } ?>
		<?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
