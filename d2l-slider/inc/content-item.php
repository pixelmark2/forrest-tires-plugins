<div class="fp card-item" id="<?php echo get_the_ID(); ?>">
	<div class="card-image">

		<div style="background-image: url('<?php echo the_post_thumbnail_url( 'large' ) ?>')" class="rimage background-image">
		</div>

	</div>
	<div class="inner_overlay">
		<div class="inside-title">
			<div class="wrap">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

