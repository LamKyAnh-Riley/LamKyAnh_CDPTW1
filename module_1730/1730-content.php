<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1730 pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="col-md-4" ></div>
            <div class="col-md-4">
              <!--1-->
              <div class="swiper-slide position-relative">
                <img class="w-50 h-30 position rounded-circle"  src="images/img3.png" alt="img3.png"
                style="display:block; margin-left:25%; margin-right:50%;">

                  <div class="title-content p-4">
                    <span class="ult_btn10_span">
                      <a href="#" title="MIRIAM">MIRIAM GREENWOOD</a>
                    </span>
                      <div class="consultant">consultant</div>
                      <div class="entry-description">
                          <p>Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus,
                            eu ullamcorper velit maximus sed. Class aptent taciti sociosqu ad litora torquent per conubia
                            nostra.</p>
                      </div>
                  </div>
              </div>
                <!--2-->
                <!-- <div class="swiper-slide position-relative">
                  <img class="w-50 h-30 position rounded-circle"  src="images/img3.png" alt="img3.png"
                  style="display:block; margin-left:25%; margin-right:50%;">

                    <div class="title-content p-4">
                        <h2>RICHARD SWIFT</h2>
                        <div class="consultant">junior consultant</div>
                        <div class="entry-description">
                            <p>Donec vestibulum lectus sem, vel convallis ligula commodo ac. Aenean congue placerat risus,
                              eu ullamcorper velit maximus sed. Class aptent taciti sociosqu ad litora torquent per conubia
                              nostra.</p>
                        </div>
                    </div>
                </div> -->
                <!-- Add Arrows -->
              <div class="swiper-button-next p-4"></div>
              <div class="swiper-button-prev p-4"></div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
    </div>
  </div>
</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 20,
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
