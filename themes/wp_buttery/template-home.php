<?php
/*
 * Template Name: Home Template
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
    $featured = get_field('featured_projects'); ?>
    <section id="home">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-xs-offset-6">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="row">
            <?php
            if ($featured) : foreach ($featured as $post) : setup_postdata($post);
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
                <?php wp_reset_postdata();
            endforeach; endif; ?>
        </div>
      </div>
    </section>
    <?php
endwhile; endif;
get_footer();
