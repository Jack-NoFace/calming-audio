
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
					<svg class="icon" id="play-<?php echo $id;?>"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#play-circle"/ onclick="play<?php echo $id;?>()"></svg>
					<svg class="icon display--none" id="pause-<?php echo $id;?>"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#pause-circle"/ onclick="pause<?php echo $id;?>()"></svg>
					<input id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)"></input>
				</div>
			</div>

			<h2><?php the_title(); ?></h2></br>
		 </div>
		<script>
			window.SetVolume = function(val)
			{
				var player = document.getElementById('audio_player_<?php echo $id; ?>');
				console.log('Before: ' + player.volume);
				player.volume = val / 100;
				console.log('After: ' + player.volume);
			}

			function play<?php echo $id;?>() {
				document.getElementById('audio_player_<?php echo $id;?>').play();
				document.getElementById("play-<?php echo $id;?>").classList.add("display--none");
				document.getElementById("pause-<?php echo $id;?>").classList.remove("display--none");
			}

			function pause<?php echo $id;?>() {
				document.getElementById('audio_player_<?php echo $id;?>').pause();
				document.getElementById("pause-<?php echo $id;?>").classList.add("display--none");
				document.getElementById("play-<?php echo $id;?>").classList.remove("display--none");
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
