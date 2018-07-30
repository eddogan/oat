<?php 
	get_template_part('header');
?>
<main id="main-content">
<?php 
		if( have_rows('sections') ) :	
		while( have_rows('sections') ) : the_row();
		
		//Large Banner Layout
		if( get_row_layout() == 'lg_banner' ) { get_template_part('partials/content', 'lg-banner'); }
		
		//Small Banner Layout
		if( get_row_layout() == 'sm_banner' ) { get_template_part('partials/content', 'sm-banner');  }
		
		//Vertical Slider Layout
		if( get_row_layout() == 'vertical_slider' ) { get_template_part('partials/content', 'vertical-slider'); } 
		
		//Horizontal Slider Layout
		if( get_row_layout() == 'horizontal_slider' ) { get_template_part('partials/content', 'horizontal-slider'); } 
		
		//Basic Two Column Layout
		if( get_row_layout() == 'basic_two_column' ) { get_template_part('partials/content', 'basic-twocol'); } 
		
		//Numbered Two Column Layout
		if( get_row_layout() == 'num_two_column' ) { get_template_part('partials/content', 'numbered-twocol'); } 
		
		//Team Layout
		if( get_row_layout() == 'team' ) { get_template_part('partials/content', 'team'); } 
		
		//Growth Timeline Layout
		if( get_row_layout() == 'growth_timeline' ) { get_template_part('partials/content', 'growth-timeline'); }
		
		//Asset Map Layout
		if( get_row_layout() == 'asset_map' ) { get_template_part('partials/content', 'asset-map'); }	
		
		//Assets Intro Layout
		if( get_row_layout() == 'asset_map_intro' ) { get_template_part('partials/content', 'asset-intro'); }	
		
		//Blog Layout
		if( get_row_layout() == 'blog' ) { get_template_part('partials/content', 'blog'); }	
		
		endwhile; 
		endif;
	}
?>

</main>
<?php 
	get_template_part('footer'); ?>
