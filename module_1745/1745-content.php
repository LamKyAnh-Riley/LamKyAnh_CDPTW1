<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1745 pt-5 pb-5">
    <div class="container">
        <div class="title text-center">
            <h2>SERVICES WE PROVIDE</h2>
        </div>
        <hr class="separation mb-5">

        <div class="swiper-container">
            <div class="swiper-wrapper">
              <!--1-->
              <div class="swiper-slide">
                  <div class="blog-images position-relative">
                      <div class="thumbnail-rollover">
                          <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                      </div>
                  </div>
                  <div class="title-content p-4">
                      <span class="ult_btn10_span">
                          <a href="#" title="Accounting and Tax Services">Investment and Stock Exchange</a>
                      </span>
                      <div class="entry-description">
                          <p>Aenean congue placerat risus, eu ullamcorper velit maximus sed. Donec lorem ipsum dolor lectus sem, vel convallis ligula commodo ac.</p>
                      </div>
                  </div>
              </div>
                <!--2-->
                <div class="swiper-slide">
                    <div class="blog-images position-relative">
                        <div class="thumbnail-rollover">
                            <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                        </div>
                    </div>

                    <div class="title-content p-4">
                      <span class="ult_btn10_span">
                          <a href="#" title="Finance and Banking">Business Consulting</a>
                      </span>

                        <div class="entry-description">
                            <p>Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus, eu ullamcorper velit maximus sed.</p>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="swiper-slide">
                    <div class="blog-images position-relative">
                        <div class="thumbnail-rollover">
                            <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                        </div>
                    </div>

                    <div class="title-content p-4">
                        <span class="ult_btn10_span">
                            <a href="#" title="International Banking">Accounting and Tax Services</a>
                        </span>

                        <div class="entry-description">
                            <p>Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus, eu ullamcorper velit maximus sed.</p>
                        </div>
                    </div>
                </div>
                <!--4-->
                <div class="swiper-slide">
                    <div class="blog-images position-relative">
                        <div class="thumbnail-rollover">
                            <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                        </div>
                    </div>

                    <div class="title-content p-4">
                      <span class="ult_btn10_span">
                          <a href="#" title="Business Advisory">Finance and Banking</a>
                      </span>

                        <div class="entry-description">
                            <p>Lorem ipsum from atet – donec vestibulum lectus sem, vel convalli congue ipsum amet from amos nulla placerat risus, eu ullamcorper velit maximus sed.</p>
                        </div>
                    </div>
                </div>
                <!--5-->
                <div class="swiper-slide">
                    <div class="blog-images position-relative">
                        <div class="thumbnail-rollover">
                            <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                        </div>
                    </div>

                    <div class="title-content p-4">
                      <span class="ult_btn10_span">
                          <a href="#" title="Investment and Stock Exchange">International Banking</a>
                      </span>

                        <div class="entry-description">
                            <p>Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus, eu ullamcorper velit maximus sed.</p>
                        </div>
                    </div>
                </div>
                <!--6-->
                <div class="swiper-slide">
                    <div class="blog-images position-relative">
                        <div class="thumbnail-rollover">
                            <img class="w-100 h-100 position rounded-circle"  src="images/img1.png" alt="img1.png">
                        </div>
                    </div>

                    <div class="title-content p-4" style="text-align: center">
                      <span class="ult_btn10_span">
                          <a href="#" title="Business Consulting">Business Advisory</a>
                      </span>

                        <div class="entry-description">
                            <p>Nulla glavrida amet from amos nulla placerat risus dolor from amet. Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next p-4"></div>
    <div class="swiper-button-prev p-4"></div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        centeredSlides: false,
        spaceBetween: 40,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
