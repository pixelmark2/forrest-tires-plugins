<?php
function d2l_fp_content( $atts ) { 
  $a = shortcode_atts( array(
      'page_id' => '',
      'program_id' => '',
  ), $atts );
	$page_id = $a['page_id'];
	$program_id = $a ['program_id'];
	ob_start();
	$post = get_post($page_id);
	$permalink = get_permalink($page_id);
	$title = $post->post_title;
	if (has_post_thumbnail( $page_id ) ) {
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );
	}

	$excerpt = $post->post_excerpt;
	//$content = $post->post_content;
	//$content = apply_filters('the_content', $content);
	?>



	<div class="single-card card-item animated fadeInUpShort slow" data-id='1'>
		<!-- Use an a tag instead of a div for the card-image to make it clickable -->
		<a href="<?php echo $permalink; ?>" class="card-image animated">
			<div class="rimage background-image" style="background-image: url('<?php echo $image_url[0]; ?>')">
			</div>
		</a>
		<div class="card-details">
			<a href="<?php echo $permalink; ?>">
			<h3 class="title">
				<?php echo $title; ?>
			</h3>
			</a>
			<div class="excerpt">
				<?php echo $excerpt; ?>
			</div>
			<!-- <div class="tail">
				<a class="link" href="#">Read more</a>
			</div> -->
		</div>
	</div>

	<?php 
	return ob_get_clean();
}