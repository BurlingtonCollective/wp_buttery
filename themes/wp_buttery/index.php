<?php
get_header();
if ( have_posts() ) : ?>
<section id="overview" class="journal">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h1>Journal</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
                        </a>
                        <span class="date"><?php the_time('m _ d _ y'); ?></span>
                        <h1><?php the_title(); ?></h1>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-link btn-block">Read More</a>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif;
get_footer();

