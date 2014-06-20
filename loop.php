<?php
if(have_posts()) {
	$count = wp_count_posts();
	
	// if page, single article, only one post : masonry can not load, display posts
	if ( ( is_single() || is_page() || ($wp_query->found_posts == 1) ) ) { ?>
		<script>var noMasonry = true;</script>
		<section id="articles" class="articles-flow">
				<?php 
				while(have_posts()) : the_post(); 
				get_template_part('content'); 
				endwhile; 
				?>
				
		</section><?php 
	}
	
	// else : display masonry
	else { ?>
	<section id="articles" class="articles-grid">
			<?php 
			while(have_posts()) : the_post(); 
			get_template_part('content'); 
			endwhile; 
			?>
	</section>
<div class="navigation">
<div class="previous_posts"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
<div class="next_posts"><?php next_posts_link('Next Entries &raquo;','') ?></div>
</div>
	<?php }
}

else { 
_e('<p style="text-align:center; padding: 20;">Désolé, Aucun article n\'a été trouvé avec ces critères.</p>');
};
?>




