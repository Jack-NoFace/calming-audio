<?php /* Template Name: Type Page */ get_header(); ?>

	<main role="main">
		<section>
			<h1><?php the_title(); ?></h1>

			<?php

			// check if the repeater field has rows of data
			if( have_rows('linked_soundbytes') ):

				// loop through the rows of data
				while ( have_rows('linked_soundbytes') ) : the_row();

					// display a sub field value
					$id = get_sub_field('soundbyte_post')->ID;
					$file = get_field('sound_file', $id);?>

					<div class="soundbyte">
						<div class="soundbyte-icons">
							<?php the_post_thumbnail('thumbnail', array ('class' => 'audio-icon')); ?>
							<audio loop data-audio="<?php echo $id;?>">
								<source src="<?php echo $file; ?>" type="audio/mp3">
								Your browser does not support the audio element.
							</audio>

							<div>
								<svg class="icon" data-play="<?php echo $id;?>"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#play-circle"/></svg>
								<svg class="icon display--none" data-pause="<?php echo $id;?>"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/sprite-sheet.svg#pause-circle"/></svg>
								<input data-volume="<?php echo $id;?>" type="range" min="0" max="100" step="1" val="50"></input>
							</div>
						</div>

						<h2><?php echo get_the_title($id); ?></h2></br>
					</div>

					<?php
				endwhile;

			else :

				// no rows found

			endif;

			?>

		</section>
	</main>

<?php get_footer(); ?>
