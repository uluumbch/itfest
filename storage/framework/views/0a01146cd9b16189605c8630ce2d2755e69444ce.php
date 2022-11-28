<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT MATSURI | 2022</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- jquery -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!-- jquery validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!-- sweat alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
      html {
        scroll-behavior: smooth;
      }
      @keyframes upanddown {
        0% {
          top: 0px;
        }
        50% {
          top: 100px;
        }
        100% {
          top: 0px;
        }
      }
      @keyframes upanddown2 {
        0% {
          top: 100px;
        }
        50% {
          top: 0px;
        }
        100% {
          top: 100px;
        }
      }
      #kotak1 {
        animation: infinite 4s upanddown;
      }
      #kotak2 {
        animation: infinite 4s upanddown2;
      }
      .putar {
        animation: spin 5s linear infinite;
      }

      @keyframes spin {
        from {
          transform: rotate(0deg);
        }
        to {
          transform: rotate(360deg);
        }
      }
    </style>
  </head>

  <body>
    <div
      class="font-Poppins bg-itmsecondary selection:text-secondary selection:bg-darkblue"
    >
      <!-- section pembuka -->
      <div id="section-pembuka" class="h-screen w-full">
        <img
          src="<?php echo e(asset('/assets/ITMATSURI_RED.png')); ?>"
          alt="ITMATSURI ITFEST 2022"
          class="w-80 lg:w-auto mx-auto pt-10"
        />
        <h2 class="text-center font-extrabold text-4xl">IT MATSURI</h2>
        <p class="max-w-md p-3 text text-center mx-auto">
          Tahun ini, IT FEST 2022 merupakan IT FEST yang ke-10 dan akan
          menghadirkan acara baru yaitu IT Matsuri sebagai rangkaian malam
          puncak IT FEST. Akan ada banyak keseruan dan penampilan-penampilan
          menarik serta lomba-lomba yang akan mewarnai IT Matsuri Pertama di IT
          FEST ini.
        </p>
        <div class="flex flex-col lg:flex-row items-center w-fit mx-auto p-5">
            <button
            onclick="window.location.href='/itmatsuri/tiket'"
            class="mb-3 lg:mb-0 text-lg lg:h-14 lg:w-44 p-2 lg:mr-2 m-auto drop-shadow-custom bg-gradient-to-br from-[#F58DFF] to-[#EA03FF] rounded-lg lg:rounded-xl hover:scale-105 transition"
          >
            Beli Tiket
          </button>

          <button
            class="lg:h-14 lg:w-44 p-2 drop-shadow-custom bg-gradient-to-br from-[#F58DFF] to-[#EA03FF] lg:p-0 m-auto rounded-xl flex justify-between hover:scale-105 transition"
          >
            <span class="m-auto hidden lg:block">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-player-play"
                width="35"
                height="35"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#050634"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 4v16l13 -8z" />
              </svg>
            </span>
            <span class="text-lg text-center lg:pr-2 my-auto"
              >Watch Trailer</span
            >
          </button>
        </div>
      </div>

      <!-- section 2 -->
      <div class="flex p-0 lg:p-10 h-[100vh]">
        <div class="w-1/2 pl-14 my-auto">
          <h2 class="font-extrabold text-3xl">IT MATSURI</h2>
          <p class="max-w-md">
            Tahun ini, IT FEST 2022 merupakan IT FEST yang ke-10 dan akan
            menghadirkan acara baru yaitu IT Matsuri sebagai rangkaian malam
            puncak IT FEST. Akan ada banyak keseruan dan penampilan-penampilan
            menarik serta lomba-lomba yang akan mewarnai IT Matsuri Pertama di
            IT FEST ini.
          </p>
        </div>
        <div class="w-1/2">
          <div class="lg:flex flex-row hidden">
            <div
              id="kotak1"
              class="w-[240px] h-[580px] relative rounded-xl mx-5 bg-white"
            ></div>
            <div
              id="kotak2"
              class="w-[240px] h-[580px] relative rounded-xl mx-5 bg-white"
            ></div>
            <!-- <div class="w-24 h-full m-5 bg-white"></div> -->
          </div>
        </div>
      </div>
      <!-- section echo -->
      <div class="h-full w-full">
        <div class="mx-auto w-52 lg:w-[400px]">
          <img src="<?php echo e(asset('/assets/echo.png')); ?>" alt="maskot IT Matsuri IT FEST" />
        </div>
        <h2 class="font-extrabold text-2xl text-center mx-auto">Meet Echo</h2>
        <p class="max-w-md text-center mx-auto">
          We proudly brings to you our Mascot, Echo-chan >< <br />
          Memiliki kepribadian yang selalu ceria, ceroboh, friendly, dan seperti
          namanya ia suka menyebarkan kebahagian lewat lagu yang dinyanyikan
          olehnya.
        </p>
      </div>
        <!-- section informasi -->
        <div class="">
            <h2
                class="text-center text-2xl lg:text-5xl font-bold text-slate-100 pt-5 border-b-4 border-secondary w-40 lg:w-full max-w-xs mx-auto mb-3">
                Informasi
            </h2>

            <section>
                <div class="w-full lg:px-10 bg-accent drop-shadow-custom">
                    <div class="flex p-5 justify-between cursor-pointer clickme">
                        <h3 class="text-xl my-auto lg:text-4xl">Apakah acara ini gratis?</h3>
                        <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
                             viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
                        </svg>
                    </div>
                    <p class="hidden p-5 w-full" id="teks show">
                        Tiket masuk untuk Acara ini berbayar dengan harga yang dapat dilihat di halaman beli tiket.
                    </p>
                </div>
            </section>
            <section>
                <div class="w-full lg:px-10 bg-accent drop-shadow-custom">
                    <div class="flex p-5 justify-between cursor-pointer clickme">
                        <h3 class="text-xl my-auto lg:text-4xl">Dimana acara akan diadakan?</h3>
                        <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
                             viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
                        </svg>
                    </div>
                    <p class="hidden p-5 w-full" id="teks show">
                        Acara akan diadakan di General Building Theater Lecture Universitas Lambung Mangkurat.
                    </p>
                </div>
            </section>

        </div>
        <!-- end section informasi -->
      <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/script.js'); ?>
    <script>

    </script>
  </body>
</html>
<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/itmatsuri.blade.php ENDPATH**/ ?>