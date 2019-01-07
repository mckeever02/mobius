<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package penrose
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="umbotron jumbotron-fluid bg-primary py-4 text-white"">
					<div class="container">
					<h1 class="display-4"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'penrose' ); ?></h1>
					</div>
				</header><!-- .page-header -->

				<div class="page-content container my-5 text-center">
					<p class="text-lg"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'penrose' ); ?></p>

					<?php
					get_search_form();

					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
