<?php /* Template Name: About us */ ?>

<?php get_header(); ?>

<section class="section section--bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1-small"><?php echo get_field('abt_header_h1') ?></h1>
                <hr>
                <p class="header__dsc">
                    <?php echo get_field('abt_description_h1') ?>
                </p>
            </div>
            <div class="col-md-6 position-relative header__wrapper">
                <div class="image-cropper">
                    <img src="/wp-content/themes/openapp/img/howitworks.webp" class="header__hero" width="434" height="434" alt="Telefon">
                </div>
                <div class="image-cropper image-cropper--hero-sphere1 levitate3">
                    <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="80" height="80" alt="Bańka">
                </div>
                <div class="image-cropper image-cropper--hero-sphere2 levitate2">
                    <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="164" height="164" alt="Bańka">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--pb-xxl">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-md-6 center position-relative">
                <img src="/wp-content/themes/openapp/img/bubble-or.webp" width="390px" height="390px" alt="Bańka Open Routing">
            </div>
            <div class="col-md-6">
                <h3><?php echo get_field('abt_section_1_header') ?></h3>
                <hr class="hr dark">
                <p><?php echo get_field('abt_section_1_description') ?></p>
            </div>
        </div>
    </div>
</section>


<section class="section section--bg-secondary contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Skontaktuj się z nami</h3>
                <ul>
                    <li>Otrzymaj szczegółowa specyfikację</li>
                    <li>Bądź na bierząco z aktualizacjami produktu</li>
                </ul>
                <div class="image-cropper image-cropper--small image-cropper--bottom">
                    <img src="/wp-content/themes/openapp/img/contact.webp" class="header__hero" width="244" height="244" alt="Kobieta z bańkami mydlanymi">
                </div>
                <div class="image-cropper image-cropper--hero-sphere5 levitate3">
                    <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="164" height="164" alt="Bańka">
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo do_shortcode('[contact-form-7 id="7" title="Skontaktuj się z nami"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
