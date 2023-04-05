<?php
get_header();
?>
	<div>
		<main>
			<?php
				if(have_posts()){
					echo '<h1>'.get_the_title().'</h1>';
					echo get_the_content();
				}
			?>
		</main>
	</div>
<?php
get_footer();