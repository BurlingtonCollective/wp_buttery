<?php
/*
 * Template Name: Contact Template
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
    $quickContacts = get_field('quick_contact_blocks');
    $detailContacts = get_field('contact_detail_blocks'); ?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <p class="lead"><?php the_content(); ?></p>
                </div>
                <div class="col-xs-6">
                    <p>
                        <b style="display: block">General Inquires</b>
                        <a href="mailto:info@butteryagency.com">info@butteryagency.com</a>
                    </p>
                    <?php
                    if ($quickContacts) : foreach($quickContacts as $contact) :
                        $post = $contact;
                        setup_postdata($contact); ?>
                        <p>
                            <b style="display: block;"><?php the_field('state'); ?></b>
                            <a href="tel:+9782739384"><?php the_field('phone'); ?></a>
                        </p>
                    <?php wp_reset_postdata();
                    endforeach; endif; ?>
                </div>
            </div>
            <?php
            if ($quickContacts) : foreach($quickContacts as $contact) :
                $post = $contact;
                setup_postdata($contact); ?>
                <div class="row">
                    <div class="col-xs-4">
                        <div class="page-header">
                            <h1><?php the_title(); ?></h1>
                            <h2><?php the_field('state'); ?></h2>
                        </div>
                        <p><?php the_field('description'); ?></p>
                    </div>
                    <div class="col-xs-8">
                        <img class="img-responsive" src="http://placehold.it/1200x600">
                    </div>
                </div>
                <?php wp_reset_postdata();
            endforeach; endif; ?>
        </div>
    </section>
<?php endwhile; endif;
get_footer();
