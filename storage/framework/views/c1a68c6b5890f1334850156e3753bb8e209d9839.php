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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- jquery validation -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <!-- sweat alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <div class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue">
  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- section pembuka -->
    <div class="h-screen relative flex justify-between flex-col lg:flex-row mx-auto text-slate-200 overflow-hidden">
      <div class="my-auto mx-auto lg:mx-0 w-3/4 text-center lg:text-left lg:ml-32 lg:mb-14">
        <h1 class="text-lg lg:text-3xl">IT Fest 2022 : IT’s Show Time</h1>

        <p class="text-xl lg:text-5xl font-bold">
          Let’s introduce you with us!
        </p>

        <p class="font-thin lg:font-light lg:text-2xl">
          IT Fest adalah salah satu event terbesar yang dielenggarakan oleh
          HMTI FT ULM yang terdiri dari beberapa rangkaian dan juga sebagai
          peringatan Dies Natalis Prodi TI FT ULM
        </p>
        <button
          class="mt-12 mx-auto px-3 py-2 lg:px-5 lg:py-4 font-semibold text-md lg:text-2xl bg-secondary text-darkblue rounded-xl hover:scale-105 transition">
          <a href="#roadmap"> Explore More </a>
        </button>
        <!-- logo it fest  -->
        <div class="absolute hidden lg:block rotate-6 -right-28 bottom-3">
          <img src="<?php echo e(asset('assets/LOGO.png')); ?>" alt="LOGO ITFEST 2022" />
        </div>

        <!-- pose IO -->
      </div>
      <!-- batas section pembuka -->
      <div class="absolute hidden lg:block rotate-6 -left-28 top-3">
        <!-- acces image from assets folder in laravel -->

        <img src="<?php echo e(asset('/assets/IO-pose1.png')); ?>" alt="MASKOT ITFEST 2022" />
      </div>
    </div>
    <!-- icon scroll down -->
    <div class="mb-24" id="scroll-btn">
      <svg class="mx-auto -top-10 animate-bounce" width="45" height="48" viewBox="0 0 45 48" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M22.397 42.4626L24.7582 44.8252L22.397 47.1877L20.0357 44.8252L22.397 42.4626ZM44.7939 24.7752L24.7582 44.8252L20.0357 40.1L40.0715 20.05L44.7939 24.7752ZM20.0357 44.8252L0 24.7752L4.72248 20.05L24.7582 40.1L20.0357 44.8252Z"
          fill="#FFC600" />
        <path
          d="M22.397 22.4126L24.7582 24.7751L22.397 27.1377L20.0357 24.7751L22.397 22.4126ZM44.7939 4.72512L24.7582 24.7751L20.0357 20.05L40.0715 0L44.7939 4.72512ZM20.0357 24.7751L0 4.72512L4.72248 0L24.7582 20.05L20.0357 24.7751Z"
          fill="#FFC600" />
      </svg>
    </div>
    <!-- end section pembuka -->

    <!-- section roadmap -->
    <div class="overflow-hidden" id="roadmap">
      <h2
        class="text-center text-2xl lg:text-5xl font-bold text-slate-100 pt-5 border-b-4 border-secondary w-40 lg:w-full max-w-xs mx-auto">
        Roadmap
      </h2>
      <div class="w-full">
        <img src="<?php echo e(asset('/assets/roadmap.png')); ?>" alt="Roadmap ITFEST HMTI 2022" class="max-w-5xl w-96 lg:w-full m-auto" />
      </div>
    </div>
    <!-- end section roadmap -->


    <!-- section it matsuri -->
    <div
      class="bg-cover relative max-w-screen-lg mx-5 lg:mx-auto rounded-lg bg-gradient-to-b from-[#F58DFF] to-[#E900FF]">
      <div class="absolute top-10 lg:top-16 right-8">
        <img src="<?php echo e(asset('/assets/flower.svg')); ?>" class="w-14" />
      </div>
      <div class="absolute top-1/4 left-8">
        <img src="<?php echo e(asset('/assets/flower.svg')); ?>" class="w-14 rotate-[27deg]" />
      </div>
      <div class="absolute bottom-4 lg:bottom-10 right-16">
        <img src="<?php echo e(asset('/assets/flower.svg')); ?>" class="w-14 rotate-45" />
      </div>
      <img src="<?php echo e(asset('/assets/ITMATSURI_RED.png')); ?>" alt="itmatsuri" class="w-1/2 mx-auto max-w-xs" />
      <h1 class="text-center uppercase font-bold text-4xl">it matsuri</h1>
      <p class="text-center font-normal text-lg lg:text-2xl p-4">
        Tahun ini, IT FEST 2022 merupakan IT FEST yang ke-10 dan akan
        menghadirkan acara baru yaitu IT Matsuri sebagai rangkaian malam
        puncak IT FEST. Akan ada banyak keseruan dan penampilan-penampilan
        menarik serta lomba-lomba yang akan mewarnai IT Matsuri Pertama di IT
        FEST ini.
      </p>
      <div class="flex flex-col lg:flex-row items-center w-fit mx-auto p-5">
        <button onclick="window.location.href='/itmatsuri'"
          class="mb-3 lg:mb-0 text-lg lg:h-14 lg:w-44 p-2 lg:mr-2 m-auto drop-shadow-custom bg-gradient-to-br from-[#F58DFF] to-[#EA03FF] rounded-lg lg:rounded-xl hover:scale-105 transition">
          Learn More
        </button>

        <button class="lg:h-14 lg:w-44 p-2 border-2 lg:p-0 border-[#F58DFF] m-auto rounded-xl flex justify-between">
          <span class="m-auto hidden lg:block">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play" width="35"
              height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#050634" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 4v16l13 -8z" />
            </svg>
          </span>
          <span class="text-lg text-center lg:pr-2 my-auto">Watch Trailer</span>
        </button>
      </div>
    </div>

    <!-- end section it matsuri -->

    <!-- section informasi -->
    <div class="">
      <h2
        class="text-center text-2xl lg:text-5xl font-bold text-slate-100 pt-5 border-b-4 border-secondary w-40 lg:w-full max-w-xs mx-auto mb-3">
        Informasi
      </h2>

      <section>
        <div class="w-full lg:px-10 bg-secondary drop-shadow-custom">
          <div class="flex p-5 justify-between cursor-pointer clickme">
            <h3 class="text-xl my-auto lg:text-4xl">Halo ini adalah text</h3>
            <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
            </svg>
          </div>
          <p class="hidden p-5" id="teks show">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            aut quia omnis, sapiente, quaerat dicta eum at et consequuntur,
            porro voluptatibus neque excepturi alias provident officiis
            aliquam molestiae veritatis nesciunt quis quo facilis reiciendis
            officia. Corporis ex architecto minus totam vitae a esse magni
            obcaecati blanditiis temporibus animi sit nisi quos consequatur,
            ipsum maiores. Impedit, similique aut praesentium modi eos
            voluptatibus ducimus nesciunt vitae veniam ipsam, facilis porro
            odit reprehenderit laboriosam? Natus et officiis sequi nulla, quas
            iusto consequuntur, temporibus cumque a fugit consectetur esse
            repellat omnis fugiat tempore culpa itaque accusantium ullam id
            praesentium! Itaque harum nam neque minima?
          </p>
        </div>
      </section>
      <section>
        <div class="w-full lg:px-10 bg-secondary drop-shadow-custom">
          <div class="flex p-5 justify-between cursor-pointer clickme">
            <h3 class="text-xl my-auto lg:text-4xl">Halo ini adalah text</h3>
            <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
            </svg>
          </div>
          <p class="hidden p-5" id="teks show">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            aut quia omnis, sapiente, quaerat dicta eum at et consequuntur,
            porro voluptatibus neque excepturi alias provident officiis
            aliquam molestiae veritatis nesciunt quis quo facilis reiciendis
            officia. Corporis ex architecto minus totam vitae a esse magni
            obcaecati blanditiis temporibus animi sit nisi quos consequatur,
            ipsum maiores. Impedit, similique aut praesentium modi eos
            voluptatibus ducimus nesciunt vitae veniam ipsam, facilis porro
            odit reprehenderit laboriosam? Natus et officiis sequi nulla, quas
            iusto consequuntur, temporibus cumque a fugit consectetur esse
            repellat omnis fugiat tempore culpa itaque accusantium ullam id
            praesentium! Itaque harum nam neque minima?
          </p>
        </div>
      </section>
      <section>
        <div class="w-full lg:px-10 bg-secondary drop-shadow-custom">
          <div class="flex p-5 justify-between cursor-pointer clickme">
            <h3 class="text-xl my-auto lg:text-4xl">Halo ini adalah text</h3>
            <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
            </svg>
          </div>
          <p class="hidden p-5" id="teks show">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            aut quia omnis, sapiente, quaerat dicta eum at et consequuntur,
            porro voluptatibus neque excepturi alias provident officiis
            aliquam molestiae veritatis nesciunt quis quo facilis reiciendis
            officia. Corporis ex architecto minus totam vitae a esse magni
            obcaecati blanditiis temporibus animi sit nisi quos consequatur,
            ipsum maiores. Impedit, similique aut praesentium modi eos
            voluptatibus ducimus nesciunt vitae veniam ipsam, facilis porro
            odit reprehenderit laboriosam? Natus et officiis sequi nulla, quas
            iusto consequuntur, temporibus cumque a fugit consectetur esse
            repellat omnis fugiat tempore culpa itaque accusantium ullam id
            praesentium! Itaque harum nam neque minima?
          </p>
        </div>
      </section>
      <section>
        <div class="w-full lg:px-10 bg-secondary drop-shadow-custom">
          <div class="flex p-5 justify-between cursor-pointer clickme">
            <h3 class="text-xl my-auto lg:text-4xl">Halo ini adalah text</h3>
            <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
            </svg>
          </div>
          <p class="hidden p-5" id="teks show">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            aut quia omnis, sapiente, quaerat dicta eum at et consequuntur,
            porro voluptatibus neque excepturi alias provident officiis
            aliquam molestiae veritatis nesciunt quis quo facilis reiciendis
            officia. Corporis ex architecto minus totam vitae a esse magni
            obcaecati blanditiis temporibus animi sit nisi quos consequatur,
            ipsum maiores. Impedit, similique aut praesentium modi eos
            voluptatibus ducimus nesciunt vitae veniam ipsam, facilis porro
            odit reprehenderit laboriosam? Natus et officiis sequi nulla, quas
            iusto consequuntur, temporibus cumque a fugit consectetur esse
            repellat omnis fugiat tempore culpa itaque accusantium ullam id
            praesentium! Itaque harum nam neque minima?
          </p>
        </div>
      </section>
      <section>
        <div class="w-full lg:px-10 bg-secondary drop-shadow-custom">
          <div class="flex p-5 justify-between cursor-pointer clickme">
            <h3 class="text-xl my-auto lg:text-4xl">Halo ini adalah text</h3>
            <svg class="my-auto transition-transform duration-300 w-9 md:w-12" width="50" height="51"
              viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.5 15.02L25 27.52L37.5 15.02L42.5 17.52L25 35.02L7.5 17.52L12.5 15.02Z" fill="#050634" />
            </svg>
          </div>
          <p class="hidden p-5" id="teks show">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
            aut quia omnis, sapiente, quaerat dicta eum at et consequuntur,
            porro voluptatibus neque excepturi alias provident officiis
            aliquam molestiae veritatis nesciunt quis quo facilis reiciendis
            officia. Corporis ex architecto minus totam vitae a esse magni
            obcaecati blanditiis temporibus animi sit nisi quos consequatur,
            ipsum maiores. Impedit, similique aut praesentium modi eos
            voluptatibus ducimus nesciunt vitae veniam ipsam, facilis porro
            odit reprehenderit laboriosam? Natus et officiis sequi nulla, quas
            iusto consequuntur, temporibus cumque a fugit consectetur esse
            repellat omnis fugiat tempore culpa itaque accusantium ullam id
            praesentium! Itaque harum nam neque minima?
          </p>
        </div>
      </section>
    </div>
    <!-- end section informasi -->

     <?php echo $__env->make('partials.contactModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
  <?php echo app('Illuminate\Foundation\Vite')('resources/js/script.js'); ?>
</body>

</html>
<?php /**PATH /home/uluumbch/code/itfest/resources/views/itfest.blade.php ENDPATH**/ ?>