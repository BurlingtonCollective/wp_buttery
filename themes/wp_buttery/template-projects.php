<?php
/*
 * Template Name: Projects Template
 */
get_header(); ?>
<section id="overview" class="work">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-6">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate cumque in commodi necessitatibus optio ipsam, officia laudantium quis sint architecto nam minus, cum possimus nostrum ducimus vitae laborum beatae nihil!</p>
            </div>
        </div>
        <div class="row">
            {% for project in page.projects %}
            {% if project == 'reg' %}
            <div class="col-xs-6 col-sm-4 col-md-3">
                <article class="preview" style="background-image: url('http://placehold.it/600x850');">
                    <div class="inner">
                        <h1>Title of Project Is Two Lines Max</h1>
                        <p>Description of project in a on-liner Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque dolorum voluptatum nisi cumque possimus, id et natus. Distinctio doloribus est ab maxime, pariatur totam illo tempora incidunt illum harum.</p>
                        <a href="{{ site.baseurl }}/work/detail/" class="btn btn-link btn-block">View Project</a>
                    </div>
                </article>
            </div>
            {% else %}
            <div class="col-xs-12 col-sm-8 col-md-6">
                <article class="preview" style="background-image: url('http://placehold.it/600x850');">
                    <div class="inner">
                        <h1>Title of Project Is Two Lines Max</h1>
                        <p>Description of project in a on-liner Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo atque dolorum voluptatum nisi cumque possimus, id et natus. Distinctio doloribus est ab maxime, pariatur totam illo tempora incidunt illum harum.</p>
                        <a href="{{ site.baseurl }}/work/detail/" class="btn btn-link btn-block">View Project</a>
                    </div>
                </article>
            </div>
            {% endif %}
            {% endfor %}
        </div>
    </div>
</section>
<?php get_footer();