<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section id="detail" class="journal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><i class="glyphicon glyphicon-th"></i></a></li>
                            <li><a href="<?php echo get_permalink(get_next_post()->ID); ?>"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="<?php echo get_permalink(get_previous_post()->ID); ?>"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <article class="row">
                <div class="col-xs-4">
                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                        <span class="date"><?php the_time('m _ d _ y'); ?></span>
                        <h2><?php the_field('subheading'); ?></h2>
                    </div>
                    <?php the_content(); ?>
                    <a href="#">Share</a>
                </div>
                <div class="col-xs-8">
                    <figure>
                        <img class="img-responsive" src="http://placehold.it/1200x800">
                        <figcaption><i>This is where captions for photo would go if necessary.  Two lines max is the rule.</figcaption>
                    </figure>
                    <figure>
                        <img class="img-responsive" src="http://placehold.it/1200x800">
                        <figcaption><i>This is where captions for photo would go if necessary.  Two lines max is the rule.</figcaption>
                    </figure>
                    <figure>
                        <div class="row">
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://placehold.it/1200x800">
                            </div>
                            <div class="col-xs-6">
                                <img class="img-responsive" src="http://placehold.it/1200x800">
                            </div>
                        </div>
                        <figcaption><i>This is where captions for photos could go if necessary. Photos can be placed horizontally or vertically. Video can also be placed here. Two lines max is the rule.</figcaption>
                    </figure>
                </div>
            </article>
        </div>
    </section>
<?php endwhile; endif;
get_footer();
