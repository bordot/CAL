<?php get_header(); ?>


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div itemscope="" itemtype="http://schema.org/Article">
    <div class="page-title">
        <h1 itemprop="name headline"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a></h1>
        <div class="post-meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person"> <span class="author" itemprop="name"><?php _e( 'By ', 'html5blank' ); the_author(); ?> </span><br> <span class="date" datetime="DATE" itemprop="datePublished"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?> </span></div>
        <div class="comments-wrap"> <span class="comments"> <a href="<?php the_permalink(); ?>/#comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '0 ', 'html5blank' ), __( '1 ', 'html5blank' ), __( '% ', 'html5blank' )); ?></a> </span></div>
    </div>

<div class="section group main-group">
        <div class="col span_8_of_12">
            <section role="main">
             
			 
			 <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products tag-featured-news" itemprop="articleBody">
    
	
    <p class="p1">
	<span class="s1">
	<img class=" wp-image-<?php the_ID(); ?> alignleft" src="<? echo get_post_meta($post->ID, 'featured_image', true); ?>" alt="<?php the_title(); ?>" width="302" height="201">
	<?php the_content(); ?>
	
	</span></p>
    
</article>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
        <div class="post-ad">
            ads
        </div>
	 <div class="comments">
       		<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>
				
</div>
	 </article>
        </section>
	
	</div>
	<div class="col span_4_of_12 sidebar"> <?php dynamic_sidebar( 'right_sidebar' ); ?>
</div>
	
		
	
	
	
		<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
	
	
	
	
	
		

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>








