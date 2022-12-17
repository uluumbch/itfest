<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT MATSURI | Favorite Cosplayer</title>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- sweat alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>

    @vite('resources/css/app.css')

</head>

<body>
    <section class="bg-itmsecondary">
        <div class="w-[calc(100%_-_10rem)] mx-auto rounded bg-itmprimary py-5">
            <img src="{{ asset('img/logo2.png') }}" alt="" class="mx-auto rounded-full mb-2">
            <h6 class="text-xl text-center"> OUR FAVORITE SINGER</h6>
        </div>
        <div class="w-[calc(100%_-_2rem)] lg:w-[calc(100%_-_10rem)] mx-auto mt-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-3">
                @foreach ($data as $key => $item)
                    @if ($key == 0)
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
                                    <img src="{{ asset('images-cosplay/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : {{ $item->id }}</p>
                                    <P class="font-semibold py-3">{{ $item->nama }}</P>
                                    <P class="font-medium py-3">{{ $item->jumlah_vote }} Vote</P>

                                </div>
                            </div>
                        </div>
                    @elseif($key == 1)
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

                                    <img src="{{ asset('images-cosplay/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                        class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : {{ $item->nomor }}</p>
                                    <P class="font-semibold py-3">{{ $item->nama }}</P>
                                    <P class="font-medium py-3">{{ $item->jumlah_vote }} Vote</P>

                                </div>
                            </div>
                        </div>
                    @elseif($key == 2)
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
                                    <img src="{{ asset('images-cosplay/' . $item->gambar) }}"
                                        alt="{{ $item->nama }}" class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : {{ $item->id }}</p>
                                    <P class="font-semibold py-3">{{ $item->nama }}</P>
                                    <P class="font-medium py-3">{{ $item->jumlah_vote }} Vote</P>

                                </div>
                            </div>
                        </div>
                    @else
                        <div class=" shadow max-w-md">
                            <div class="">
                                <div class="max-w-md">
                                    <img src="{{ asset('images-cosplay/' . $item->gambar) }}"
                                        alt="{{ $item->nama }}" class="w-full">
                                </div>
                                <div class="text-center">
                                    <p class="font-bold py-6">No. Peserta : {{ $item->id }}</p>
                                    <P class="font-semibold py-3">{{ $item->nama }}</P>
                                    <P class="font-medium py-3">{{ $item->jumlah_vote }} Vote</P>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

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


    <script></script>

</body>

</html>
