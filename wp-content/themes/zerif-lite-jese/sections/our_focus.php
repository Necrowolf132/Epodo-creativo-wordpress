<?php
/**
 * Our Focus section
 *
 * @package zerif-lite
 */

zerif_before_our_focus_trigger();

$zerif_ourfocus_show = get_theme_mod( 'zerif_ourfocus_show' );

echo '<section class="focus ' . ( ( is_customize_preview() && ( ! isset( $zerif_ourfocus_show ) || $zerif_ourfocus_show == 1 ) ) ? ' zerif_hidden_if_not_customizer ' : '' ) . '" id="focus">';

?>

	<?php zerif_top_our_focus_trigger(); ?>

	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<!-- SECTION TITLE AND SUBTITLE -->

			<?php

			/* Title */
			zerif_our_focus_header_title_trigger();

			/* Subtitle */
			zerif_our_focus_header_subtitle_trigger();

			?>

		</div>

		<div class="row">

				<?php
				if ( is_active_sidebar( 'sidebar_ourfocus' ) ) {

					dynamic_sidebar( 'sidebar-ourfocus' );

				} elseif ( current_user_can( 'edit_theme_options' ) && ! defined( 'THEMEISLE_COMPANION_VERSION' ) ) {

					if ( is_customize_preview() ) {
						/* translators: ThemeIsle Companion */
						printf( __( 'You need to install the %s plugin to be able to add Team members, Testimonials, Our Focus and Clients widgets.', 'zerif-lite' ), 'ThemeIsle Companion' );
					} else {
						/* translators: ThemeIsle Companion install link */
						printf( __( 'You need to install the %s plugin to be able to add Team members, Testimonials, Our Focus and Clients widgets.', 'zerif-lite' ), sprintf( '<a href="%1$s" class="zerif-default-links">%2$s</a>', esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=themeisle-companion' ), 'install-plugin_themeisle-companion' ) ), 'ThemeIsle Companion' ) );
					}
				}
				?>
            <?php
                /*$servicios_loop = new WP_Query(
                    apply_filters(
                    'zerif_latest_news_parameters',
                     array(
                        'post_type'           => 'post',
                        'category_name' => 'servicios_ofertas',
                        'order'               => 'DESC',
                        'ignore_sticky_posts' => true,
                     )
                    )
                );
             $varContador = 1;
             ?>
            <?php if ( $servicios_loop->have_posts() ) : ?>
                <?php while ( $servicios_loop->have_posts()  ) : $servicios_loop->the_post(); ?>
            <span id="ctup-ads-widget-8" class="">
			<div class="col-lg-3 col-sm-3 focus-box" data-scrollreveal="enter left after 0.15s over 1s" style="-webkit-transform: translatex(-60px);-moz-transform: translatex(-60px);-ms-transform: translatex(-60px);transform: translatex(-60px);opacity: 0;" data-sr-init="true">

                <a href="http://localhost:69/index.php/servicios/" class="service-icon">
							<i class="pixeden" style="background:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>') no-repeat center;width:100%; height:100%;"></i>
                                            <!-- FOCUS ICON-->
				</a>


				<h3 class="red-border-bottom"><?php the_title(); ?></h3>
                <!-- FOCUS HEADING -->
                <?php the_excerpt(); ?>

			</span>

                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata();*/
            ?>

		</div>

	</div> <!-- / END CONTAINER -->

	<?php zerif_bottom_our_focus_trigger(); ?>

</section>  <!-- / END FOCUS SECTION -->

<?php zerif_after_our_focus_trigger(); ?>
