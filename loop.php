
<div class="audio-wrapper">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	
		<div class="soundbyte">	 

			<?php the_post_thumbnail('thumbnail', array ('class' => 'audio-icon')); ?>
            
			<audio loop id="audio_player_<?php echo $id;?>">
				<source src="<?php the_field('media'); ?>" type="audio/mp3">
				Your browser does not support the audio element.
			</audio>

			<div>
				<button onclick="document.getElementById('audio_player_<?php echo $id;?>').play()">Play</button>
				<button onclick="document.getElementById('audio_player_<?php echo $id;?>').pause()">Pause</button>
				<button onclick="document.getElementById('audio_player_<?php echo $id;?>').volume += 0.1">Vol+ </button>
				<button onclick="document.getElementById('audio_player_<?php echo $id;?>').volume -= 0.1">Vol- </button>
			</div>

			<p><?php the_title(); ?></p></br>
		 </div>
	
		
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
