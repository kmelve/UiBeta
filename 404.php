<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-8 medium-8 columns first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
								<h1><?php _e("404 - Artikkel finst ikkje", "jointstheme"); ?></h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								<?php echo '<img src="' . get_stylesheet_directory_uri() . '/library/images/404.jpg" alt="Foto: TOR ERIK H. MATHIESEN; Manipulert av UiBeta" border="0" />' ?>
								<p><?php _e("Vi fant ikkje det du såg etter. Leit vidare!", "jointstheme"); ?></p>
							</section> <!-- end article section -->

							<section class="search">
							    <p><?php get_search_form(); ?></p>
							</section> <!-- end search section -->
						
							<footer class="article-footer">
							    
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>