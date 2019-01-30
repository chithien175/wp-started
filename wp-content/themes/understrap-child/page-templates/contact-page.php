<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
    $contact_banner = get_field('contact_banner');
    $contact_content = get_field('contact_content');
    $contact_sidebar = get_field('contact_sidebar');
?>

<div class="breadcumb-area black-opacity" style="background: url(<?php echo $contact_banner['image']; ?>)no-repeat center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb-wrap">
                    <h2><?php echo $contact_banner['title'] ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a></li>
                        <li>/</li>
                        <?php the_title( '<li>', '</li>' ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-8">

                <div id="contact-content">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <h1 class="title"><?php echo $contact_content['title']; ?></h1>

                        <?php echo do_shortcode($contact_content['form']); ?>

                    <?php endwhile; // end of the loop. ?>

                </div>

            </div><!-- #primary -->
            
            <div class="col-md-4">
                <div id="contact-sidebar">
                    <h1 class="title"><?php echo $contact_sidebar['title']; ?></h1>
                    <p class="description"><?php echo $contact_sidebar['description']; ?></p>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <p><?php echo $contact_sidebar['phone']; ?></p>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <p><?php echo $contact_sidebar['email']; ?></p>
                        </li>
                        <li>
                            <i class="fa fa-location-arrow"></i>
                            <p><?php echo $contact_sidebar['address']; ?></p>
                        </li>
                    </ul>
                </div>
            </div>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
