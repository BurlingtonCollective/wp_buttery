<?php
/*
 * Template Name: Projects Template
 */
get_header();
if ( have_posts() ) : ?>
    <section id="overview" class="work">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>Projects</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                while ( have_posts() ) : the_post();
                    $featured = get_field('featured');
                    $featuredState = $featured ? 'wide' : ''; ?>
                    <div class="col-article <?php echo $featuredState; ?>">
                        <article class="preview" style="background-image: url('http://placehold.it/600x850');">
                            <div class="inner">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_field('excerpt'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-link btn-block">View Project</a>
                            </div>
                        </article>
                    </div>
                    <?php
                endwhile; ?>
            </div>
        </div>
    </section>
<?php endif;
get_footer();