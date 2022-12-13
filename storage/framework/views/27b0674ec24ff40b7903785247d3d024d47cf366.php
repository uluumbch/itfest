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
    <!-- jquery validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!-- sweat alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
            <h6 class="text-xl text-center"> CHOOSE YOUR FAVORITE SINGER</h6>
        </div>
        <div class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto mt-5">
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-3">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class=" shadow max-w-md">
                            <input type="radio" name="vote"value="<?php echo e($item->id); ?>" id="<?php echo e($item->id); ?>"
                                required="required" />
                            <label for="<?php echo e($item->id); ?>" class="cursor-pointer">

                                <div class="">
                                    <div class="max-w-md">
                                        <img src="<?php echo e(asset('images-sing/' . $item->foto)); ?>" alt="<?php echo e($item->nama); ?>"
                                            class="w-full">
                                    </div>
                                    <div class="text-center">
                                        <p class="font-bold py-6">Id Peserta : <?php echo e($item->id); ?></p>
                                        <P class="font-semibold py-3"><?php echo e($item->nama); ?></P>

                                    </div>
                                </div>
                            </label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="shadow max-w-md">
                        <input type="radio" name="vote" class="" value="2" id="2"
                            required="required" />
                        <label for="2" class="cursor-pointer">

                            <div class="">
                                <div class="max-w-md">
                                    <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">NO_PESERTA</p>
                                    <P class="font-semibold py-3">Nama_PESERTA</P>

                                </div>
                            </div>
                        </label>
                    </div>

                    <div class=" shadow max-w-md">
                        <div class="">
                            <div class="max-w-md">
                                <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                            </div>
                            <div class="text-center">
                                <p class="font-bold py-6">NO_PESERTA</p>
                                <P class="font-semibold py-3">Nama_PESERTA</P>

                            </div>
                        </div>
                    </div>
                    <div class=" shadow max-w-md">
                        <div class="">
                            <div class="max-w-md">
                                <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                            </div>
                            <div class="text-center">
                                <p class="font-bold py-6">NO_PESERTA</p>
                                <P class="font-semibold py-3">Nama_PESERTA</P>

                            </div>
                        </div>
                    </div>
                    <div class=" shadow max-w-md">
                        <div class="">
                            <div class="max-w-md">
                                <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                            </div>
                            <div class="text-center">
                                <p class="font-bold py-6">NO_PESERTA</p>
                                <P class="font-semibold py-3">Nama_PESERTA</P>

                            </div>
                        </div>
                    </div>
                    <div class=" shadow max-w-md">
                        <div class="">
                            <div class="max-w-md">
                                <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                            </div>
                            <div class="text-center">
                                <p class="font-bold py-6">NO_PESERTA</p>
                                <P class="font-semibold py-3">Nama_PESERTA</P>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex  bg-itmfourth sticky bottom-0">
                    <input name="kode_tiket" type="text" class="w-2/3 m-2 rounded-3xl px-3 outline-none"
                        placeholder="masukkan kode tiket">
                    <button type="submit"
                        class="px-3 py-4  w-1/3 mx-auto text-center border-l-2 border-white bg-itmthird">Vote!!
                    </button>
                    <div role="status" class="mx-auto my-2 hidden" id="loading">
                        <svg class="inline mr-2 w-10 h-10 text-gray-200 animate-spin fill-itmfourth"
                            viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </form>

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


    <script>
        $(document).ready(function() {

            $('form').on('submit', function(e) {

                e.preventDefault();

                let formData = {
                    'kode_tiket': $('input[name=kode_tiket]').val(),
                    // get data when radio chekced
                    'vote': $('input[name=vote]:checked').val(),
                    // get nama from input checked in label
                    'nama': $('input[name=vote]:checked').siblings('label').children('div').children(1)
                        .children('p')[1].innerText,
                    '_token': '<?php echo e(csrf_token()); ?>'
                };
                if (!formData.kode_tiket) return;
                $('button[type=submit]').hide();
                $('#loading').show();

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda akan memberikan vote untuk " + formData.nama +
                        " Anda hanya dapat vote 1 kali.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, saya yakin!',
                    cancelButtonText: 'Batalkan'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'post',
                            url: '/submitvotesing',
                            data: {
                                'kode_tiket': formData.kode_tiket,
                                '_token': formData._token,
                                'vote': formData.vote
                            },
                            dataType: 'json',
                            // encode: true,
                        }).done((data) => {
                            console.log("hasil submit");
                            console.log(data);
                            if (data['status']) {
                                // trigger sweet alert
                                Swal.fire({
                                    title: "Berhasil",
                                    iconHtml: '<img src="<?php echo e(asset('assets/IO-pose1.png')); ?>">',
                                    customClass: {
                                        icon: 'no-border',
                                    },
                                    background: '#ea00ffca',
                                    color: "#fff",
                                    text: data['message'],
                                    confirmButtonText: 'OK',
                                    confirmButtonColor: "#ffc600"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // show button and hide loading
                                        $('button[type=submit]').show();
                                        $('#loading').hide();
                                    }
                                });
                            }
                        }).fail((data) => {
                            console.log("gagal submit");
                            console.log(data);
                            // trigger sweet alert
                            Swal.fire({
                                title: "Gagal",
                                iconHtml: '<img src="<?php echo e(asset('assets/IO-pose2.png')); ?>">',
                                customClass: {
                                    icon: 'no-border',
                                },
                                background: '#ea00ffca',
                                color: "#fff",
                                text: data['message'],
                                confirmButtonText: 'OK',
                                confirmButtonColor: "#ffc600"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // show button and hide loading
                                    $('button[type=submit]').show();
                                    $('#loading').hide();
                                }
                            });
                        });
                    } else {
                        // show submit button
                        $('button[type=submit]').show();
                        // hide loading
                        $('#loading').hide();
                    }

                })



            });

        });


        // // close info
        // const closeInfo = document.getElementById("close-info");
        // const info = document.getElementById("info");
        // const openInfo = document.getElementById("open-info");
        // closeInfo.onclick = function() {
        //     info.style.display = "none";
        //     openInfo.style.display = "flex";
        // };
        // openInfo.onclick = function() {
        //     info.style.display = "block";
        //     openInfo.style.display = "none";
        // };
    </script>

</body>

</html>
<?php /**PATH /home/uluumbch/code/itfest/resources/views/vote/singer.blade.php ENDPATH**/ ?>