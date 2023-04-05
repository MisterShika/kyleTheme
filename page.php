<?php
get_header();
?>
	<main>
		<?php
			if(have_posts()){
				echo '<div id="thumbnail-container">'.get_the_post_thumbnail().'</div>';
				echo '<header><h1>'.get_the_title().'</h1></header>';
				echo '<article>'.get_the_content().'</article>';
			}
		?>
		<div class="opacity-bg"></div>
	</main>
<?php
get_footer();
