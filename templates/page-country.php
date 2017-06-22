<?php
	the_post();
?>
	<main id="content" class="country-page">
		
		<div class="block-links">
			<ul>
			<?php 
				$blockLinks = get_field("block_links", OPTION_PAGE);
				foreach ( $blockLinks as $key => $linkItem) {
			?>
				<li><a href="<?php echo $linkItem['link']?>"><?php echo $linkItem['text_link']?></a></li>
			<?php
				}
			?>
			</ul>
		</div>

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
		<div class="cta-button">
			<a href="<?php echo get_field("link_button"); ?>"><?php echo get_field("title_button"); ?></a>
		</div>


		
	</main> <!-- #content -->
