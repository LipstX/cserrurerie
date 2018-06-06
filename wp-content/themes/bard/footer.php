		</div><!-- #page-content -->

		<!-- Page Footer -->
		<footer id="page-footer" class="<?php echo esc_attr(bard_options( 'general_footer_width' )) === 'boxed' ? 'boxed-wrapper ': ''; ?>clear-fix">
				
			<?php

			// Instagram Widget
			get_template_part( 'templates/sidebars/instagram', 'widget' );

			// Footer Socials
			if ( bard_options( 'page_footer_show_socials' ) === true ) {
				bard_social_media( 'footer-socials', true );
			}
			
			// Footer Widgets
			echo get_template_part( 'templates/sidebars/footer', 'widgets' );

			?>
			
			<div class="footer-copyright">

				<div class="page-footer-inner <?php echo bard_options( 'general_footer_width' ) === 'contained' ? 'boxed-wrapper': ''; ?>">
					
					<div class="copyright-info">
						<?php

						$copyright = bard_options( 'page_footer_copyright' );
						$copyright = str_replace( '$year', date_i18n( __('Y','bard') ), $copyright );
						$copyright = str_replace( '$copy', '&copy;', $copyright );

						echo wp_kses_post( $copyright );

						if ( $copyright !== '' ) {
							esc_html_e( ' | ', 'bard' );
						}

						?>

						<span class="credit">
							<?php esc_html_e( 'Bard Theme by ', 'bard' ); ?>
							<a href="<?php echo esc_url( 'http://wp-royal.com/' ); ?>">
							<?php esc_html_e( 'Royal-Flush', 'bard' ); ?>
							</a>
						</span>
					</div>

					<div class="footer-main-container">
						<div class="footer-left-panel footer-panel">
							<div class="footer-nav-title">Navigation</div>
							<div class="footer-nav">
								<?php 
									 $pages = get_pages();
									foreach ( $pages as $page ) {
										$menu_name = esc_html($page->post_title);
										$menu_link = get_page_link( $page->ID );
										echo "<a href='". esc_url($menu_link) ."'>". esc_html($menu_name) ."</a>";
									}
								?>
							</div>
						</div>
						<div class="footer-middle-panel footer-panel">
							<div class="footer-nav-title">Secteur d'intervention</div>
							<div class="footer-town"> 
								Quimper - Ergué Gabéric - Plomelin  Pluguffan - Briec - Combrit - Benodet  Fouesnant - Pont L’abbé - Concarneau  Douarnenez - Rosporden 
							</div>
						</div>
						<div class="footer-right-panel footer-panel">
							<div class="footer-nav-title">Informations</div>
							<div class="footer-info">Cornouaille serrurerie</div>
							<div class="footer-tel">06 59 34 21 75</div>
							<div class="footer-info-small">7j/7 - 24h/24</div>
							<div class="footer-info-small">Garantie décenale préservée</div>
						</div>
					</div>

					<div class="legal-terms">
						Cornouaille Serrurerie - 06 59 34 21 75 - SIRET: 83969715800013 - <a href="#">Mentions Légales</a>
					</div>
				</div>

			</div><!-- .boxed-wrapper -->

		</footer><!-- #page-footer -->

	</div><!-- #page-wrap -->

<?php wp_footer(); ?>

</body>
</html>