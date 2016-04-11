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
            {% for post in page.posts %}
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="post">
                    <a href="{{ site.baseurl }}/journal/detail/">
                        <img class="img-responsive" src="http://placehold.it/703x859">
                    </a>
                    <span class="date">01 _ 02 _ 15</span>
                    <h1>The Greatest Beer Week In History</h1>
                    <p>Have you ever had 24 5-star rated craft beers in less than three days? We have. Check out our visual/verbal diary of 3 hazy spring days.</p>
                    <a href="{{ site.baseurl }}/journal/detail/" class="btn btn-link btn-block">Read More</a>
                </article>
            </div>
            {% endfor %}
        </div>
    </div>
</section>