<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo e($data->nama_tiket); ?> | IT MATSURI 2022</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <style>
        .swiper-button-prev {
            color: #FFC600;
        }

        .swiper-button-next {
            color: #FFC600;
        }

        .swiper-pagination-bullet-active {
            background-color: #FFC600 !important;
        }
    </style>
</head>

<body>
    <div class="font-Poppins bg-accent selection:text-secondary selection:bg-darkblue">
        <div class="p-5">
            <h2 class="text-4xl">Detail Tiket</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 bg-darkblue rounded-xl overflow-hidden">
                <!-- <div class="w-full swiper">
                    <img src="https://picsum.photos/800/900" alt="">
                </div> -->
                <div class="w-full overflow-hidden relative" id="swiper">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        
                        <?php echo e($da = preg_replace('/\s+/', '',$data->gambar_tiket)); ?>

                        
                        
                        
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/'.$data->gambar_tiket)); ?>" alt=""></div>
                            
                        
                        
                        
                    </div>
                    <!--  pagination -->
                    <div class="swiper-pagination"></div>

                    <!--  navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="text-slate-100 p-5 flex flex-col justify-between">
                    <div class="">
                        <h3 class="text-xl">Nama Item</h3>
                        <span><?php echo e($data->nama_tiket); ?></span>


                        <h3 class="text-xl">Detail Tiket</h3>
                        <span>
                            <?php echo e($data->desc_tiket); ?>

                            
                        </span>
                    </div>
                    <form class="my-4" id="form" method="POST" action="/checkout">
                        <?php echo csrf_field(); ?>
                        <input class="hidden" type="text" name="id" value="<?php echo e($data->id); ?>>

                        <label class="block uppercase tracking-wide  text-xs font-bold mb-2" for="grid-first-name">
                            Nama Lengkap
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Nama Anda" name="nama">
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <p class="text-red-500 text-xs italic">

                               <?php echo e($message); ?>

                           </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="email-input">
                            email
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="email-input" type="email" placeholder="nama@email.mail" name="email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <p class="text-red-500 text-xs italic">

                               <?php echo e($message); ?>

                           </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <button type="submit" class="bg-secondary rounded-lg text-darkblue w-full px-6 py-2">
                            Beli
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        // swiper
        const swiper = new Swiper('#swiper', {
            direction: 'horizontal',
            loop: true,
            autoplay: true,

            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/detail.blade.php ENDPATH**/ ?>