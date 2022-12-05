<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vote | IT-FEST 2022</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.35/dist/sweetalert2.all.min.js"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        input[type="radio"]:checked+label {
            border: #ffc600 2px solid;
        }

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
    <h1 class="text-center text-3xl font-semibold text-slate-100 py-4">
        Beli Tiket IT MATSURI
    </h1>
    <div class="p-5 w-full flex flex-col lg:flex-row justify-evenly">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="max-w-sm border border-secondary rounded-lg shadow-md bg-accent my-3">
                <a href="/itmatsuri/tiket/<?php echo e($item->id); ?>">
                    <img class="rounded-t-lg" src="<?php echo e(asset('images/'.$item->gambar_tiket)); ?>" alt="" />
                </a>
                <div class="p-5">
                    <a href="/itmatsuri/tiket/<?php echo e($item->id); ?>">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-slate-100 uppercase"><?php echo e($item->nama_tiket); ?></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-900"><?php echo e($item->harga_tiket); ?></p>
                    <p class="mb-3 font-normal text-gray-700"><?php echo e($item->desc_tiket); ?></p>
                    <a href="/itmatsuri/tiket/<?php echo e($item->id); ?>" class="inline-flex bg-darkblue items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Pilih TIket
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




    </div>




    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

</body>

</html>

<?php /**PATH C:\laragon\www\itfest\resources\views/tiket.blade.php ENDPATH**/ ?>