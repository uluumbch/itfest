<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT MATSURI | Vote</title>


    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>

<body>
    <section class="bg-itmsecondary min-h-screen">
        <h2 class="text-center text-4xl font-bold">Vote to IT Matsuri Contest</h2>
        <div
            class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto rounded bg-itmprimary py-5 flex justify-evenly flex-col lg:flex-row">
            <div class="mb-2 w-1/2 mx-auto">
                <img src="<?php echo e(asset('assets/vote.png')); ?>" alt="" class="mx-auto ">
            </div>
            <div class="w-1/2 flex flex-col gap-4 justify-center mx-auto">
                <a href="/itmatsuri/vote/sing"
                    class="bg-itmfourth rounded-full my-auto p-2 flex max-w-md justify-evenly">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="lg:w-12 lg:h-12 w-8 h-8">
                            <path d="M8.25 4.5a3.75 3.75 0 117.5 0v8.25a3.75 3.75 0 11-7.5 0V4.5z" />
                            <path
                                d="M6 10.5a.75.75 0 01.75.75v1.5a5.25 5.25 0 1010.5 0v-1.5a.75.75 0 011.5 0v1.5a6.751 6.751 0 01-6 6.709v2.291h3a.75.75 0 010 1.5h-7.5a.75.75 0 010-1.5h3v-2.291a6.751 6.751 0 01-6-6.709v-1.5A.75.75 0 016 10.5z" />
                        </svg>
                    </div>
                    <h4 class="my-auto px-3 text-3xl font-semibold">Singing </h4>
                </a>

                <a href="/itmatsuri/vote/draw"
                    class="bg-itmfourth rounded-full my-auto p-2 flex max-w-md justify-evenly">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="lg:w-12 lg:h-12 w-8 h-8">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                        </svg>
                    </div>
                    <h4 class="my-auto px-3 text-3xl font-semibold">Drawing </h4>
                </a>

                <a href="/itmatsuri/vote/cosplay"
                    class="bg-itmfourth rounded-full my-auto p-2 flex max-w-md justify-evenly">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="lg:w-12 lg:h-12 w-8 h-8">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                    <h4 class="my-auto px-3 text-3xl font-semibold">Cosplay</h4>
                </a>
            </div>

        </div>
        <div class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto mt-5 bg-itmprimary rounded px-2">
            <h2 class="text-2xl text-center">Cara Vote</h2>
            <ul class="list-inside list-disc pl-1">
                <li>Pilih contest</li>
                <li>Pilih kontestan yang ingin kalian vote. Kontestan yang dipilih akan memiliki garis berwarna pink di
                    sekitar area</li>
                <li>Masukkan kode tiket kalian</li>
                <li>Klik tombol vote</li>
            </ul>
            <p>Vote hanya dapat dilakukan 1 kali/kontes/tiket</p>

        </div>
        <footer id="footer" class="w-full pb-5">
            <div class="flex justify-evenly bg-itmfourth rounded-full max-w-xl mx-auto mt-5">
                <div class="p-3 hover:scale-110 transition-all"><a
                        href="https://www.instagram.com/itfest.itsshowtime/"><img class="w-10"
                            src="<?php echo e(asset('img/instagram 1.png')); ?>" alt=""></a></div>
                <div class="p-3 hover:scale-110 transition-all"><a href="https://www.tiktok.com/@itmatsuri"><img
                            class="w-10" src="<?php echo e(asset('img/tik-tok 1.png')); ?>" alt=""></a></div>
                <div class="p-3 hover:scale-110 transition-all"><a
                        href="https://web.facebook.com/profile.php?id=100087921276894&_rdc=1&_rdr"><img class="w-10"
                            src="<?php echo e(asset('img/facebook 1.png')); ?>" alt=""></a></div>
                <div class="p-3 hover:scale-110 transition-all">
                    <a href="https://wa.me/62895321259543">
                        <img class="w-10" src="<?php echo e(asset('img/whatsapp 1.png')); ?>" alt=""></a>
                </div>
            </div>


        </footer><!-- End Footer -->
    </section>



</body>

</html>
<?php /**PATH /home/uluumbch/code/itfest/resources/views/vote/index.blade.php ENDPATH**/ ?>