<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT MATSURI | Vote Favorite Drawing</title>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- jquery validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <!-- sweat alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

    @vite('resources/css/app.css')
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
            <img src="{{ asset('img/logo2.png') }}" alt="" class="mx-auto rounded-full mb-2">
            <h6 class="text-xl text-center"> CHOOSE YOUR FAVORITE DRAWING</h6>
        </div>
        <div class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto mt-5">
            <form action="">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-3">
                    <div class=" shadow max-w-md">
                        <input type="radio" name="vote" class="" value="1" id="1"
                            required="required" />
                        <label for="1" class="cursor-pointer">

                            <div class="">
                                <div class="max-w-md">
                                    <img src="https://via.placeholder.com/600x300" class="w-full" alt="">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">NO_PESERTA</p>
                                    <P class="font-semibold py-3">Nama_PESERTA</P>
                                    <P class="font-semibold py-3">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Corporis, nemo odio! Voluptas quasi adipisci amet dolore velit nisi iusto
                                        quae suscipit placeat? Vitae a vel iure laboriosam similique laudantium soluta
                                        dolorem quisquam excepturi ipsam earum natus saepe eum, dolorum expedita?</P>

                                </div>
                            </div>
                        </label>
                    </div>
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
                    <input type="text" class="w-2/3 m-2 rounded-3xl px-3 outline-none"
                        placeholder="masukkan kode tiket">
                    <button type="submit"
                        class="px-3 py-4  w-1/3 mx-auto text-center border-l-2 border-white bg-itmthird">Vote!!</button>
                </div>
            </form>

            <footer id="footer" class="w-full pb-5">
                <div class="flex justify-evenly bg-itmfourth rounded-full max-w-xl mx-auto mt-5">
                    <div class="p-3 hover:scale-110 transition-all"><a
                            href="https://www.instagram.com/itfest.itsshowtime/"><img class="w-10"
                                src="{{ asset('img/instagram 1.png') }}" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all"><a href="https://www.tiktok.com/@itmatsuri"><img
                                class="w-10" src="{{ asset('img/tik-tok 1.png') }}" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all"><a
                            href="https://web.facebook.com/profile.php?id=100087921276894&_rdc=1&_rdr"><img
                                class="w-10" src="{{ asset('img/facebook 1.png') }}" alt=""></a></div>
                    <div class="p-3 hover:scale-110 transition-all">
                        <a href="https://wa.me/62895321259543">
                            <img class="w-10" src="{{ asset('img/whatsapp 1.png') }}" alt=""></a>
                    </div>
                </div>


            </footer><!-- End Footer -->
    </section>

</body>

</html>
