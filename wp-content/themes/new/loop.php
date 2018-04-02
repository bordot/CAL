<?php if (have_posts()): while (have_posts()) : the_post(); 
$summary = get_field('description');
$lawsuit_image = get_field('120px_image');
?>





































	<!-- article -->

<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products tag-featured-news">

    <div class="basic-post-wrap"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
	
	
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h3 class="blog-title"><?php the_title(); ?></h3>
        </a>
<?php     the_excerpt(); ?>

    <p></p>
    <div class="meta-wrap">
        <div class="post-meta"> <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span><br> <span class="date"> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span></div>
 <div class="comments-wrap"> <span class="comments"> <a href="<?php the_permalink(); ?>/#comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '0 ', 'html5blank' ), __( '1 ', 'html5blank' ), __( '% ', 'html5blank' )); ?></a> </span></div>
    </div>
    </div>
    
</article>
<?php edit_post_link(); ?>

	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
