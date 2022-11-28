<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Vote | IT MATSURI 2022</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://cdn.jsdelivr.net/npm/party-js@latest/bundle/party.min.js"></script>

    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(5, 6, 52);
            /* Fallback color */
            background-color: rgb(5, 6, 52, 0.8);
            /* Fallback color */
            backdrop-filter: blur(5px);
            /* blur */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            font-size: 1.5rem;
            font: 500;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0);
            }

            to {
                -webkit-transform: scale(1);
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #ffc600;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #d2a60e;
            text-decoration: none;
            cursor: pointer;
        }

        .no-border {
            border: 0 !important;
            width: 50%;
        }


        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }

            .no-border {
                width: 70%;
            }
        }
    </style>
</head>

<body>
<div class="font-Poppins bg-[#050634f2] selection:text-secondary selection:bg-darkblue">
    <nav class="flex justify-between flex-row px-12 h-16 items-center bg-secondary">
        <div class="logo mx-auto">
            <a href="/">
                <img src="<?php echo e(asset('/assets/LogoWhite.png')); ?>" alt="Logo ITFEST 2022" />
            </a>
        </div>
    </nav>
    <h1 class="text-center text-3xl  text-slate-100 p-5">
        Pemenang Lomba Gambar IT MATSURI 2022
    </h1>

    <div class="grid">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
            class="flex flex-row rounded m-2 shadow-md bg-[#FFC600] shadow-gray-400 m-5"
        >
            <span class="text-xl text-slate-50 p-5 my-auto">1</span>
            <img
                src="<?php echo e(asset('images/'.$item->gambar)); ?>"
                alt="<?php echo e($item->nama); ?>"
                class="w-32 max-h-44 m-auto lg:m-0 lg:w-60 hover:scale-105 p-2 transition-all duration-200 gambar"
            />




            <div class="grid m-5">
                <h3 class="text-lg font-semibold">
                    <?php echo e($item->nama_gambar); ?>

                </h3>
                <h4 class="text-sm">
                    <?php echo e($item->nama); ?>


                </h4>
                <div class="text-sm">
                    <?php echo e($item->desc); ?>

                </div>
                <div class="flex">
                    <svg class="w-6 h-6" viewBox="0 0 49 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.3257 1.73089C22.4657 -0.576965 25.7593 -0.576965 26.8972 1.73089L32.6657 13.4159L45.5593 15.2888C48.1093 15.6595 49.125 18.7923 47.2822 20.5902L37.95 29.6845L40.1529 42.5266C40.59 45.0638 37.9243 46.9988 35.6465 45.8009L24.1093 39.7366L12.5786 45.8009C10.2986 47.0009 7.63503 45.0638 8.07003 42.5266L10.2729 29.6845L0.940745 20.5902C-0.902112 18.7902 0.115746 15.6616 2.6636 15.2888L15.5572 13.4159L21.3236 1.73089H21.3257ZM24.1115 3.34875L18.4179 14.888C18.1948 15.3398 17.8653 15.7305 17.4576 16.0265C17.05 16.3225 16.5765 16.515 16.0779 16.5873L3.34289 18.4388L12.5572 27.4216C13.29 28.1352 13.6243 29.1638 13.4507 30.1709L11.2757 42.8566L22.6672 36.8673C23.1132 36.6327 23.6096 36.5101 24.1136 36.5101C24.6176 36.5101 25.114 36.6327 25.56 36.8673L36.9493 42.8545L34.7743 30.1709C34.6007 29.1638 34.935 28.1352 35.6679 27.4216L44.8822 18.4388L32.1472 16.5873C31.6486 16.515 31.1751 16.3225 30.7674 16.0265C30.3598 15.7305 30.0302 15.3398 29.8072 14.888L24.1136 3.34875H24.1115Z" fill="url(#paint0_linear_1052_210)"/>
                        <defs>
                            <linearGradient id="paint0_linear_1052_210" x1="-11.5" y1="-6.5" x2="61.5" y2="61.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#050634"/>
                                <stop offset="1" stop-color="#0A0FF0"/>
                            </linearGradient>
                        </defs>
                    </svg>
                    <span class="px-1">
                        <?php echo e($item->jumlah_vote); ?>

                    </span>
                </div>


            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="image-modal" />
        <div id="caption"></div>
    </div>

    <div class="p-3 max-w-lg text-center mx-auto w-full">
        <span class="text-slate-50 font-medium text-center">
          Terimakasih sudah berkontribusi pada lomba menggambar IT FEST 2022.
          Selamat untuk para pemenang dan tetap semangat untuk kalian yang belum
          memenangkan lomba kali ini. Yakinlah suatu saat kalian akan
          mendapatkan hasil yang terbaik.
        </span>
    </div>


    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<script>
    // confetti
    document.querySelector(".grid").addEventListener("click", function (e) {
        party.confetti(this, {
            count: party.variation.range(100, 100),
        });
    });

    // run confetti when dcoument ready and delay 3 seconds
    setTimeout(function () {
        party.confetti(document.querySelector(".grid"), {
            count: party.variation.range(100, 100),
        });
    }, 3000);


    // Get the modal
    const modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    const img = document.querySelectorAll(".gambar");
    const modalImg = document.getElementById("image-modal");
    const captionText = document.getElementById("caption");
    img.forEach((element) => {
        element.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
    });

    // Get the <span> element that closes the modal
    const span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
    // when user click esc button close modal
    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") {
            modal.style.display = "none";
        }
    });
</script>
</body>

</html>
<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/hasilvote.blade.php ENDPATH**/ ?>