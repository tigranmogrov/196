<?php get_header(); ?>
    <div class="app" id="app">
        <div class="not-found">
            <div class="image__wrap">
                <div class="image">
                    <img src="<?= get_template_directory_uri(); ?>/html/public/images//404.png" alt="image description">
                </div>
            </div>
            <div class="not-found__content">
                <h1 class="not-found__title">404</h1>
                <p class="not-found__text">page not found</p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
