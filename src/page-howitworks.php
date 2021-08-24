<?php /* Template Name: How it works */ ?>

<?php get_header(); ?>

<section class="section section--bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1-small"><?php echo get_field('hiw_header_h1') ?></h1>
                <hr>
                <p class="header__dsc">
                    <?php echo get_field('hiw_description_h1') ?>
                </p>
                <a class="button button--white button--download mt-s">Pobierz specyfikację</a>
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


<section class="section section--pb-xxl position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="item">
                    <svg width="28" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 2a2 2 0 012-2h24a2 2 0 012 2v16a2 2 0 01-2 2H2a2 2 0 01-2-2V2zm26 0H2v16h24V2z" fill="#333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M17.999 15a1 1 0 011-1h4a1 1 0 110 2h-4a1 1 0 01-1-1zM11.999 15a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1zM-.001 6.106a1 1 0 011-1h26a1 1 0 110 2h-26a1 1 0 01-1-1z" fill="#333"/></svg>
                    <h4><?php echo get_field('hiw_section_1_subheader_1') ?></h4>
                    <hr class="hr dark opacity-2">
                    <p>
                        <?php echo get_field('hiw_section_1_description_1') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <svg width="24" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M-.001 11a2 2 0 012-2h20a2 2 0 012 2v14a2 2 0 01-2 2h-20a2 2 0 01-2-2V11zm22 0h-20v14h20V11z" fill="#333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M11.999 2a3.5 3.5 0 00-3.5 3.5V10a1 1 0 11-2 0V5.5a5.5 5.5 0 0111 0V10a1 1 0 11-2 0V5.5a3.5 3.5 0 00-3.5-3.5z" fill="#333"/></svg>
                    <h4><?php echo get_field('hiw_section_1_subheader_2') ?></h4>
                    <hr class="hr dark opacity-2">
                    <p>
                        <?php echo get_field('hiw_section_1_description_2') ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="item">
                    <svg width="26" height="30" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.02.257a2 2 0 011.96 0l11 6.187A2 2 0 0126 8.188v12.33a2 2 0 01-1.02 1.743l-11 6.188a2 2 0 01-1.96 0l-11-6.188A2 2 0 010 20.518V8.188a2 2 0 011.02-1.744l11-6.187zM13 2L2 8.188v12.33l11 6.187 11-6.187V8.188L13 2z" fill="#333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.124 3.745a1 1 0 011.359-.393l12.128 6.689a1 1 0 01.517.876v6.5a1 1 0 11-2 0v-5.91L6.517 5.103a1 1 0 01-.393-1.358z" fill="#333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M.265 7.193a1 1 0 011.36-.387l11.489 6.4 11.254-6.394a1 1 0 11.988 1.739l-11.743 6.671a1 1 0 01-.98.004L.651 8.553a1 1 0 01-.387-1.36z" fill="#333"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.128 13.353a1 1 0 01.99 1.008l-.117 13.353a1 1 0 11-2-.018l.118-13.352a1 1 0 011.009-.991z" fill="#333"/></svg>
                    <h4><?php echo get_field('hiw_section_1_subheader_3') ?></h4>
                    <hr class="hr dark opacity-2">
                    <p>
                        <?php echo get_field('hiw_section_1_description_3') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="image-cropper image-cropper--hero-sphere6">
        <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="164" height="164" alt="Bańka">
    </div>
    <svg class="inpost" width="120px" height="72px" viewBox="0 0 120 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <polygon id="path-1" points="0.127359263 0.0147272721 9.81962498 0.0147272721 9.81962498 14.0057189 0.127359263 14.0057189"></polygon>
            <polygon id="path-3" points="0.127359263 0.189981826 9.81962498 0.189981826 9.81962498 14.1818189 0.127359263 14.1818189"></polygon>
            <polygon id="path-5" points="0 71.9852746 119.79075 71.9852746 119.79075 0.272727281 0 0.272727281"></polygon>
        </defs>
        <g id="InPost-www" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="strona-glowna" transform="translate(-154.000000, -11.000000)">
                <g id="header">
                    <g id="logo" transform="translate(154.000000, 11.000000)">
                        <g>
                            <path d="M51.7019585,56.7168805 C51.2164665,56.3186987 50.9775649,55.783335 50.9775649,55.1096987 C50.9775649,54.428426 51.2164665,53.8925169 51.7019585,53.4943351 C52.1877251,53.096426 52.842645,52.8976078 53.6672674,52.8976078 C54.4918899,52.8976078 55.1393956,53.096426 55.6251622,53.4943351 C56.1103796,53.8925169 56.3572445,54.428426 56.3572445,55.1096987 C56.3572445,55.783335 56.1103796,56.3186987 55.6251622,56.7168805 C55.1393956,57.1150623 54.4918899,57.3141532 53.6672674,57.3141532 C52.842645,57.3141532 52.1877251,57.1150623 51.7019585,56.7168805 M55.0929882,55.1096987 C55.0929882,54.3673351 54.5380225,53.8925169 53.6672674,53.8925169 C52.7965123,53.8925169 52.2415466,54.3673351 52.2415466,55.1096987 C52.2415466,55.8517896 52.7965123,56.3186987 53.6672674,56.3186987 C54.5380225,56.3186987 55.0929882,55.8517896 55.0929882,55.1096987" id="Fill-1" fill="#424143"></path>
                            <path d="M61.0140708,53.0044384 L62.2470228,53.0044384 L62.2470228,57.2066201 L61.0451006,57.2066201 L61.0451006,56.5561656 C60.7597917,57.0230747 60.1894484,57.3143474 59.4494026,57.3143474 C58.8098603,57.3143474 58.3400205,57.1534383 57.9775491,56.8084383 C57.5999747,56.4418929 57.4456497,55.951802 57.4456497,55.0556202 L57.4456497,53.0044384 L58.6865651,53.0044384 L58.6865651,55.0869838 C58.6865651,55.6070747 58.8021715,55.9136201 59.0564507,56.089802 C59.2720113,56.2198929 59.457366,56.2730747 59.7577779,56.2730747 C60.3127436,56.2730747 60.7444141,55.9899838 60.9292196,55.5230747 C60.9833157,55.3932565 61.0140708,55.2091656 61.0140708,54.9874384 L61.0140708,53.0044384 Z" id="Fill-3" fill="#424143"></path>
                            <path d="M66.8247888,56.2119286 L66.8247888,57.2068377 L65.2760474,57.2068377 C64.4203952,57.2068377 64.0658872,56.8700195 64.0658872,56.0736558 L64.0658872,53.9842922 L63.2797087,53.9842922 L63.2797087,53.0043831 L64.0658872,53.0043831 L64.0658872,51.8796558 L65.3068025,51.8796558 L65.3068025,53.0043831 L66.8247888,53.0043831 L66.8247888,53.9842922 L65.3068025,53.9842922 L65.3068025,55.798474 C65.3068025,56.1121104 65.4147201,56.2119286 65.7920199,56.2119286 L66.8247888,56.2119286 Z" id="Fill-5" fill="#424143"></path>
                            <path d="M70.8495118,56.7168805 C70.3642944,56.3186987 70.1251182,55.783335 70.1251182,55.1096987 C70.1251182,54.428426 70.3642944,53.8925169 70.8495118,53.4943351 C71.3352784,53.096426 71.9901983,52.8976078 72.8148207,52.8976078 C73.6394431,52.8976078 74.2869488,53.096426 74.7724408,53.4943351 C75.2582074,53.8925169 75.5047978,54.428426 75.5047978,55.1096987 C75.5047978,55.783335 75.2582074,56.3186987 74.7724408,56.7168805 C74.2869488,57.1150623 73.6394431,57.3141532 72.8148207,57.3141532 C71.9901983,57.3141532 71.3352784,57.1150623 70.8495118,56.7168805 M74.2408161,55.1096987 C74.2408161,54.3673351 73.6855758,53.8925169 72.8148207,53.8925169 C71.9440655,53.8925169 71.3893745,54.3673351 71.3893745,55.1096987 C71.3893745,55.8517896 71.9440655,56.3186987 72.8148207,56.3186987 C73.6855758,56.3186987 74.2408161,55.8517896 74.2408161,55.1096987" id="Fill-7" fill="#424143"></path>
                            <path d="M79.4107848,52.4310283 L78.6328443,52.4310283 C78.3165056,52.4310283 78.1932104,52.5147556 78.1932104,52.7364828 L78.1932104,53.0045737 L79.4107848,53.0045737 L79.4107848,53.9842101 L78.1932104,53.9842101 L78.1932104,57.2070283 L76.9528443,57.2070283 L76.9528443,53.9842101 L76.2589312,53.9842101 L76.2589312,53.0045737 L76.9528443,53.0045737 L76.9528443,52.683301 C76.9528443,51.864301 77.484469,51.4816647 78.5710594,51.4816647 L79.4107848,51.4816647 L79.4107848,52.4310283 Z" id="Fill-9" fill="#424143"></path>
                            <path d="M86.110297,56.2119286 L86.110297,57.2068377 L84.5615555,57.2068377 C83.7059034,57.2068377 83.3513953,56.8700195 83.3513953,56.0736558 L83.3513953,53.9842922 L82.5652168,53.9842922 L82.5652168,53.0043831 L83.3513953,53.0043831 L83.3513953,51.8796558 L84.5920361,51.8796558 L84.5920361,53.0043831 L86.110297,53.0043831 L86.110297,53.9842922 L84.5920361,53.9842922 L84.5920361,55.798474 C84.5920361,56.1121104 84.6999537,56.2119286 85.0775281,56.2119286 L86.110297,56.2119286 Z" id="Fill-11" fill="#424143"></path>
                            <path d="M87.3345986,57.2066735 L87.3345986,51.4813099 L88.575514,51.4813099 L88.575514,53.6020372 C88.8910288,53.1659462 89.4767497,52.8975826 90.1937291,52.8975826 C90.8102051,52.8975826 91.2956971,53.0658553 91.6655827,53.4026735 C92.0431571,53.7624008 92.2048962,54.2674917 92.2048962,55.1554917 L92.2048962,57.2066735 L90.9645301,57.2066735 L90.9645301,55.125219 C90.9645301,54.6427644 90.8563378,54.3517644 90.6174362,54.1684917 C90.4246673,54.0154917 90.1624248,53.9388553 89.8773904,53.9388553 C89.2919442,53.9388553 88.8295185,54.2293099 88.6524018,54.6959462 C88.5983057,54.8421281 88.575514,55.0174917 88.575514,55.2321281 L88.575514,57.2066735 L87.3345986,57.2066735 Z" id="Fill-13" fill="#424143"></path>
                            <path d="M94.0219243,56.7320732 C93.5443957,56.3418005 93.3054941,55.8064368 93.3054941,55.117255 C93.3054941,54.4668005 93.5518099,53.9308913 94.0526794,53.5174368 C94.5538236,53.104255 95.1936405,52.8975277 95.9869585,52.8975277 C96.7657228,52.8975277 97.3898876,53.0810732 97.8676908,53.4489823 C98.3531827,53.8160732 98.5920843,54.2908914 98.5920843,54.8649823 C98.5920843,54.9184368 98.5920843,54.9639823 98.5841209,55.0177096 C98.5841209,55.0717096 98.5767068,55.1857096 98.569018,55.3771641 L94.5768899,55.3771641 C94.6617412,55.9668005 95.2397732,56.3115278 96.1415581,56.3115278 C96.7890638,56.3115278 97.4280569,56.1048005 97.821558,55.768255 L98.4841667,56.5103459 C98.0294299,57.0080732 97.0968899,57.314346 96.0256771,57.314346 C95.1702995,57.314346 94.5076909,57.1231641 94.0219243,56.7320732 M94.6156085,54.604255 L97.2822446,54.604255 C97.1973934,54.1223459 96.7195902,53.8239823 96.0023362,53.8239823 C95.2705284,53.8239823 94.7465925,54.1141641 94.6156085,54.604255" id="Fill-15" fill="#424143"></path>
                            <path d="M102.155862,57.2066735 L102.155862,51.4813099 L103.396503,51.4813099 L103.396503,53.5024917 C103.805107,53.1043099 104.390828,52.8975826 105.068539,52.8975826 C105.785244,52.8975826 106.363276,53.1043099 106.818013,53.5095826 C107.272475,53.9159463 107.496274,54.4510372 107.496274,55.110219 C107.496274,55.7601281 107.272475,56.2965826 106.818013,56.7015826 C106.363276,57.1079463 105.785244,57.3146735 105.068539,57.3146735 C104.367487,57.3146735 103.766663,57.0918554 103.365473,56.6936735 L103.365473,57.2066735 L102.155862,57.2066735 Z M106.232292,55.110219 C106.232292,54.3825826 105.669913,53.9006735 104.837876,53.9006735 C103.974535,53.9006735 103.396503,54.3825826 103.396503,55.110219 C103.396503,55.8370372 103.974535,56.3115826 104.837876,56.3115826 C105.677601,56.3115826 106.232292,55.8370372 106.232292,55.110219 L106.232292,55.110219 Z" id="Fill-17" fill="#424143"></path>
                            <path d="M109.153866,56.7168805 C108.668374,56.3186987 108.429473,55.783335 108.429473,55.1096987 C108.429473,54.428426 108.668374,53.8925169 109.153866,53.4943351 C109.639633,53.096426 110.294553,52.8976078 111.118901,52.8976078 C111.943798,52.8976078 112.591303,53.096426 113.076795,53.4943351 C113.562287,53.8925169 113.808878,54.428426 113.808878,55.1096987 C113.808878,55.783335 113.562287,56.3186987 113.076795,56.7168805 C112.591303,57.1150623 111.943798,57.3141532 111.118901,57.3141532 C110.294553,57.3141532 109.639633,57.1150623 109.153866,56.7168805 M112.545171,55.1096987 C112.545171,54.3673351 111.98993,53.8925169 111.118901,53.8925169 C110.24842,53.8925169 109.693729,54.3673351 109.693729,55.1096987 C109.693729,55.8517896 110.24842,56.3186987 111.118901,56.3186987 C111.98993,56.3186987 112.545171,55.8517896 112.545171,55.1096987" id="Fill-19" fill="#424143"></path>
                            <polygon id="Fill-21" fill="#424143" points="119.790722 57.2066735 118.141477 57.2066735 116.946969 55.8449463 115.744498 57.2066735 114.203171 57.2066735 116.191546 55.0870372 114.241615 53.0047646 115.867518 53.0047646 117.016168 54.2824918 118.156855 53.0047646 119.698457 53.0047646 117.771592 55.0406736"></polygon>
                            <path d="M63.8316789,46.0413809 L60.5186356,46.0413809 L60.5186356,36.5853808 C60.5186356,34.5941989 59.6346998,33.5223807 58.0293909,33.3988353 C57.0287502,33.3213807 55.442938,33.5559262 54.2920913,33.8122898 L54.2920913,46.0413809 L50.977675,46.0413809 L50.977675,31.4703807 C50.977675,31.4703807 55.0076977,30.5782898 58.6475145,30.5810108 C60.2217936,30.5826534 61.4800086,31.1384716 62.4196882,32.0747443 C63.3604662,33.0107444 63.8316789,34.3149262 63.8316789,35.9870171 L63.8316789,46.0413809 Z" id="Fill-23" fill="#424143"></path>
                            <path d="M119.719389,46.1417711 C119.174858,46.2794983 118.608909,46.3482256 118.023737,46.3482256 C116.15646,46.3482256 114.922684,45.9355892 114.321861,45.1105893 C113.842135,44.4620438 113.603234,43.232862 113.603234,41.4235894 L113.603234,26.2591352 L116.873714,26.2591352 L116.873714,30.547226 L119.77733,30.547226 L119.77733,33.2005896 L116.873714,33.2005896 L116.873714,41.2171348 C116.873714,42.0827712 116.984378,42.6535893 117.206529,42.9290439 C117.468497,43.281953 118.023737,43.4586802 118.872524,43.4586802 C119.114721,43.4586802 119.396735,43.4395893 119.719389,43.4000439 L119.719389,46.1417711 Z" id="Fill-25" fill="#424143"></path>
                            <path d="M17.332778,36.1712445 C17.332778,36.1712445 13.4532357,37.6608809 8.66641648,37.6608809 C3.88014645,37.6608809 5.49199062e-05,36.1712445 5.49199062e-05,36.1712445 C5.49199062e-05,36.1712445 3.88014645,34.681881 8.66641648,34.681881 C13.4532357,34.681881 17.332778,36.1712445 17.332778,36.1712445" id="Fill-27" fill="#FFCB04"></path>
                            <g id="Group-31" transform="translate(19.496568, 0.258000)">
                                <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                </mask>
                                <g id="Clip-30"></g>
                                <path d="M9.81962498,14.0057182 C9.81962498,14.0057182 6.38191321,11.7063546 3.7051168,7.84290002 C1.02914418,3.97944546 0.127359263,0.0145363631 0.127359263,0.0145363631 C0.127359263,0.0145363631 3.56479643,2.3139 6.24186744,6.17708183 C8.91811466,10.0410818 9.81962498,14.0057182 9.81962498,14.0057182" id="Fill-29" fill="#FFCB04" mask="url(#mask-2)"></path>
                            </g>
                            <path d="M20.5391943,23.7168825 C20.5391943,23.7168825 16.3954873,23.2584279 12.1694005,21.0700643 C7.9433136,18.8825188 5.23576217,15.7938824 5.23576217,15.7938824 C5.23576217,15.7938824 9.37946917,16.2523369 13.605556,18.4404279 C17.8316429,20.6282461 20.5391943,23.7168825 20.5391943,23.7168825" id="Fill-32" fill="#FFCB04"></path>
                            <path d="M28.901355,43.3436735 C31.3612177,43.3204916 34.3279912,41.3966734 34.3279912,41.3966734 C34.3279912,41.3966734 27.4487234,39.3288552 27.8817668,33.2006733 C29.2382886,23.1433094 37.4370072,15.2473093 47.7007144,13.9766729 C46.6122018,13.8274911 45.5006228,13.7494911 44.3687235,13.7541819 C31.6739866,13.8100365 21.4286775,23.8769458 21.4855566,36.2383097 C21.5426364,48.5991281 31.88076,58.5746738 44.5757716,58.519269 C45.6346274,58.5146738 46.6745359,58.4342192 47.6946732,58.2945828 C38.6867097,57.1766737 31.3549019,50.99231 28.7247875,42.8192189" id="Fill-34" fill="#FFCB04"></path>
                            <g id="Group-38" transform="translate(19.496568, 57.803455)">
                                <mask id="mask-4" fill="white">
                                    <use xlink:href="#path-3"></use>
                                </mask>
                                <g id="Clip-37"></g>
                                <path d="M9.81962498,0.189981826 C9.81962498,0.189981826 6.38191321,2.48961821 3.7051168,6.35361823 C1.02914418,10.2165274 0.127359263,14.1819819 0.127359263,14.1819819 C0.127359263,14.1819819 3.56479643,11.8823455 6.24186744,8.01889097 C8.91811466,4.1554364 9.81962498,0.189981826 9.81962498,0.189981826" id="Fill-36" fill="#FFCB04" mask="url(#mask-4)"></path>
                            </g>
                            <path d="M20.5391943,48.5409279 C20.5391943,48.5409279 16.3954873,48.9993825 12.1694005,51.1877462 C7.9433136,53.375019 5.23576217,56.4636555 5.23576217,56.4636555 C5.23576217,56.4636555 9.37946917,56.0052009 13.605556,53.8173826 C17.8316429,51.6292916 20.5391943,48.5409279 20.5391943,48.5409279" id="Fill-39" fill="#FFCB04"></path>
                            <mask id="mask-6" fill="white">
                                <use xlink:href="#path-5"></use>
                            </mask>
                            <g id="Clip-42"></g>
                            <polygon id="Fill-41" fill="#424143" mask="url(#mask-6)" points="44.3220143 46.0251832 47.7006872 46.0251832 47.7006872 26.2429104 44.3220143 26.2429104"></polygon>
                            <path d="M78.1958434,33.0033259 C78.1958434,30.6049623 77.0142416,29.4063259 74.6535093,29.4063259 L70.487285,29.4063259 L70.487285,36.542235 L74.5914498,36.542235 C75.7225253,36.542235 76.6061866,36.2329623 77.2418846,35.6133259 C77.8773079,34.994235 78.1958434,34.124235 78.1958434,33.0033259 M81.6099394,33.0033257 C81.6099394,35.0280529 80.9778112,36.6551437 79.7184977,37.8840528 C78.4556144,39.1124164 76.7440355,39.7263255 74.5837608,39.7263255 L70.4872849,39.7263255 L70.4872849,45.9775071 L67.1086121,45.9775071 L67.1086121,26.1916895 L74.3415641,26.1916895 C76.6830744,26.1916895 78.480603,26.797144 79.7325023,28.006144 C80.9835778,29.2148712 81.6099394,30.8806894 81.6099394,33.0033257" id="Fill-43" fill="#424143" mask="url(#mask-6)"></path>
                            <path d="M93.8285749,38.2009917 C93.8285749,36.7110826 93.4795589,35.530719 92.7848221,34.6585372 C92.0865154,33.7869009 91.1635864,33.3499918 90.0119159,33.3499918 C88.8624422,33.3499918 87.9378656,33.79181 87.240932,34.6729918 C86.5461951,35.5555372 86.1980029,36.7304463 86.1980029,38.2009917 C86.1980029,39.6898099 86.5461951,40.8704462 87.240932,41.742628 C87.9378656,42.6153553 88.8624422,43.0511734 90.0119159,43.0511734 C91.1635864,43.0511734 92.0865154,42.6153553 92.7848221,41.742628 C93.4795589,40.8704462 93.8285749,39.6898099 93.8285749,38.2009917 M97.2498104,38.1857193 C97.2498104,40.5644467 96.5789637,42.4814468 95.2358974,43.9359014 C93.8920073,45.3909014 92.1529684,46.1174469 90.0119158,46.1174469 C87.8738838,46.1174469 86.1310005,45.3909014 84.7893071,43.9359014 C83.4456916,42.4814468 82.7753941,40.5644467 82.7753941,38.1857193 C82.7753941,35.8083556 83.4456916,33.8957192 84.7893071,32.4505373 C86.1310005,31.0064464 87.8738838,30.2837191 90.0119158,30.2837191 C92.1724649,30.2837191 93.918918,31.0064464 95.2515496,32.4505373 C96.5833573,33.8957192 97.2498104,35.8083556 97.2498104,38.1857193" id="Fill-44" fill="#424143" mask="url(#mask-6)"></path>
                            <path d="M111.642013,40.927746 C111.642013,42.4222914 111.056567,43.6503823 109.884576,44.6142005 C108.714782,45.5780187 107.169336,46.0577459 105.253181,46.0577459 C102.26389,46.0577459 99.9531351,45.1735641 98.3173457,43.4041096 L100.830481,41.3112005 C102.082654,42.5313823 103.546545,43.1395641 105.221602,43.1395641 C106.15167,43.1395641 106.888146,42.957655 107.433501,42.5941096 C107.978306,42.2302914 108.250984,41.7742914 108.250984,41.2231096 C108.250984,40.5944732 107.937391,40.1613823 107.312128,39.925746 C106.948558,39.7882914 105.979771,39.601746 104.404668,39.3650187 C102.506911,39.0906551 101.154508,38.6774733 100.345538,38.1268369 C99.3970711,37.4592005 98.9242107,36.4561096 98.9242107,35.1202915 C98.9242107,33.7632006 99.4986729,32.6283824 100.649245,31.7131097 C101.799542,30.799746 103.334279,30.3421097 105.253181,30.3421097 C107.572997,30.3421097 109.552036,31.099746 111.1881,32.6131097 L109.219222,34.6771096 C108.028283,33.6363824 106.675332,33.1141097 105.160915,33.1141097 C103.222792,33.1141097 102.254828,33.655746 102.254828,34.7365642 C102.254828,35.3649278 102.698032,35.7980187 103.58746,36.0342005 C104.838261,36.2294733 106.079725,36.4364733 107.312128,36.6522005 C110.198169,37.1834733 111.642013,38.6084733 111.642013,40.927746" id="Fill-45" fill="#424143" mask="url(#mask-6)"></path>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </svg>

    <div class="image-cropper image-cropper--hero-sphere7 levitate">
        <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="164" height="164" alt="Bańka">
    </div>
    <svg fill="#A1A1A1" class="gpay levitate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.97 173.13"><path d="M206.2 84.58v50.75h-16.1V10h42.7a38.61 38.61 0 0127.65 10.85A34.88 34.88 0 01272 47.3a34.72 34.72 0 01-11.55 26.6q-11.2 10.68-27.65 10.67h-26.6zm0-59.15v43.75h27a21.28 21.28 0 0015.93-6.48 21.36 21.36 0 000-30.63 21 21 0 00-15.93-6.65h-27zM309.1 46.78q17.85 0 28.18 9.54t10.32 26.16v52.85h-15.4v-11.9h-.7q-10 14.7-26.6 14.7-14.17 0-23.71-8.4a26.82 26.82 0 01-9.54-21q0-13.31 10.06-21.17t26.86-7.88q14.34 0 23.62 5.25v-3.68A18.33 18.33 0 00325.54 67 22.8 22.8 0 00310 61.13q-13.49 0-21.35 11.38l-14.18-8.93q11.7-16.8 34.63-16.8zm-20.83 62.3a12.86 12.86 0 005.34 10.5 19.64 19.64 0 0012.51 4.2 25.67 25.67 0 0018.11-7.52q8-7.53 8-17.67-7.53-6-21-6-9.81 0-16.36 4.73c-4.41 3.2-6.6 7.09-6.6 11.76zM436 49.58l-53.76 123.55h-16.62l19.95-43.23-35.35-80.32h17.5l25.55 61.6h.35l24.85-61.6z" fill="#5f6368"/><path d="M141.14 73.64A85.79 85.79 0 00139.9 59H72v27.73h38.89a33.33 33.33 0 01-14.38 21.88v18h23.21c13.59-12.53 21.42-31.06 21.42-52.97z" fill="#4285f4"/><path d="M72 144c19.43 0 35.79-6.38 47.72-17.38l-23.21-18C90.05 113 81.73 115.5 72 115.5c-18.78 0-34.72-12.66-40.42-29.72H7.67v18.55A72 72 0 0072 144z" fill="#34a853"/><path d="M31.58 85.78a43.14 43.14 0 010-27.56V39.67H7.67a72 72 0 000 64.66z" fill="#fbbc04"/><path d="M72 28.5a39.09 39.09 0 0127.62 10.8l20.55-20.55A69.18 69.18 0 0072 0 72 72 0 007.67 39.67l23.91 18.55C37.28 41.16 53.22 28.5 72 28.5z" fill="#ea4335"/></svg>

    <div class="image-cropper image-cropper--hero-sphere8 levitate2">
        <img src="/wp-content/themes/openapp/img/sphere.webp" class="header__hero" width="164" height="164" alt="Bańka">
    </div>
    <svg class="apay levitate2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 210.2"><path d="M93.6 27.1C87.6 34.2 78 39.8 68.4 39c-1.2-9.6 3.5-19.8 9-26.1 6-7.3 16.5-12.5 25-12.9 1 10-2.9 19.8-8.8 27.1m8.7 13.8c-13.9-.8-25.8 7.9-32.4 7.9-6.7 0-16.8-7.5-27.8-7.3-14.3.2-27.6 8.3-34.9 21.2-15 25.8-3.9 64 10.6 85 7.1 10.4 15.6 21.8 26.8 21.4 10.6-.4 14.8-6.9 27.6-6.9 12.9 0 16.6 6.9 27.8 6.7 11.6-.2 18.9-10.4 26-20.8 8.1-11.8 11.4-23.3 11.6-23.9-.2-.2-22.4-8.7-22.6-34.3-.2-21.4 17.5-31.6 18.3-32.2-10-14.8-25.6-16.4-31-16.8m80.3-29v155.9h24.2v-53.3h33.5c30.6 0 52.1-21 52.1-51.4s-21.1-51.2-51.3-51.2h-58.5zm24.2 20.4h27.9c21 0 33 11.2 33 30.9s-12 31-33.1 31h-27.8V32.3zM336.6 169c15.2 0 29.3-7.7 35.7-19.9h.5v18.7h22.4V90.2c0-22.5-18-37-45.7-37-25.7 0-44.7 14.7-45.4 34.9h21.8c1.8-9.6 10.7-15.9 22.9-15.9 14.8 0 23.1 6.9 23.1 19.6v8.6l-30.2 1.8c-28.1 1.7-43.3 13.2-43.3 33.2 0 20.2 15.7 33.6 38.2 33.6zm6.5-18.5c-12.9 0-21.1-6.2-21.1-15.7 0-9.8 7.9-15.5 23-16.4l26.9-1.7v8.8c0 14.6-12.4 25-28.8 25zm82 59.7c23.6 0 34.7-9 44.4-36.3L512 54.7h-24.6l-28.5 92.1h-.5l-28.5-92.1h-25.3l41 113.5-2.2 6.9c-3.7 11.7-9.7 16.2-20.4 16.2-1.9 0-5.6-.2-7.1-.4v18.7c1.4.4 7.4.6 9.2.6z"/></svg>
</section>


<section class="section section--bg-photo section--bg-photo--2"></section>


<section class="section section--pb-xxl">
    <div class="container">
        <div class="row flex-reverse">
            <div class="col-md-6 center position-relative">
                <img width="494" height="425" src="/wp-content/themes/openapp/img/integracja.webp" alt="Integracja z API">
            </div>
            <div class="col-md-6">
                <div class="text-wrapper">
                    <h3><?php echo get_field('hiw_section_2_header') ?></h3>
                    <hr class="hr dark">
                    <p><?php echo get_field('hiw_section_2_description') ?></p>
                    <a class="button button--secondary button--download-white mt-s">Pobierz specyfikację</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section section--bg-primary contact">
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
