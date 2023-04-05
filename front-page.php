<?php
get_header();
?>
	<main>
		<?php
			if(have_posts()){

				echo '<div id="thumbnail-container">'.get_the_post_thumbnail().'</div>';

				echo '<header><h1 class="english">'.get_the_title().'</h1>';
				if(get_post_meta(get_the_ID())){
					$metaLinks = get_post_meta(get_the_ID());
					echo '<h1 class="japanese">'.$metaLinks['h1japanese'][0].'</h1>';
					echo '<h2 class="english">'.$metaLinks['h2text'][0].'</h2>';
					echo '<h2 class="japanese">'.$metaLinks['h2japanese'][0].'</h2>';
				}
				echo '</header>';

				echo '<div id="translate-row"><button class="material-symbols-outlined" id="translate">Translate</button></div>';

				echo '<article>'.get_the_content().'</article>';

				if($metaLinks){
					echo '
						<nav id="social-bar">
							<ul>
								<li id="linkedin-button" class="social-button"><a href="'.$metaLinks['linkedin'][0].'"><img src="'.get_stylesheet_directory_uri().'/styles/img/linkedin-button.png" alt="LinkedIn"/></a></li>
								<li id="indeed-button" class="social-button"><a href="'.$metaLinks['indeed'][0].'"><img src="'.get_stylesheet_directory_uri().'/styles/img/indeed-button.png" alt="Indeed"/></a></li>
							</ul>
						</nav>
					';
				}
			}
		?>
		<div class="opacity-bg"></div>
	</main>
<?php
get_footer();
