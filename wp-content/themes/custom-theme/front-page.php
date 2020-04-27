<?php get_header(); ?>

<section class="hero">
    <div class="hero__page">
        <div class="hero__bg" style="background-image: url(<?php echo get_theme_file_uri('img/hero.png'); ?>);"></div>
        <div class="hero__content text-center">
            <h1 class="headline headline--large">Welcome!</h1>
            <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        </div>
    </div>
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h3 class="text-center">Upcoming Events</h3>
            </div>
            <div class="col-6">
                <h3 class="text-center">From Our Blogs</h3>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>