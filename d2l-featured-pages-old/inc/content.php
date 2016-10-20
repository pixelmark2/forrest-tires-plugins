<?php
function d2l_fp_content( $atts ) { 
  $a = shortcode_atts( array(
      'page_id' => '',
      'layout' => '1',
      'featured_class' => 'featured-post'
  ), $atts );
	$page_id = $a['page_id'];
	$layout = $a['layout'];
	$featured_class = $a['featured_class'];


	$post = get_post($page_id);
	$permalink = get_permalink($page_id);
	$title = $post->post_title;
	if (has_post_thumbnail( $page_id ) ) {
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );
	}
	$excerpt = $post->post_excerpt;
	ob_start();
	if ($layout == "1") {
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
<?php	} else if ($layout == "2") { ?>


		<div class="fp card-item <?php echo $featured_class; ?>">
			<div class="card-image">

				<div style="background-image: url('<?php echo $image_url[0]; ?>')" class="rimage background-image">
				</div>

			</div>
			<div class="inner_overlay">
				<div class="inside-title">
					<div class="wrap">
						<h2><?php echo $title; ?></h2>
						<?php echo $excerpt; ?>
					</div>
				</div>
			</div>
		</div>

<?php } ?>

	<?php 
	return ob_get_clean();
}