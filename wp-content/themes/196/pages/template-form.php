<?php
/*
Template Name: Form Template
*/
get_header(); ?>
<div class="app" id="app">
    <div class="contacts">
        <div class="d-flex">
            <section class="visual-top mask">
                <div class="container">
                    <h2 class="secondary-title text-center z-index">見学・お問い合わせ・<br class="xmb">資料請求</h2>
                </div>
            </section>
        </div>
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumbs__list" id="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="<?= get_site_url(); ?>" class="breadcrumbs__link">Home</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="#" class="breadcrumbs__link active">見学・お問い合わせ・資料請求</a>
                </li>
            </ul>
        </div>
        <div class="primary-inner-offset">
            <div class="container">
                <h2 class="third-title text-green text-center">
                    お問い合わせ・<br class="xmb">資料請求フォーム
                </h2>
                <p class="text primary-top-offset text-center">
                    インターネットからのお問い合せは、下記のフォームから常時お問い合わせいただけます。 <br>
                    スタッフが内容を確認の上、返信を差し上げますのでお待ちください。 <br>
                    必須項目に誤りがありますと、当ホームからの返信が届きませんので、 <br>
                    連絡に必要な必須項目はお間違いがないようにお願い致します。
                </p>
                <p class="text text-center secondary-top-offset">
                    ※お問い合わせの内容によっては、回答できない場合もございます。その際は、何卒ご容赦願いします。</p>
                <div class="form__wrap pattern-bg" id="form__wrap">
                    <?= do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
