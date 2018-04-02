<?php get_header(); ?>








		 <div class="page-title">
        <h1 itemprop="name headline"> <?php _e( '', 'html5blank' ); single_cat_title(); ?></h1>
</div>
	<div class="section group">
		<div class="col span_8_of_12">
		<section role="main">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
		</section>
		</div>
		

	<div class="col span_4_of_12 sidebar"> <?php dynamic_sidebar( 'right_sidebar' ); ?>
</div>
</div>

<?php get_footer(); ?>
