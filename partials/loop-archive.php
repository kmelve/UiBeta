<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
	<header class="article-header">
		<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		
		<span class="byline"><?php printf(__('Lagt inn av <span class="label author">%3$s</span> den <time class="label updated" datetime="%1$s" pubdate>%2$s</time> i <span class="label">%4$s</span>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), joints_get_the_author_posts_link(), get_the_category_list(', '));?></span>	
		<div class="clearfix">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		</div>
		
	</header> <!-- end article header -->
					
	<section class="entry-content clearfix" itemprop="articleBody">
		
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<?php //the_tags('<a href="#" class="button tiny radius" data-dropdown="tags">Merkelapper</a><ul id="tags" class="f-dropdown" data-dropdown-content><li>','</li><li>','<li></ul>'); ?>
	</footer> <!-- end article footer -->
						    
		<?php // comments_template(); // uncomment if you want to use them ?>
					
</article> <!-- end article -->