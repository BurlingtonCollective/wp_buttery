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
        <?php if (have_rows('client_logos')) : ?>
            <div id="clients" class="row">
                <div class="col-xs-12">
                    <h1>Clients</h1>
                </div>
                <?php
                while (have_rows('client_logos')) : the_row();
                    $image = get_sub_field('image'); ?>
                    <div class="col-xs-6 col-sm-4">
                        <img class="img-responsive" src="<?php echo $image['url']; ?>">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div id="client-history" class="row">
            <div class="col-xs-12">
                <div class="page-heading">
                    <h1>Client History</h1>
                    <h2>from the archives</h2>
                </div>
            </div>
            <ul>
                <?php
                $projects = get_posts(array('post_type' => 'project'));
                foreach ($projects as $post) : setup_postdata($post); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php wp_reset_postdata();
                endforeach; ?>
            </ul>
        </div>
        <?php if (have_rows('client_logos')) : ?>
            <div id="awards" class="row">
                <div class="col-xs-12">
                    <div class="page-heading">
                        <h1>Honors &amp; Awards</h1>
                    </div>
                </div>
                <ul>
                    <?php
                    while (have_rows('honors')) : the_row(); ?>
                        <li><?php the_sub_field('title'); ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endwhile; endif;
get_footer();
