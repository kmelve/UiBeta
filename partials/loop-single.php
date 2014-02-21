<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<span class="byline"><?php printf(__('Lagt inn av <span class="author label">%3$s</span> den <time class="updated label" datetime="%1$s" pubdate>%2$s</time> i <span class="label">%4$s</span>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), joints_get_the_author_posts_link(), get_the_category_list(', '));?></span>		
			
			<?php the_post_thumbnail('full'); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
		
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title label">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
	<?php comments_template(); ?>	
													
</article> <!-- end article -->