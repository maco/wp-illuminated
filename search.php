<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="ninecol first clearfix" role="main">
				
						<h2 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h2>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
								<header class="article-header">
							
									<h2 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							
									<p class="byline vcard"><?php _e("Posted", "illuminatedtheme"); ?> <time class="updated" datetime="<?php echo the_time('Y-m-d'); ?>" ><?php the_time('F jS, Y'); ?></time> <?php _e("by", "illuminatedtheme"); ?> <span class="author"><?php the_author_posts_link(); ?></span> <span class="amp">&</span> <?php _e("filed under", "illuminatedtheme"); ?> <?php the_category(', '); ?>.</p>
						
								</header> <!-- end article header -->
					
								<section class="entry-content">
								    <?php the_excerpt('<span class="read-more">Read more &raquo;</span>'); ?>
					
								</section> <!-- end article section -->
						
								<footer class="article-footer">
							
								</footer> <!-- end article footer -->
					
							</article> <!-- end article -->
					
						<?php endwhile; ?>	
					
						    <?php if (function_exists('illuminated_page_navi')) { ?>
						        <?php illuminated_page_navi(); ?>
						    <?php } else { ?>
						        <nav class="wp-prev-next">
						            <ul class="clearfix">
						    	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "illuminatedtheme")) ?></li>
						    	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "illuminatedtheme")) ?></li>
						            </ul>
						        </nav>
						    <?php } ?>		
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h2><?php _e("Sorry, No Results.", "illuminatedtheme"); ?></h2>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Try your search again.", "illuminatedtheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the search.php template.", "illuminatedtheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    			
    			    <?php get_sidebar(); ?>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
