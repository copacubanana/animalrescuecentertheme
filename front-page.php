<?php

get_header();

?>

<!-- donate -->
<div class="donate clearfix">

	<?php 
	// donation posts loop begins here
	$donatePosts = new WP_Query('cat=4');

	if ($donatePosts->have_posts()) :

		while ($donatePosts->have_posts()) : $donatePosts->the_post(); ?>
			<article class="post">
				<p><?php the_content(); ?></p>
			</article>

	<?php
		endwhile;

		else :
			echo "<p>No content found.</p>";

	endif;
	wp_reset_postdata();
	?>

</div><!-- /donate -->
<!-- services -->
<div class="services clearfix">

	<?php
	// services posts loop begins here
	$servicesPosts = new WP_Query('cat=5');

	if ($servicesPosts->have_posts()) :

		while ($servicesPosts->have_posts()) : $servicesPosts->the_post(); ?>
			<article class="post">
				<p><?php the_content(); ?></p>
			</article>

	<?php
		endwhile;

		else :
			echo "<p>No content found.</p>";

	endif;
	wp_reset_postdata();

	?>

</div><!-- /services -->
<!-- container-adoption-news -->
<div class="container-adopt-news clearfix">
	<!-- adopt -->
	<div class="adopt">

<?php

// adopt posts loop begins here
$adoptPosts = new WP_Query('cat=9');

if ($adoptPosts->have_posts()) :

	while ($adoptPosts->have_posts()) : $adoptPosts->the_post(); ?>
		
		<article class="post">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</article>

<?php
	endwhile;

	else :
		echo "<p>No content found.</p>";

endif;
wp_reset_postdata();

?>
	</div><!-- /adopt -->
	
<!-- news -->
<div class="news">

<?php

	// news posts loop begins here
	$newsPosts = new WP_Query('cat=7');

	if ($newsPosts->have_posts()) :

		while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>

			<article class="post">
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</article>

	<?php
		endwhile;

		else :
			echo "<p>No content found.</p>";

	endif;
	wp_reset_postdata();

	?>

	</div><!-- /news -->

</div><!-- /container-adoption-news -->


<!-- container-mission-hours-->
<div class="container-mission-hours clearfix">

	<!-- mission -->
	<div class="mission">

<?php

// mission posts loop begins here
$missionPosts = new WP_Query('cat=8');

if ($missionPosts->have_posts()) :

	while ($missionPosts->have_posts()) : $missionPosts->the_post(); ?>
		
		<article class="post">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</article>

<?php
	endwhile;

	else :
		echo "<p>No content found.</p>";

endif;
wp_reset_postdata();

?>
	</div><!-- /mission -->

	<!-- hours -->
	<div class="hours">

<?php

// hours posts loop begins here
$hoursPosts = new WP_Query('cat=10');

if ($hoursPosts->have_posts()) :

	while ($hoursPosts->have_posts()) : $hoursPosts->the_post(); ?>
		
		<article class="post">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
		</article>

<?php
	endwhile;

	else :
		echo "<p>No content found.</p>";

endif;
wp_reset_postdata();

?>

	</div><!-- /hours -->

</div><!-- /container-mission-hours -->

<?php

get_footer();

?>