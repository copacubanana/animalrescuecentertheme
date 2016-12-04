<?php

get_header();

// donation posts loop begins here
$donatePosts = new WP_Query('cat=donate');

if ($donatePosts->have_posts()) :

	while ($donatePosts->have_posts()) : $donatePosts->the_post(); ?>
		<h2><?php the_title(); ?></h2>

<?php
	endwhile;

	else :
		// fallback no content message here

endif;


get_footer();

?>