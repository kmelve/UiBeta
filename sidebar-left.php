				<div id="sidebar-left" class="sidebar large-4 medium-4 medium-offset-1  columns" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-left' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>