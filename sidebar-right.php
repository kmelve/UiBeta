				<div id="sidebar-right" class="sidebar large-3 medium-3  columns" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-right' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>