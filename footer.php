			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="row clearfix">
				
					<div class="large-12 medium-12 columns">
						<nav role="navigation">
    						 <?php joints_footer_links(); ?>
    						</nav>
    					</div>
	               		</div>
			                
				<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
				<div class="row clearfix" data-equalizer>			
					<?php dynamic_sidebar( 'sidebar-footer' ); ?>
				</div>		
				<?php endif; ?>
				
				<div class="row clearfix">
					<div class="large-12 medium-12 columns">
						<p><?php echo date('Y'); ?> <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">UiBeta</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://beta.uib.no" property="cc:attributionName" rel="cc:attributionURL">Universitetet i Bergen</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.en_US">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://beta.uib.no" rel="dct:source">http://beta.uib.no</a>.</p>
					</div>
				</div>
								
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		</div>
		</div>
				
		<!-- all js scripts are loaded in library/joints.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->