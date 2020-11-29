<?php
/*
Template Name: Topic Template
*/
get_header();
?>
<div class="app" id="app">
    <div class="topic">
        <div class="d-flex">
            <section class="visual-top mask">
                <div class="container">
                    <h2 class="secondary-title text-center z-index">お知らせ</h2>
                </div>
            </section>
        </div>
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumbs__list" id="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="<?= get_site_url(); ?>" class="breadcrumbs__link">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link active">お知らせ</a>
                </li>
            </ul>
        </div>
        <div class="primary-inner-offset">
            <div class="container">

                <h2 class="subtitle text-center text-gold">お知らせ一覧</h2>
                <div class="notice third-top-offset">
                    <?php if (have_posts()) { ?>
                        <ul class="notice__list">
                            <?php while (have_posts()) {
                                the_post();
                                $news_date = get_the_date('Y.n.j');
                                $news_title = get_the_title();
                                $news_url = get_field('post_stie_url');
                                ?>
                                <li class="notice__item">
                                    <?php if ($news_date) { ?>
                                        <div class="notice__item-date">
                                            <p class="text text-green"><?= $news_date; ?></p>
                                        </div>
                                    <?php }
                                    if ($news_title or $news_url) {
                                        ?>
                                        <div class="notice__item-info">
                                            <a href="<?= $news_url; ?>"
                                               class="notice__item-info-link text"><?= $news_title; ?></a>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php }
                    $args = array(
                        'show_all' => false, // показаны все страницы участвующие в пагинации
                        'end_size' => 1,     // количество страниц на концах
                        'mid_size' => 1,     // количество страниц вокруг текущей
                        'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text' => __('<'),
                        'next_text' => __('>'),
                        'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        'screen_reader_text' => __(' '),
                    );

                    the_posts_pagination($args);

                    ?>
                    <div class="btn__wrap">
                        <a href="<?= get_site_url(); ?>/form"  data-anchor="form__wrap" class="btn gold-bg">

                            <span class="btn__inner">
							お問い合わせ
				</span>
                        </a>
                        <a href="tel:0474578511" class="btn gold-bg">

                            <span class="btn__inner">
							047-457-8511
				</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
