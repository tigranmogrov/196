<?php get_header(); ?>
<div class="app" id="app">
    <div class="facility pattern-bg">
        <div class="d-flex">
            <section class="visual-top mask">
                <div class="container">
                    <h2 class="secondary-title z-index text-center">施設紹介</h2>
                </div>
            </section>
        </div>
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumbs__list" id="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="<?= get_site_url(); ?>" class="breadcrumbs__link">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link active">施設紹介</a>
                </li>
            </ul>
        </div>
        <?php
        $terms = get_terms([
            'taxonomy' => 'facility_cat',
            'hide_empty' => false,
            'orderby'       => 'id',
            'order'         => 'DESC',
        ]);
        if ($terms) {
            foreach ($terms as $term) {
                ?>
                <section class="primary-inner-offset" id="estate-<?= $term->term_id; ?>">
                    <div class="container">
                        <h2 class="third-title text-green text-center line-img"><?= $term->name; ?></h2>
                        <?php
                        $query = new WP_Query([
                            'post_type' => 'facility',
                            'posts_per_page' => -1,
                            'tax_query' => [
                                'relation' => 'AND',
                                [
                                    'taxonomy' => 'facility_cat',
                                    'field' => 'id',
                                    'terms' => $term->term_id
                                ]
                            ]
                        ]);
                        if ($query->have_posts()) { ?>
                            <div class="cards">
                                <ul class="cards__list">
                                    <?php
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $title = get_the_title();
                                        $img = get_the_post_thumbnail_url();
                                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                        $location_1 = get_field('location_1');
                                        $location_2 = get_field('location_2');
                                        $service = get_field('service');
                                        $phone = get_field('phone');
                                        $site_url = get_field('site_url');
                                        ?>
                                        <li class="cards__item">
                                            <div class="cards__item-inner">
                                                <?php if ($title) { ?>
                                                    <div class="cards__item-top">
                                                        <h3 class="subtitle"><?= $title; ?></h3>
                                                    </div>
                                                <?php } ?>
                                                <div class="cards__item-bottom">
                                                    <?php if ($img) { ?>
                                                        <div class="cards__image-wrap">
                                                            <div class="cards__image">
                                                                <img class="lazy"
                                                                     data-src="<?= $img; ?>"
                                                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                                                     alt="<?= $alt; ?>">
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <div class="cards__item-info">
                                                        <?php if ($location_1 or $location_2) { ?>
                                                            <div class="cards__item-content third-top-offset">
                                                                <div class="cards__item-left">
	                                                            <span class="cards__icon">
<svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 0C5.143 0 3.363.773 2.05 2.148.737 3.523 0 5.388 0 7.333 0 13.667 7 20 7 20s7-6.333 7-12.667c0-1.945-.738-3.81-2.05-5.185C10.637.773 8.857 0 7 0zm-.2 10.178c1.61 0 2.915-1.367 2.915-3.054 0-1.686-1.305-3.053-2.914-3.053-1.61 0-2.915 1.367-2.915 3.053 0 1.687 1.305 3.054 2.915 3.054z" fill="#fff"/></svg>
	</span>
                                                                    <span class="fourth-title">所在地</span>
                                                                </div>
                                                                <div class="cards__item-right">
                                                                    <p class="text"><?= $location_1; ?>
                                                                        <br><?= $location_2; ?></p>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        if ($service) {
                                                            ?>
                                                            <div class="cards__item-content third-top-offset">
                                                                <div class="cards__item-left">
	                                                            <span class="cards__icon">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.432.173l9.25 8.866a1.043 1.043 0 01-.724 1.793H17.5v7.5c0 .92-.746 1.667-1.667 1.667H13V17H7v2.999H4.167c-.921 0-1.667-.746-1.667-1.667v-7.5H1.042a1.043 1.043 0 01-.734-1.783L9.568.173a.625.625 0 01.864 0z" fill="#fff"/></svg>

	</span>
                                                                    <span class="fourth-title">サービス</span>
                                                                </div>
                                                                <div class="cards__item-right">
                                                                    <p class="text text-pink"><?= $service; ?></p>
                                                                </div>
                                                            </div>
                                                        <?php }
                                                        if ($phone or $site_url) {
                                                            ?>
                                                            <div class="cards__item-content third-top-offset">
                                                                <?php if ($phone) { ?>
                                                                    <div class="cards__item-left">
	                                                            <span class="cards__icon">
<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.605 2.923c3.201.032 5.207-.172 5.477 3.458h3.904C18.986.758 14.192 0 9.503 0 4.813 0 .019.758.019 6.38h3.874c.3-3.698 2.537-3.489 5.712-3.457zM1.955 8.188c.951 0 1.742.058 1.918-.898.024-.13.038-.278.038-.448H0c0 1.423.875 1.346 1.955 1.346zM15.107 6.842h-.036c0 .171.014.32.041.448.186.882.976.827 1.923.827C18.12 8.117 19 8.19 19 6.842h-3.893z" fill="#fff"/><path d="M13.2 5.873v-.566c0-.253-.285-.269-.636-.269h-.575c-.352 0-.637.016-.637.27v.864H7.287v-.865c0-.253-.285-.269-.636-.269h-.575c-.352 0-.636.016-.636.27V6.365c-.927.985-3.957 5.175-4.067 5.682l.001 3.385c0 .313.25.567.555.567H16.71a.561.561 0 00.554-.567v-3.402c-.109-.492-3.138-4.68-4.065-5.665v-.493zm-6.113 6.63a.545.545 0 01-.539-.55c0-.305.242-.552.539-.552.298 0 .539.247.539.551a.545.545 0 01-.539.552zm0-1.89a.545.545 0 01-.539-.55c0-.305.242-.552.539-.552.298 0 .539.247.539.551a.545.545 0 01-.539.552zm0-1.89a.545.545 0 01-.539-.55c0-.305.242-.551.539-.551.298 0 .539.246.539.55a.545.545 0 01-.539.552zm2.217 3.78a.545.545 0 01-.538-.55c0-.305.24-.552.538-.552.298 0 .54.247.54.551 0 .305-.242.552-.54.552zm0-1.89a.545.545 0 01-.538-.55c0-.305.24-.552.538-.552.298 0 .54.247.54.551 0 .305-.242.552-.54.552zm0-1.89a.545.545 0 01-.538-.55c0-.305.24-.551.538-.551.298 0 .54.246.54.55 0 .305-.242.552-.54.552zm2.218 3.78a.545.545 0 01-.54-.55c0-.305.242-.552.54-.552.297 0 .538.247.538.551a.545.545 0 01-.538.552zm0-1.89a.545.545 0 01-.54-.55c0-.305.242-.552.54-.552.297 0 .538.247.538.551a.545.545 0 01-.538.552zm0-1.89a.545.545 0 01-.54-.55c0-.305.242-.551.54-.551.297 0 .538.246.538.55a.545.545 0 01-.538.552z" fill="#fff"/></svg>


	</span>
                                                                        <span class="fourth-title">連絡先</span>
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="cards__item-right">
                                                                    <?php if ($phone) { ?>
                                                                        <a href="tel:0478-50-3061"
                                                                           class="cards__link-tel text text-white"><?= $phone; ?></a>
                                                                    <?php }
                                                                    if ($site_url) {
                                                                        ?>
                                                                        <a href="<?= $site_url; ?>"
                                                                           target="_blank"
                                                                           class="text cards__link">
                                                                            <?= str_replace('http://','',$site_url); ?>
                                                                        </a>
                                                                        <?php
                                                                        $instagram_button=get_field('instagram_button');
                                                                        $instagram_url=get_field('instagram_url');
                                                                        if($instagram_button===true && $instagram_url){
                                                                        ?>
                                                                        <a href="<?= $instagram_url; ?>" class="social-btn">
                                                                            <span class="social-btn__icon">
                                                                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)" fill="#fff"><path d="M14.985 4.41c-.035-.797-.164-1.345-.348-1.82a3.661 3.661 0 00-.868-1.33 3.692 3.692 0 00-1.327-.864c-.478-.185-1.023-.314-1.82-.35C9.82.01 9.564 0 7.528 0 5.49 0 5.236.009 4.436.044c-.797.035-1.345.164-1.82.349a3.66 3.66 0 00-1.33.867c-.38.375-.676.83-.864 1.327-.185.478-.314 1.023-.349 1.82C.035 5.21.026 5.465.026 7.501c0 2.037.01 2.292.044 3.092.035.797.164 1.345.35 1.82.19.504.485.955.866 1.33.375.38.83.677 1.328.864.477.185 1.022.314 1.82.349.8.035 1.054.044 3.091.044s2.291-.009 3.091-.044c.797-.035 1.345-.164 1.82-.349a3.836 3.836 0 002.195-2.194c.184-.478.313-1.023.348-1.82.036-.8.045-1.055.045-3.092 0-2.036-.003-2.291-.039-3.091zm-1.35 6.124c-.033.733-.156 1.128-.258 1.392a2.488 2.488 0 01-1.425 1.424c-.263.103-.662.226-1.391.258-.792.035-1.029.044-3.03.044-2.002 0-2.242-.009-3.03-.044-.733-.032-1.128-.155-1.392-.258a2.308 2.308 0 01-.861-.56 2.333 2.333 0 01-.56-.86c-.103-.265-.226-.663-.258-1.393-.035-.79-.044-1.028-.044-3.03 0-2.001.009-2.241.044-3.03.032-.732.155-1.128.258-1.391.12-.326.31-.622.563-.862.243-.25.536-.44.861-.56.264-.102.662-.225 1.392-.257.791-.036 1.028-.044 3.03-.044 2.004 0 2.241.008 3.03.044.732.032 1.128.155 1.392.257.325.12.62.311.86.56.25.243.44.536.56.862.103.263.226.662.259 1.391.035.792.043 1.029.043 3.03 0 2.002-.008 2.236-.043 3.027z"/><path d="M7.528 3.648a3.854 3.854 0 000 7.707 3.854 3.854 0 000-7.707zm0 6.353a2.5 2.5 0 110-5 2.5 2.5 0 010 5zM12.433 3.496a.9.9 0 11-1.8 0 .9.9 0 011.8 0z"/></g><defs><clipPath id="clip0"><path fill="#fff" d="M0 0h15v15H0z"/></clipPath></defs>
                                                                                </svg>
                                                                            </span>
                                                                            <span class="social-btn__inner">
                                                                                インスタグラムを見る
                                                                            </span>
                                                                        </a>
                                                                    <?php }
                                                                    }?>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            <?php }
        } ?>
    </div>
</div>
<?php get_footer(); ?>
