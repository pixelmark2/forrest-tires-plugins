<?php
function d2l_create_gallery_html( $atts ) { 
  $a = shortcode_atts( array(
      'gallery_id' => ''
  ), $atts );
  $gallery_id = $a['gallery_id'];
	ob_start();
?>

	<div class="d2l-gallery">

		<?php
			$images = get_field('gallery', $gallery_id);
			foreach ($images as $image) {
				d2l_gallery_html_content($image);
			}
					

 ?>
	</div>
	<?php 
	return ob_get_clean();
}



function d2l_gallery_html_content($image) {
		?>
		<div>
	<div class="gallery-image" style='background-image: url("<?php echo $image['url']; ?>")'>
	</div>
	</div>
<?php }