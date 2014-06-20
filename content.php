<article id="post-<?php the_ID(); ?>" <?php //onfocus="window.history.pushState('obj', 'titre', 'url');"?> tabindex="1" title="<?php the_title(); ?>">
	<div class="entry-header">
		<?php if ( has_post_thumbnail()) {
		$thumburl = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');?>
		<img src="<?php echo $thumburl[0];?>" title="<?php echo the_title_attribute('echo=0');?>"	alt="<?php echo the_title_attribute('echo=0');?>" class="post-thumbnail">
		<?php }; ?>
		<h1><a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h1>
	</div>
	
	<div class="entry-content">
		<?php the_content(); ?>
		</div>
		<!--<div class="meta">
		<p><?php the_author() ?> in <?php the_category(', ') ?></p>
		</div>-->

</article>