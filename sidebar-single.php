				<div id="sidebar-single" class="sidebar large-3 medium-3 medium-offset-1  columns" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-single' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-single' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>