<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT FEST | 10th | 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
      /* * {
            border: 2px solid red;
        } */

      html,
      body {
        position: relative;
        height: 100%;
        overflow-x: hidden;
        background: #050634;
      }

      body {
        font-family: Poppins, Arial, sans-serif;
        font-size: 16px;
        margin: 0;
        padding: 0;
      }

      .swiper-container-wrapper--timeline .swiper-slide {
        display: flex;
        flex-direction: column;
        margin: 5px;
        background: #ffc600;
        min-height: 300px;
        padding: 0.5rem;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }

      /* .swiper-container-wrapper--timeline .swiper-slide ul > li {
        margin: 0;
        text-align: center;
        list-style-type: none;
        padding: 1.5rem 0;
      } */

      .swiper-container-wrapper--timeline .swiper-slide .container {
        padding: 0;
        width: 100%;
      }

      .swiper-container-wrapper--timeline .swiper-slide .title {
        /* font-size: 18px; */
        opacity: 0;
        transition: 0.5s ease 0.5s;
      }

      .swiper-container-wrapper--timeline .swiper-slide-active .title {
        opacity: 1;
      }

      .swiper-container-wrapper--timeline .swiper-pagination-progressbar {
        position: relative;
        margin-bottom: 70px;
        background-color: transparent;
        height: 4px;
        border-bottom: 1px solid #fff;
        width: 75%;
      }

      .swiper-container-wrapper--timeline .swiper-pagination-progressbar-fill {
        background-color: #fff;
        height: 3px;
        top: 2px;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-progressbar:before {
        position: absolute;
        top: 2px;
        left: -100%;
        width: 100%;
        height: 3px;
        background-color: #fff;
        content: "";
      }

      .swiper-container-wrapper--timeline .swiper-pagination-progressbar:after {
        position: absolute;
        top: 3px;
        right: -100%;
        width: 100%;
        height: 1px;
        background-color: #fff;
        content: "";
      }

      .swiper-container-wrapper--timeline .swiper-pagination-custom {
        position: relative;
        list-style: none;
        margin: 1rem 0;
        padding: 0;
        display: flex;
        line-height: 1.66;
        bottom: 0;
        z-index: 11;
        width: 75%;
        display: flex;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch {
        position: relative;
        width: 100%;
        height: 30px;
        line-height: 30px;
        display: block;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch
        .switch-title {
        position: absolute;
        font-weight: 400;
        right: 0;
        transform: translateX(50%);
        color: #ffc600;

        transition: 0.2s all ease-in-out;
        transition-delay: 0s;
        cursor: pointer;
        z-index: 1;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch
        .switch-title::after {
        position: absolute;
        top: calc(100% + 19px);
        right: 50%;
        transform: translateX(50%) translateY(-50%);
        width: 12px;
        height: 12px;
        background: #ffc600;
        border-radius: 50%;
        /* draw pacman shape using clip-path css */

        /* transform: rotate(35deg); */
        content: "";
        transition: 0.2s all ease-in-out;
        transition-delay: 0s;
        z-index: 1;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch.active
        .switch-title {
        font-weight: 400;
        transition-delay: 0.4s;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch.active
        .switch-title:after {
        background: #ffc600;
        width: 25px;
        height: 25px;
        clip-path: polygon(
          0% 0%,
          0% 100%,
          100% 100%,
          100% 90%,
          50% 50%,
          100% 0%
        );
        transition-delay: 0s;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch.active
        ~ .swiper-pagination-switch
        .switch-title {
        color: #888;
        font-weight: 16px;
      }

      .swiper-container-wrapper--timeline
        .swiper-pagination-custom
        .swiper-pagination-switch.active
        ~ .swiper-pagination-switch
        .switch-title:after {
        background: #888;
      }
      .container {
        margin: 50px auto;
        overflow: hidden;
        /* border: 2px solid red; */
      }
      .swiper-wrapper {
        height: 100vh;
      }
      .swiper-slide {
        overflow-y: scroll;
      }
    </style>
  </head>

  <body>
  <div class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container w-full ">
      <div class="swiper-container-wrapper swiper-container-wrapper--timeline">
        <!-- Timeline -->
        <ul class="swiper-pagination-custom">
          <li class="swiper-pagination-switch first active">
            <span class="switch-title">Okt 2022</span>
          </li>
          <li class="swiper-pagination-switch last">
            <span class="switch-title">Nov 2022</span>
          </li>
        </ul>
        <!-- Progressbar -->
        <div
          class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"
        ></div>
        <!-- Swiper -->
        <div class="swiper swiper-container swiper-container--timeline">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <h2 class="font-bold text-center py-5 text-3xl title">
                Rangkaian acara Oktober 2022
              </h2>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">Opening</h3>
                <p class="text-lg pt-3">
                  Pembukaan ITFEST 2022 akan dilaksanakan pada tanggal 14
                  Oktober 2022. Pembukaan dilakukan oleh Koordinator Program
                  Studi Teknologi Informasi FT ULM, Yuslena Sari, S.Kom., M.Kom.
                </p>
              </div>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">IT's Contest</h3>
                <p class="text-lg pt-3">
                  Merupakan rangkaian ITFEST berupa Lomba guna memeriahkan acara
                  ITFEST 2022. Ada beberapa lomba yang diadakan, diantaranya
                  Mobile Legends(17-19 Oktober 2022), Web Design(20 Oktober
                  2022),PUBG Mobile(25 Oktober 2022), Valorant(28-30 Oktober
                  2022) dan yang terakhir UI/UX Design(2-3 November 2022).
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <h2 class="font-bold text-center py-5 text-3xl title">
                Rangkaian acara November 2022
              </h2>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">Webinar IoT</h3>
                <p class="text-lg pt-3">
                  Salah satu rangkaian pada ITFEST adalah Webinar Nasional.
                  Tahun ini kami akan mengadakan webinar Internet of Things(IOT)
                  dengan tema "Mengembangkan Kreatifitas Dengan Iot Menuju
                  Revolusi Industri 5.0". Webinar ini akan dilaksanakan pada
                  tanggal 4 November 2022.
                </p>
              </div>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">
                  Webinar Kewirausahaan Syariah
                </h3>
                <p class="text-lg pt-3">
                  Selain webinar tentang teknologi, kami juga mengadakan webinar
                  tentang bisnis, yaitu webinar Kewirausahaan Syariah dengan
                  tema "Menumbuhkan Jiwa Kewirausahaan Syariah untuk Membangun
                  Bisnis yang Berkah". Webinar ini akan dilaksanakan pada
                  tanggal 6 November 2022 secara online.
                </p>
              </div>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">Workshop IoT</h3>
                <p class="text-lg pt-3">
                  Selain mengadakan webinar, kami juga akan mengadakan sebuah
                  workshop untuk melatih kemampuan IoT.
                </p>
              </div>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">Ngobrol Santuy</h3>
                <p class="text-lg pt-3">
                  Rangkaian IT FEST yang berupa podcast dalam bentuk video yang
                  akan dimulai dari tanggal 14 November 2022. Podcast akan
                  ditayangkan di Instagram IT FEST dan juga Youtube. Ngobrol
                  santuy akan diadakan ada 6 bagian dengan tema yang
                  berbeda-beda. Pemateri dari ngobrol santuy pun beragam, mulai
                  dari dosen, kaprodi, hingga mahasiswa PSTI.
                </p>
              </div>
              <div class="text-center mx-auto max-w-sm title">
                <h3 class="text-xl font-semibold">IT MATSURI</h3>
                <p class="text-lg py-3">
                  Rangkaian IT FEST yang terakhir dan juga sebagai penutup
                  kegiatan IT FEST 2022. yaitu sebuah malam puncak bernama IT
                  MATSURI. Malam puncak akan dilaksanakan pada 19 Novmber 2022.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script>
      $(document).ready(function () {
        var mySwiper = new Swiper(".swiper", {
          speed: 500,
          direction: "horizontal",
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
          },
          loop: false,
          effect: "slide",
          spaceBetween: 20,
          on: {
            init: function () {
              $(
                ".swiper-pagination-custom .swiper-pagination-switch"
              ).removeClass("active");
              $(".swiper-pagination-custom .swiper-pagination-switch")
                .eq(0)
                .addClass("active");
            },
            slideChangeTransitionStart: function () {
              $(
                ".swiper-pagination-custom .swiper-pagination-switch"
              ).removeClass("active");
              $(".swiper-pagination-custom .swiper-pagination-switch")
                .eq(mySwiper.realIndex)
                .addClass("active");
            },
          },
        });
        $(".swiper-pagination-custom .swiper-pagination-switch").click(
          function () {
            mySwiper.slideTo($(this).index());
            $(
              ".swiper-pagination-custom .swiper-pagination-switch"
            ).removeClass("active");
            $(this).addClass("active");
          }
        );
      });
    </script>
  <?php echo app('Illuminate\Foundation\Vite')('resources/js/script.js'); ?>
  </body>
</html>
<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/roadmap.blade.php ENDPATH**/ ?>