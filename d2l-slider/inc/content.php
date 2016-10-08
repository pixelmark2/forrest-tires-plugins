<?php

function slider_content() { ?>
	<div class="full-carousel-cards">
		<div class="carousel-list">
		<?php

		$args = array(
	    'category_name' => 'fpcarousel',
	    'post_status'=>'publish'
		);
		$query = new WP_Query( $args );

		while ( $query->have_posts() ) : $query->the_post();

			include('content-item.php');

		endwhile; // End of the loop.
		?>
		
		</div>
	</div>	
<?php }

