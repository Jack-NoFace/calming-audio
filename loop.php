
<div class="audio-wrapper">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	
		<div class="soundbyte">	 
			<div class="soundbyte-icons">
				<?php the_post_thumbnail('thumbnail', array ('class' => 'audio-icon')); ?>
				
				<audio loop id="audio_player_<?php echo $id;?>">
					<source src="<?php the_field('media'); ?>" type="audio/mp3">
					Your browser does not support the audio element.
				</audio>
				

				<div>
					<svg class="icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#play-circle"/ onclick="document.getElementById('audio_player_<?php echo $id;?>').play()"></svg> 
					<svg class="icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#pause-circle"/ onclick="document.getElementById('audio_player_<?php echo $id;?>').pause()"></svg> </br>
					<svg class="icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#volume-2"/ onclick="document.getElementById('audio_player_<?php echo $id;?>').volume += 0.1"></svg>
					<svg class="icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#volume-x"/ onclick="document.getElementById('audio_player_<?php echo $id;?>').volume -= 0.1"></svg>
					<input id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input>
				</div>
			</div>

			<p><?php the_title(); ?></p></br>
		 </div>
		<script>
			window.SetVolume = function(val)
			{
			var player = document.getElementById('audio_player_<?php echo $id; ?>');
			console.log('Before: ' + player.volume);
			player.volume = val / 100;
			console.log('After: ' + player.volume);
			}
		</script>
		
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
</div>
