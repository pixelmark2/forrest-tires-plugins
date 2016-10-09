<?php

function slider_content($atts) {
  $a = shortcode_atts( array(
      'd2l_carousel_class' => 'carousel-list',
      'd2l_category' => 'fpcarousel',
  ), $atts );
	$d2l_carousel_class = $a['d2l_carousel_class'];
	$d2l_category = $a['d2l_category']; ?>

		<?php

		$args = array(
	    'category_name' => $d2l_category,
	    'post_status'=>'publish'
		);
		$query = new WP_Query( $args );
		ob_start();
		?>
	<div class="full-carousel-cards">
		<div class="<?php echo $d2l_carousel_class; ?>">
		<?php
		while ( $query->have_posts() ) : $query->the_post();

			include('content-item.php');

		endwhile; // End of the loop.
		?>
		</div>
	</div>			
	<?php return ob_get_clean();?>
<?php }

