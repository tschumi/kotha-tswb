<?php get_header(); ?>
<div class="st-content">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
			<div id="primary" class="content-area padding-content white-color">
				<main id="main" class="site-main" role="main">

					<section class="error-404 text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carol-computer-says-no.png" alt="Computer says no.">
					</section><!-- .error-404 -->
					<div class="text-center">
						<button type="button" onclick="history.back();" class="btn btn-orange"><?php _e( 'Back', 'kotha' ); ?></button>
					</div>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
