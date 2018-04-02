<?php get_header(); ?>
		 <div class="page-title">
        <h1 itemprop="name headline"> <?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
</div>
	<div class="section group">
		<div class="col span_8_of_12">
		<section role="main">
	
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
   'posts_per_page' => 15,
   'category_name' => 'uncategorized',

   'paged' => $paged
);

$custom_query = new WP_Query( $args );

while($custom_query->have_posts()) : 
   $custom_query->the_post();	

   		   	$summary = get_field('description');
?>
 	<!-- article -->

<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products tag-featured-news">

    <div class="basic-post-wrap"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'alignleft basic-thumb post-thumb wp-post-image')); ?></a>
	
	
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h3 class="blog-title"><?php the_title(); ?></h3>
        </a>
<?php     echo substr($summary, 0, 200);
		echo '... <a class="view-article" href="' . get_permalink($post->ID) . '">Read More</a>'; ?>

    <p></p>
    <div class="meta-wrap">
        <div class="post-meta"> <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span><br> <span class="date"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></div>
 <div class="comments-wrap"> <span class="comments"> <a href="<?php the_permalink(); ?>/#comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '0 ', 'html5blank' ), __( '1 ', 'html5blank' ), __( '% ', 'html5blank' )); ?></a> </span> <?php edit_post_link(); ?></div> 
    </div>
    </div>
    
</article>
     <?php endwhile; 
	// Restore original Post Data
wp_reset_postdata();
?>
<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>
		</section>
		</div>
	<div class="col span_4_of_12 sidebar"> <?php dynamic_sidebar( 'right_sidebar' ); ?>
</div>
</div>

INSERT ADS

<?php get_footer(); ?>
