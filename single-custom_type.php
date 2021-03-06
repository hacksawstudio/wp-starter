<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="inner-content wrap">

					<div class="grid">

						<div class="grid__item lap--two-thirds desk--three-quarters">

						    <div id="main" class="main clearfix" role="main">

							    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								    <header class="article-header">

									    <h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

									    <p class="byline vcard"><?php _e("Posted", "hacksawtheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <span class="amp">&amp;</span> <?php _e("filed under", "hacksawtheme"); ?> <?php echo get_the_term_list( get_the_ID(), 'custom_cat', "" ) ?>.</p>

								    </header> <!-- end article header -->

								    <section class="entry-content clearfix">

									    <?php the_content(); ?>

								    </section> <!-- end article section -->

								    <footer class="article-footer">

									    <p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">Custom Tags:</span> ', ', ' ) ?></p>

								    </footer> <!-- end article footer -->

								    <?php comments_template(); ?>

							    </article> <!-- end article -->

							    <?php endwhile; ?>

							    <?php else : ?>

		        					<article id="post-not-found" class="hentry clearfix">
		        						<header class="article-header">
		        							<h1><?php _e("Oops, Post Not Found!", "hacksawtheme"); ?></h1>
		        						</header>
		        						<section class="entry-content">
		        							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "hacksawtheme"); ?></p>
		        						</section>
		        						<footer class="article-footer">
		        						    <p><?php _e("This is the error message in the single-custom_type.php template.", "hacksawtheme"); ?></p>
		        						</footer>
		        					</article>

							    <?php endif; ?>

						    </div> <!-- end #main -->

	    				</div><!--

	    			 --><div class="grid__item lap--one-third desk--one-quarter">

			    			<?php get_sidebar('blog-sidebar'); ?>

	    				</div>

					</div><!-- end .grid -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
