<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php 
        $args = array (
            'post_type'         => 'Soundbyte',
			'category_name'		=> 'work'
        );

        $the_query = new WP_Query ($args);

         if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
          
            <div> 
				<?php the_post_thumbnail(); ?>
                <?php the_title(); ?></br>
				<audio controls loop> 
					<source src="<?php the_field('media'); ?>" type="audio/mp3"> 
					Your browser does not support the audio element. 
				</audio>
         	</div>
         
        <?php endwhile; else : ?>
            <p><?php echo ("No sounds to display");?></p>
        <?php endif; ?>

		<?php wp_reset_postdata(); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
