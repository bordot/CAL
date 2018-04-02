<?php get_header();

// vars
$description = get_field('description');
$eligible = get_field('eligible');
$potential_award = get_field('potential_award');
$proof_of_purchase = get_field('proof_of_purchase');
$claim_form = get_field('claim_form');
$claim_form_deadline = get_field('claim_form_deadline');
$case_name = get_field('case_name');
$final_hearing = get_field('final_hearing');
$settlement_website = get_field('settlement_website');
$claims_administrator = get_field('claims_administrator');
$class_counsel = get_field('class_counsel');
$defense_counsel = get_field('defense_counsel');
$lawsuit_image = get_field('lawsuit_image');
 ?>


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
                <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-lawsuit-news category-consumer-products category-open-lawsuit-settlements tag-featured-settlement tag-featured-settlement-top tag-sponsored" itemprop="articleBody">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><img class="alignleft size-full wp-image-<?php the_ID(); ?>" src="<?php the_field('120px_image'); ?>" width="120" height="120" alt="<?php the_title(); ?>">
                                           </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
											<p class="p1"><?php the_field('description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Who’s Eligible</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
										<p class="p1"><?php the_field('eligible'); ?></p>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Potential Award</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper"><p class="p1"><?php the_field('potential_award'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Proof of Purchase</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="p1"><?php the_field('proof_of_purchase'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Claim Form</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><a class="wpb_button_a" title="CLICK HERE TO FILE A CLAIM »" href="<?php the_field('claim_form'); ?>" target="_blank"> <span class="wpb_button wpb_btn-primary wpb_btn-large">CLICK HERE TO FILE A CLAIM »</span> </a></p>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><span style="text-decoration: underline; color: #ff0000;"><strong>NOTE:</strong></span>&nbsp;If you do not qualify for this settlement do NOT file a claim.</p>
                                            <p>Remember: you are submitting your claim&nbsp;<em>under penalty of perjury</em>. You are also harming other eligible Class Members by submitting a fraudulent claim. If you’re unsure if you qualify, please&nbsp;read
                                                the FAQ section of the Settlement Administrator’s website to ensure you meet all standards (Top Class Actions is not&nbsp;a Settlement Administrator).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Claim Form Deadline</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="p1"><span class="s1"><?php the_field('claim_form_deadline'); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Case Name</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="p1"><?php the_field('case_name'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Final Hearing</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="p1"><span class="s1"><?php the_field('final_hearing'); ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Settlement Website</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p class="p1"><a href="<?php the_field('settlement_website'); ?>" target="_blank" rel="nofollow"><span class="s1"><?php the_field('settlement_website'); ?></span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Claims Administrator</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><?php the_field('claims_administrator'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Class Counsel</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><?php the_field('class_counsel'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h6>Defense Counsel</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p><?php the_field('defense_counsel'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <div itemprop="associatedMedia" class="schemahide"> <span itemscope="" itemtype="http://schema.org/ImageObject"> <img itemprop="contentURL" src="<?php the_field('lawsuit_image'); ?>"> </span></div>
        <meta property="og:image" content="<?php the_field('lawsuit_image'); ?>">
        
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
