<?php if ( bard_options('header_image_label') === true ) : ?>

	<div class="entry-header" data-parallax="<?php echo esc_attr(bard_options( 'header_image_parallax' )); ?>" data-image="<?php echo esc_attr(get_header_image()); ?>">
		<div class="cv-outer">
		<div class="cv-inner">

			<div class="header-logo">
				
				<?php 
		
				if ( has_custom_logo() ) :

					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$custom_logo 	= wp_get_attachment_image_src( $custom_logo_id , 'full' );
					
				?>
	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" class="logo-img">
					<img src="<?php echo esc_url(  $custom_logo[0] ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">
				</a>
				
				<?php else : ?>

				<a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo bloginfo( 'title' ); ?></a>
				
				<?php endif; ?>

				<br>
				<p class="site-description"><?php echo bloginfo( 'description' ); ?></p>
				
			</div>

			<?php // Social Icons
				if ( bard_options( 'title_tagline_show_socials' ) === true ) {
					bard_social_media( 'header-socials', false );
				}
			?>

		</div>
		</div>
	</div>

<?php endif; ?>