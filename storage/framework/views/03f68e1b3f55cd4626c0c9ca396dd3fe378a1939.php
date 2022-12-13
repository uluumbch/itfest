<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT MATSURI | Vote Favorite Singer</title>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- sweat alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
        input[type="radio"] {
            display: none;
        }



        input[type="radio"]:checked+label>div {
            border: 3px solid #ff8dc7;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <section class="bg-itmsecondary">
        <div class="w-[calc(100%_-_10rem)] mx-auto rounded bg-itmprimary py-5">
            <img src="<?php echo e(asset('img/logo2.png')); ?>" alt="" class="mx-auto rounded-full mb-2">
            <h6 class="text-xl text-center"> OUR FAVORITE SINGER</h6>
        </div>
        <div class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto mt-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-3">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key == 0): ?>
                        <div class=" shadow max-w-md">
                            <div class="">
                                <div className="crown">
                                    <svg class="w-16 mx-auto" fill="#ffc500" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 50">
                                        <polygon className="cls-1"
                                            points="12.7 50 87.5 50 100 0 75 25 50 0 25.6 25 0 0 12.7 50" />
                                    </svg>
                                </div>
                                <div class="max-w-md">
                                    <img src="<?php echo e(asset('images-sing/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : <?php echo e($item->id); ?></p>
                                    <P class="font-semibold py-3"><?php echo e($item->nama); ?></P>
                                    <P class="font-medium py-3"><?php echo e($item->jumlah_vote); ?> Vote</P>

                                </div>
                            </div>
                        </div>
                    <?php elseif($key == 1): ?>
                        <div class=" shadow max-w-md">
                            <div class="">
                                <div className="crown">
                                    <svg class="w-16 mx-auto" fill="#d4d4d4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 50">
                                        <polygon className="cls-1"
                                            points="12.7 50 87.5 50 100 0 75 25 50 0 25.6 25 0 0 12.7 50" />
                                    </svg>
                                </div>
                                <div class="max-w-md">
                                    <img src="<?php echo e(asset('images-sing/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : <?php echo e($item->id); ?></p>
                                    <P class="font-semibold py-3"><?php echo e($item->nama); ?></P>
                                    <P class="font-medium py-3"><?php echo e($item->jumlah_vote); ?> Vote</P>

                                </div>
                            </div>
                        </div>
                    <?php elseif($key == 2): ?>
                        <div class=" shadow max-w-md">
                            <div class="">
                                <div className="crown">
                                    <svg class="w-16 mx-auto" fill="#ab6528" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 100 50">
                                        <polygon className="cls-1"
                                            points="12.7 50 87.5 50 100 0 75 25 50 0 25.6 25 0 0 12.7 50" />
                                    </svg>
                                </div>
                                <div class="max-w-md">
                                    <img src="<?php echo e(asset('images-sing/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : <?php echo e($item->id); ?></p>
                                    <P class="font-semibold py-3"><?php echo e($item->nama); ?></P>
                                    <P class="font-medium py-3"><?php echo e($item->jumlah_vote); ?> Vote</P>

                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class=" shadow max-w-md">
                            <div class="">
                                <div class="max-w-md">
                                    <img src="<?php echo e(asset('images-sing/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : <?php echo e($item->id); ?></p>
                                    <P class="font-semibold py-3"><?php echo e($item->nama); ?></P>
                                    <P class="font-medium py-3"><?php echo e($item->jumlah_vote); ?> Vote</P>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <footer id="footer" class="w-full pb-5">
                <div class="flex justify-evenly bg-itmfourth rounded-full max-w-xl mx-auto mt-5">
                    <div class="p-3 hover:scale-110 transition-all"><a
                            href="https://www.instagram.com/itfest.itsshowtime/"><img class="w-10"
                                src="<?php echo e(asset('img/instagram 1.png')); ?>" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all"><a href="https://www.tiktok.com/@itmatsuri"><img
                                class="w-10" src="<?php echo e(asset('img/tik-tok 1.png')); ?>" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all"><a
                            href="https://web.facebook.com/profile.php?id=100087921276894&_rdc=1&_rdr"><img
                                class="w-10" src="<?php echo e(asset('img/facebook 1.png')); ?>" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all">
                        <a href="https://wa.me/62895321259543">
                            <img class="w-10" src="<?php echo e(asset('img/whatsapp 1.png')); ?>" alt=""></a>
                    </div>
                </div>


            </footer><!-- End Footer -->
    </section>


    <script></script>

</body>

</html>
<?php /**PATH /home/uluumbch/code/itfest/resources/views/vote/hasil-singer.blade.php ENDPATH**/ ?>