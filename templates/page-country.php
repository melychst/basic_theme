<?php
	the_post();
?>
	<main id="content" class="country-page">
		<div class="container">
			<div class="block-links">			
				<div class="row">

					<div class="col-md-4">
						<ul>
						<?php 
							$blockLinks = get_field("block_links_left", OPTION_PAGE);
							foreach ( $blockLinks as $key => $linkItem) {
						?>
							<li><a href="<?php echo $linkItem['link']?>"><?php echo $linkItem['text_link']?></a></li>
						<?php
							}
						?>
						</ul>					
					</div>
					<div class="col-md-4">
						<ul>
						<?php 
							$blockLinks = get_field("block_links_center", OPTION_PAGE);
							foreach ( $blockLinks as $key => $linkItem) {
						?>
							<li><a href="<?php echo $linkItem['link']?>"><?php echo $linkItem['text_link']?></a></li>
						<?php
							}
						?>
						</ul>					
					</div>
					<div class="col-md-4">
						<ul>
						<?php 
							$blockLinks = get_field("block_links_right", OPTION_PAGE);
							foreach ( $blockLinks as $key => $linkItem) {
						?>
							<li><a href="<?php echo $linkItem['link']?>"><?php echo $linkItem['text_link']?></a></li>
						<?php
							}
						?>
						</ul>					
					</div>				
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
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
				</div>
			</div>		
		</div>
	</main> <!-- #content -->
