<?php
function d2l_create_html( $atts ) { 
  $a = shortcode_atts( array(
      'page_ids' => '',
      'page_id' => '',
      'layout' => '1',
      'layout_style' => '',
      'random' => 'false',
  ), $atts );
  $page_id = $a['page_id'];
  $page_ids = explode(',', $a['page_ids']);
	$html_layout = $a['layout'];
	$layout_style = $a['layout_style'];
	$random = $a['random'];
	if ($random == 'true') {
		$rand_key = rand(0, count($page_ids)-1);
		$page_id = $page_ids[$rand_key];
	}
	ob_start();
?>

	<div class="<?php echo $layout_style; ?>">

		<?php
			if ($page_id == '' && $random == 'false') {
				foreach ($page_ids as $page_id) {
					d2l_html_content($page_id, $html_layout);

			  }			
			} else {
				d2l_html_content($page_id, $html_layout);
			}
 ?>
	</div>
	<?php 
	return ob_get_clean();
}



function d2l_html_content($page_id, $html_layout) {
		$post = get_post($page_id);
		$permalink = get_permalink($page_id);
		$title = $post->post_title;
		if (has_post_thumbnail( $page_id ) ) {
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'single-post-thumbnail' );

		}
		$excerpt = $post->post_excerpt;
		
		if ($html_layout == "1") {

		


		//$content = $post->post_content;
		//$content = apply_filters('the_content', $content);
		?>


			<div class="single-card card-item animated fadeInUpShort slow" data-id='1'>
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
	<?php	} else if ($html_layout == "2") { ?>


			<div class="fp card-item">
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

<?php } else if ($html_layout == "3") { ?>


	<div class="fp card-item" id="<?php echo get_the_ID(); ?>">
		<div class="card-image">
			<div class="inner_overlay">
				<div class="inside-title">
					<div class="wrap">
						<h2><?php echo $title; ?></h2>
						<?php echo $excerpt; ?>
					</div>
				</div>
			</div>
			<div style="background-image: url('<?php echo $image_url[0]; ?>')" class="rimage background-image">
			</div>

		</div>
	</div>
<?php } else if ($html_layout == "4") { ?>
			<div class="single-card card-item animated fadeInUpShort slow" data-id='1'>
				<div class="card-details">

					<div class="excerpt">
						<?php echo $excerpt; ?>
					</div>
					<a href="<?php echo $permalink; ?>">
						<h3 class="title">
							<?php echo $title; ?>
						</h3>
					</a>
				</div>
			</div>


<?php }
}