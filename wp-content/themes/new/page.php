<?php get_header(); ?>


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div itemscope="" itemtype="http://schema.org/Article">
    <div class="page-title">
        <h1 itemprop="name headline"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a></h1>
</div>

<div class="section group main-group">
        <div class="col span_12_of_12">
            <section role="main">
             
			 
			 <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products tag-featured-news" itemprop="articleBody">
    
	
    <p class="p1">
	<span class="s1">

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








