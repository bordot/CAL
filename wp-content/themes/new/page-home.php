<?php get_header(); ?>


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div itemscope="" itemtype="http://schema.org/Article">


<div class="section group main-group">
        <div class="col span_12_of_12">
            <section role="main">
             
			 

			 
<section>

			<div class="section group">
    <div class="col span_10_of_10 set-big-list">
		<h2 class="box-headline">Open Class Action Settlements</h2>
		
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
   'posts_per_page' => 15,
   'post_type'              => array( 'lawsuit_settlement' ),

   'paged' => $paged
);

$custom_query = new WP_Query( $args );

while($custom_query->have_posts()) : 
   $custom_query->the_post();	

   		   	$summary = get_field('description');

        echo '<div class="post-wrap">';
		echo '<article class="post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products category-open-lawsuit-settlements tag-featured-settlement tag-featured-settlement-top tag-sponsored">';
		echo '<div class="section group">';
		echo '<div class="col span_1_of_10"> <a title="' . get_the_title($post->ID) . '" href="' . get_permalink($post->ID) . '">';
					echo '<img class="post-thumb wp-post-image" src="' . get_field('lawsuit_image') . '" alt="' . get_the_title($post->ID) . '" />';
					echo '</a></div>';
		echo '<div class="col span_4_of_10">';
		echo ' <h2> <a href="' . get_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '" class="post-title">' . get_the_title($post->ID) . '</a></h2>';
		echo substr($summary, 0, 200);
		echo '... <a class="view-article" href="' . get_permalink($post->ID) . '">Read More</a>';
		echo '<p></p></div>';
		
		echo '<div class="col span_1_of_10"> <div class="typical-set">Estimate <span>' . get_field('potential_award') . '</span></div> </div>';
			echo '<div class="col span_1_of_10"> <div class="typical-set">Proof <span>' . get_field('proof') . '</span></div> </div>';

			echo '<div class="col span_1_of_10"> <div class="typical-set">Deadline <span>' . get_field('claim_form_deadline') . '</span></div> </div>';


		echo ' <div class="col span_2_of_10"><a href="' . get_permalink($post->ID) . '" class="blue-btn no_translate">SUBMIT CLAIM</a></div>';
		echo '<p></p></div></article></div>';	
     endwhile;
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

// Restore original Post Data
wp_reset_postdata();

?>





<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>

                       
                            

	

		
		</div>
		</section>			 
	
			 
			 
			 
			 
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








