<?php
/*
 * Template Name: Profile Template
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <?php the_content(); ?>
            </div>
        </div>
        <div id="staff" class="row">
            <?php
            $profiles = get_posts(array('post_type' => 'profile'));
            foreach ($profiles as $post) : setup_postdata($post); ?>
                <div class="col-xs-12">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('job_title'); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            <?php wp_reset_postdata();
            endforeach; ?>
        </div>
        <div id="clients" class="row">
            <div class="col-xs-12">
                <h1>Clients</h1>
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
            <div class="col-xs-6 col-sm-4">
                <img class="img-responsive" src="http://placehold.it/600x300">
            </div>
        </div>
        <div id="client-history" class="row">
            <div class="col-xs-12">
                <div class="page-heading">
                    <h1>Client History</h1>
                    <h2>from the archives</h2>
                </div>
            </div>
            <ul>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
                <li><a href="#">Gullwing Products</a></li>
            </ul>
        </div>
        <div id="awards" class="row">
            <div class="col-xs-12">
                <div class="page-heading">
                    <h1>Honors &amp; Awards</h1>
                </div>
            </div>
            <ul>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
                <li><a href="#">Leurzer's Archive + 2007</a></li>
            </ul>
        </div>
    </div>
</section>
<?php endwhile; endif;
get_footer();
