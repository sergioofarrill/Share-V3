<?php

/*
|--------------------------------------------------------------------------
| The template for displaying posts in the status post format
|--------------------------------------------------------------------------
*/

?>
   
    <!-- post -->    
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> >
    
    	<!-- entry-meta -->
    	<div class="grid-25 tablet-grid-25 hide-on-mobile">
 		
    	    	<div class="entry-meta">
        
			
            <div class="date-format">
                <span class="day"><?php the_time('d'); ?></span>
                <span class="month"><?php the_time('M'); ?> <?php the_time('Y'); ?></span>
            </div>
       	</div>       
    
    	</div><!-- close entry-meta -->  

    
    <div class="grid-75 tablet-grid-75 mobile-grid-100">
   
    <!-- entry-content -->
    <div class="entry-content clearfix">
        <?php the_content( '<span class="more-link">' . __( 'Read more', 'unitedthemes' ) . '<i class="fa fa-chevron-circle-right"></i></span>' ); ?>
        <?php ut_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>' ) ); ?>
        
        <?php if ( is_single() ) : ?>
        <?php
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'unitedthemes' ) );
		if ( $tags_list ) :
		?>
        <span class="tags-links">
            <i class="fa fa-tags"></i><?php printf( __( 'Tagged&#58; %1$s', 'unitedthemes' ), $tags_list ); ?>
        </span>
    	<?php endif; // End if $tags_list ?>
        <?php endif; // is_single() ?>
        
    </div><!-- close entry-content -->
             
    </div>     
    
	</article><!-- close post --> 