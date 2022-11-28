<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT FEST | 10th | 2022</title>
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

    @vite('resources/css/app.css')
    <style>
      html {
        scroll-behavior: smooth;
      }

      /* * {
            border: 2px solid red;
        } */
    </style>
  </head>

  <body class="scroll-smooth bg-darkblue font-Poppins">
    <div class="h-screen relative w-full overflow-hidden">
      <!-- desktop navgitaion  -->
      @include('partials.navbar')

      <!-- section tentang kami -->
      <div class="px-8 h-full">
        <div class="max-w-sm">
          <h1 class="text-slate-100 mt-28 text-5xl">Tentang Kami</h1>
          <div class="h-2 rounded-2xl w-1/2 mt-6 mx-auto bg-secondary"></div>
        </div>
        <p class="max-w-4xl text-slate-100 pt-10 font-normal">
          HMTI FT ULM Merupakan salah satu Himpunan Mahasiswa yang berada di
          Fakultas Teknik Universitas Lambung Mangkurat. Kami hadir sebagai
          himpunan yang aktif mengadakan kegiatan-kegiatan yang dapat diikuti
          tidak hanya oleh mahasiswa, tapi juga terbuka untuk umum.
          <br />
          <br />
          HMTI berusaha sebaik mungkin untuk memberikan pelayanan, serta untuk
          menjadi wadah dalam mengembangkan diri, melalui kegiatan yang
          membangun serta aktifitas yang berguna untuk masyarat.
        </p>
      </div>
      <div class="hidden lg:block absolute bottom-0 -right-4">
        <img src="{{asset('/assets/pacman.png')}}" alt="decoration it fest" />
      </div>
      <!-- end section tentang kami -->
    </div>
    <!-- penutup section awal  -->

    <section class="">
      <div class="flex justify-between">
        <!-- section logo -->
        <div class="w-1/3 my-auto">
          <img src="{{asset('/assets/LOGO.png')}}" alt="Logo ITFEST PSTI ULM" />
        </div>
        <p class="font-normal w-2/3 px-5 my-auto text-slate-100">
          Logo IT Fest tahun ini melambangkan angka 10 yang menandai hari jadi
          Program Studi Teknologi Informasi FT ULM yang ke-10. Pemilihan warna
          pada logo mengikuti kata “it’s” yang berasal dari tema pada tahun ini
          yaitu “IT’s Show Time!”. Angka 1 dan 0 melambangkan angka binary yang
          merupakan bentuk dasar dari bahasa pemrograman.
        </p>
      </div>
    </section>
    <!-- filosofi logo -->
    <section class="mx-10">
      <!-- golden -->
      <div class="flex flex-col lg:flex-row p-0 lg:p-2 my-4">
        <!-- kotak -->
        <div class="w-10 h-10 mb-4 lg:w-28 lg:h-28 bg-[#FFC600]"></div>
        <!-- judul -->
        <div class="p-0 lg:px-5 text-slate-100">
          <h3 class="font-medium">Golden Poppy</h3>
          <p class="font-normal">
            Melambangkan kehangatan, keramah-tamahan, kreatifitas, dan suasana
            rumah.
          </p>
        </div>
      </div>
      <!-- Electric Ultramarine -->
      <div class="flex flex-col lg:flex-row p-0 lg:p-2 my-4">
        <!-- kotak -->
        <div class="w-10 h-10 mb-4 lg:w-28 lg:h-28 bg-[#5800FF]"></div>
        <!-- judul -->
        <div class="p-0 lg:px-5 text-slate-100">
          <h3 class="font-medium">Electric Ultramarine</h3>
          <p class="font-normal">
            Melambangkan harmoni, kompatibilitas, persatuan, partnership, dan
            kesatuan dalam jiwa dan hati.
          </p>
        </div>
      </div>
      <!-- Phlox -->
      <div class="flex flex-col lg:flex-row p-0 lg:p-2">
        <!-- kotak -->
        <div class="w-10 h-10 mb-4 lg:w-28 lg:h-28 bg-[#E900FF]"></div>
        <!-- judul -->
        <div class="p-0 lg:px-5 text-slate-100">
          <h3 class="font-medium">Phlox</h3>
          <p class="font-normal">
            Melambangkan ketenangan & ketentraman, rasa aman & kepercayaan, dan
            kedewasaan.
          </p>
        </div>
      </div>
    </section>

    <!-- section IO -->
    <section class="flex flex-col mt-5">
      <div class="rounded-full m-auto">
        <img src="{{asset('/assets/IO.png')}}" alt="MASKOT IO ITFEST 2022" />
      </div>
      <div class="text-center text-slate-100">
        <h2 class="text-3xl font-medium">Introducing IO</h2>
        <p class="text-lg font-normal mx-auto max-w-xl">
          We proudly brings to you our IT Fest Mascot, IO! <br />Sebuah robot
          yang dapat melayang nan imut. Dapat menunjukkan berbagai macam
          ekspresi dari panel yang ada di wajahnya. Nama IO sendiri diambil dari
          manifestasi angka binary yang memiliki makna sebagai bentuk dasar dari
          bahasa pemrograman.
        </p>
      </div>
    </section>

    @include('partials.contactModal')
    @include('partials.footer')

  </body>
  @vite('resources/js/script.js')
</html>
