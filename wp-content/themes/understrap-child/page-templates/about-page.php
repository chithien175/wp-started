<?php
/**
 * Template Name: About Us Page
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
    $about_banner = get_field('about_banner');
    $about_content = get_field('about_content');
?>

<div class="breadcumb-area black-opacity" style="background: url(<?php echo $about_banner['image']; ?>)no-repeat center center / cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcumb-wrap">
                    <h2><?php echo $about_banner['title'] ?></h2>
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

			<div class="col-md-6">

                <div id="about-img">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <img class="img-fluid" src="<?php echo $about_content['image'] ?>" alt="">

                    <?php endwhile; // end of the loop. ?>

                </div>

            </div><!-- #primary -->
            
            <div class="col-md-6">

                <div id="about-content">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <h1 class="title"><?php echo $about_content['title'] ?></h1>

                        <div class="content">
                            <?php echo $about_content['content'] ?>
                        </div>

                    <?php endwhile; // end of the loop. ?>
                    
                </div>
            </div>

        </div><!-- .row end -->
    
    </div>

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
