<?php get_header(); ?>

<section class="section section--bg-primary section--main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?php echo get_field('header_h1') ?></h1>
                <hr>
                <p class="header__dsc">
                    <?php echo get_field('description_h1') ?>
                </p>
                <a class="button button--white button--arrow mt-s" href="/jak-to-dziala">Dowiedz się więcej</a>
            </div>
            <div class="col-md-6 position-relative header__wrapper">
                <div class="image-cropper">
                    <img src="/wp-content/themes/openapp/img/hero.webp" class="header__hero" width="434" height="434" alt="Mężczyzna z bańkami mydlanymi">
                </div>
                <div class="image-cropper image-cropper--hero-furniture">
                    <img src="/wp-content/themes/openapp/img/furniture.webp" class="header__hero" width="154" height="154" alt="Mebel">
                </div>
                <div class="image-cropper image-cropper--hero-shoe levitate">
                    <img src="/wp-content/themes/openapp/img/shoe.webp" class="header__hero" width="194" height="194" alt="But">
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

<section class="section section--bg-primary section--pt-none section--pb-xxl">
    <div class="fade__wrapper">
    <div class="container fade__container">
        <div class="row">
            <div class="col d-flex flex-column align-items-center">
                <h2 class="center"><?php echo get_field('section_1_header') ?></h2>
                <hr class="hr mb-xl">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 23H8.72727L5.2402 3.82112C5.19831 3.5907 5.07688 3.3823 4.89708 3.23225C4.71728 3.08219 4.49052 3 4.25633 3H2" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 28C11.3807 28 12.5 26.8807 12.5 25.5C12.5 24.1193 11.3807 23 10 23C8.61929 23 7.5 24.1193 7.5 25.5C7.5 26.8807 8.61929 28 10 28Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23 28C24.3807 28 25.5 26.8807 25.5 25.5C25.5 24.1193 24.3807 23 23 23C21.6193 23 20.5 24.1193 20.5 25.5C20.5 26.8807 21.6193 28 23 28Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.81818 18H23.5127C23.981 18 24.4346 17.8356 24.7942 17.5355C25.1538 17.2354 25.3966 16.8186 25.4804 16.3578L27 8H6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4><?php echo get_field('section_1_subheader_1') ?></h4>
                    <hr class="hr opacity">
                    <p>
                        <?php echo get_field('section_1_description_1') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28 26H4V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26.0005 8L16.0005 18L12.0005 14L4.00049 22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M26.0005 13V8H21.0005" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4><?php echo get_field('section_1_subheader_2') ?></h4>
                    <hr class="hr opacity">
                    <p>
                        <?php echo get_field('section_1_description_2') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 27C16 27 3.5 20 3.5 11.5C3.50025 9.99768 4.02082 8.5418 4.97318 7.3799C5.92555 6.21801 7.25093 5.42181 8.72399 5.12669C10.197 4.83156 11.7269 5.05572 13.0533 5.76105C14.3798 6.46638 15.421 7.60935 16 8.99563L16 8.99565C16.579 7.60936 17.6202 6.46639 18.9467 5.76106C20.2731 5.05572 21.8029 4.83156 23.276 5.12669C24.7491 5.42181 26.0745 6.21801 27.0268 7.3799C27.9792 8.5418 28.4997 9.99768 28.5 11.5C28.5 20 16 27 16 27Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <h4><?php echo get_field('section_1_subheader_3') ?></h4>
                    <hr class="hr opacity">
                    <p>
                        <?php echo get_field('section_1_description_3') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="section section--pb-none-m">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-md-6 center position-relative">
                <div class="image-cropper image-cropper--hero-sphere3">
                    <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="234" height="234" alt="Bańka">
                </div>
                <div class="image-cropper image-cropper--hero-shoe2">
                    <img src="/wp-content/themes/openapp/img/shoe.webp" class="header__hero" width="194" height="194" alt="But">
                </div>
                <img src="/wp-content/themes/openapp/img/mockup1.webp" class="top-200 mb-80-m" width="284" height="540" alt="Ekran telefonu">
            </div>
            <div class="col-md-6">
                <h3>Checkout<br>bez formularzy</h3>
                <hr class="hr dark">
                <p>Dzięki rewolucyjnej metodzie  checkoutu OpenApp zwiększa konwersje o ponad 30%.</p>
                <p>Checkout przestaje być źródłem utraconej sprzedaży.</p>
            </div>
        </div>
    </div>
</section>


<section class="section section--pb-xxl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 center position-relative">
                <img src="/wp-content/themes/openapp/img/mockup1.webp" class="mb-80-m" width="284" height="540" alt="Ekran telefonu">
                <div class="circle"></div>
            </div>
            <div class="col-md-6">
                <h3>Szybkie zwroty</h3>
                <hr class="hr dark">
                <p>Dzięki rewolucyjnej metodzie  checkoutu OpenApp zwiększa konwersje o ponad 30%.</p>
                <p>Checkout przestaje być źródłem utraconej sprzedaży.</p>
            </div>
        </div>
    </div>
</section>


<!--<section class="section section--bg-tertiary">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col d-flex flex-column align-items-center">
                <h2 class="center">5 milionów osób zarabia z nami</h2>
                <hr class="hr dark">
            </div>
        </div>
        <div class="row g-0">
            <div class="col">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">0 dfg dfg dfg <br> fdg dfsg dfg dfsg </li>
                            <li class="glide__slide">1 0 dfg dfg dfg <br> fdg dfsg dfg dfsg </li>
                            <li class="glide__slide">2 0 dfg dfg dfg <br> fdg dfsg dfg dfsg </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col center position-relative">
                <hr class="dark opacity-2 w-100">
                <h2>Chcesz wiedzieć więcej?</h2>
                <div class="image-cropper image-cropper--hero-sphere4">
                    <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="150" height="150" alt="Bańka">
                </div>
                <a href="jak-to-dziala" class="button button--primary mt-m">Zobacz jak to działa</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--bg-photo"></section>

<section class="section section--bg-primary contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Skontaktuj się z nami</h3>
                <ul>
                    <li>Otrzymaj szczegółową specyfikację</li>
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

<script>
    const checkpoint = 300;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= checkpoint) {
            opacity = currentScroll / checkpoint;
        } else {
            opacity = 1;
            document.querySelector(".fade__container").classList.add('fade__container--show');
        }
        document.querySelector(".fade__container").style.opacity = opacity;
    });
</script>

<?php get_footer(); ?>
