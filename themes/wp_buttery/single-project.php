<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
    $subheading = get_field('subheading'); ?>
    <section id="detail" class="work">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1><?php the_title(); ?></h1>
                        <?php if ($subheading) : ?>
                            <h2><?php echo $subheading; ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <?php the_content(); ?>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <?php
//                    $categories = get_the_term_list( $post->ID, 'styles', '<ul class="nav"><li>', '</li><li>', '</li></ul>' );
//                    if ($categories)
//                        echo $categories; ?>
                    <nav class="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php the_permalink(get_page_by_path('work')->ID); ?>"><i class="glyphicon glyphicon-th"></i></a></li>
                            <li><a href="<?php the_permalink(get_next_post()->ID); ?>"><i class="glyphicon glyphicon-arrow-left"></i></a></li>
                            <li><a href="<?php the_permalink(get_previous_post()->ID); ?>"><i class="glyphicon glyphicon-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container copy">
            <div class="row">
                <div class="col-xs-8">
                    <img class="img-responsive" src="http://placehold.it/1200x900">
                </div>
                <div class="col-xs-4">
                    <img class="img-responsive" src="http://placehold.it/360x563">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <img class="img-responsive" src="http://placehold.it/360x563">
                </div>
                <div class="col-xs-4">
                    <img class="img-responsive" src="http://placehold.it/360x563">
                </div>
                <div class="col-xs-4">
                    <h3>Notes</h3>
                    <h4>Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat ratione consequatur quidem atque ad tenetur tempora, consequuntur explicabo at alias minus nam dolorem mollitia facilis culpa velit ipsum quaerat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <img class="img-responsive" src="http://placehold.it/1200x900">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <h3>Notes</h3>
                    <h4>Description</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat ratione consequatur quidem atque ad tenetur tempora, consequuntur explicabo at alias minus nam dolorem mollitia facilis culpa velit ipsum quaerat.</p>
                </div>
                <div class="col-xs-8">
                    <img class="img-responsive" src="http://placehold.it/1200x900">
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif;
get_footer();
