<?php
?>
	<div class="country-page">
		
		<div class="page-title">
			<?php echo the_title(); ?>
		</div>
		<div class="main-content">
			<div class="thumbnail-page">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
			</div>
			<div class="content-page">
				<?php the_content(); ?>
			</div>
		</div>
		<?php
			if ( get_field("title_cta") ) {
		?>

		<div class="cta-button">
			<a href="<?php echo get_field("link_cta"); ?>"><?php echo get_field("title_cta"); ?></a>
		</div>

		<?php
			}
		?>

		
	</div> <!-- #content -->
