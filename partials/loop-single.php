<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			<p class="byline"><?php printf(__('Posted by <span class="author label">%3$s</span> on <time class="updated label" datetime="%1$s" pubdate>%2$s</time>. <span class="label">%4$s</span>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), joints_get_the_author_posts_link(), get_the_category_list(', '));?>
			</p>		
    </header> <!-- end article header -->
					
    <section class="entry-content clearfix" itemprop="articleBody">
		<ul class="clearing-thumbs" data-clearing>
			<li><?php the_post_thumbnail('full'); ?></li>
			</ul>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title label">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
									
	<?php comments_template(); ?>	
													
</article> <!-- end article -->