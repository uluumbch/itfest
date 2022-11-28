<!DOCTYPE html>
<html lang="id">

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
        Vote Sistem IT FEST
    </h1>
    <div class="w-full hidden justify-end cursor-pointer" id="open-info">
        <svg class="fill-slate-50 w-5 h-5 mr-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
        </svg>
    </div>
    <div class="relative text-slate-50 p-4 border-l-8 border-[#E900FF] bg-[#ea00ffca] rounded mx-4" id="info">
        <span class="absolute right-2 top-0 text-3xl cursor-pointer" id="close-info">&times;</span>
        <span class="font-semibold text-lg">Cara melakukan vote</span>
        <ol class="list-decimal pl-4">
            <li class="pl-2">
                Pilih gambar yang ingin di vote<br />note: Gambar yang anda pilih
                akan memiliki border kuning
            </li>
            <li class="pl-2">Masukkan kode tiket anda</li>
            <li class="pl-2">Submit</li>
        </ol>
        <div class="">
            <span>Informasi :</span>
            <li>Anda dapat klik pada gambar untuk memperbesar</li>

            <li>Anda hanya dapat vote sebanyak 1 kali</li>

            <li>
                Kode tiket bersifat case-sensitive. Artinya besar kecil huruf
                berpengaruh.
            </li>
        </div>
    </div>
    <?php if(!$data->isEmpty()): ?>
    <form>
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-row my-2 text-slate-200">
            <input type="radio" name="vote" value="<?php echo e($item->id); ?>" id="<?php echo e($item->id); ?>" class="hidden" required="required" />
            <label for="<?php echo e($item->id); ?>" class="flex bg-darkblue rounded w-full transition-all duration-200 mx-5 hover:shadow hover:shadow-secondary">
                <img src="<?php echo e(asset('images/'.$item->gambar)); ?>" alt="<?php echo e($item->nama); ?>" class="w-40 lg:w-60 hover:scale-105 transition-all duration-200 gambar" />

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
                </div>
            </label>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="mx-auto p-10 grid">
            <span class="font-medium text-center text-lg text-slate-100">Kode Tiket</span>
            <input type="text" name="kode_tiket" class="h-7 max-w-sm mx-auto form-input p-4 transition-all duration-200 focus:ring-2 focus:ring-secondary rounded-lg" />
            <button type="submit" class="bg-accent rounded-md mt-3 w-24 h-8 mx-auto text-slate-50">
                Vote!!!
            </button>
            <div role="status" class="mx-auto my-2 hidden" id="loading">
                <svg class="inline mr-2 w-10 h-10 text-gray-200 animate-spin fill-secondary" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>

    </form>
    <?php else: ?>
    <div class="p-5 text-slate-100 text-lg text-center">
        Belum ada vote untuk saat ini.
    </div>
    <?php endif; ?>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="image-modal" />
        <div id="caption"></div>
    </div>


  <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<script>
    $(document).ready(function() {
        // get input type radio with jquery
        // $('input[type=radio]').attr('required', true);


        $('form').on('submit', function(e) {

            e.preventDefault();

            let formData = {
                'kode_tiket': $('input[name=kode_tiket]').val(),
                // get data when radio chekced
                'vote': $('input[name=vote]:checked').val(),
                // get nama from input checked in label
                'nama': $('input[name=vote]:checked').siblings('label').children('span').text(),
                '_token': '<?php echo e(csrf_token()); ?>'
            };
            if (!formData.kode_tiket) return;
            // hide submit button after click
            $('button[type=submit]').hide();
            // show loading
            $('#loading').show();
            // prompt user with sweetalert is user sure to vote that name
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda akan memberikan vote untuk " + formData.nama + " Anda hanya dapat vote 1 kali.",
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
                        // headers: {
                        //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        // },
                        url: '<?php echo e(route('submitvote')); ?>',
                        data: {'kode_tiket': formData.kode_tiket, '_token': formData._token, 'vote': formData.vote},
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
                        if (!data['status']) {
                            // trigger sweet alert
                            Swal.fire({
                                title: "Gagal",
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
                                    // show submit button
                                    $('button[type=submit]').show();
                                    // hide loading
                                    $('#loading').hide();
                                }
                            })
                        }
                    }).fail((data) => {
                        Swal.fire({
                            title: "Koneksi Error",
                            iconHtml: '<img src="<?php echo e(asset('assets/IO-pose1.png')); ?>">',
                            customClass: {
                                icon: 'no-border',
                            },
                            background: '#ea00ffca',
                            color: "#fff",
                            // text: "Error menghubungi server. Periksa koneksi anda dan coba lagi..",
                            text: data['message'],
                            confirmButtonText: 'OK'
                        }).then(()=>{
                            // show submit button
                            $('button[type=submit]').show();
                            // hide loading
                            $('#loading').hide();
                        })
                    });
                }

            })



        });

    });


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
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    // when user click esc button close modal
    document.addEventListener("keydown", function(event) {
        if (event.key == "Escape") {
            modal.style.display = "none";
        }
    });

    // close info
    const closeInfo = document.getElementById("close-info");
    const info = document.getElementById("info");
    const openInfo = document.getElementById("open-info");
    closeInfo.onclick = function() {
        info.style.display = "none";
        openInfo.style.display = "flex";
    };
    openInfo.onclick = function() {
        info.style.display = "block";
        openInfo.style.display = "none";
    };
</script>
</body>

</html>
<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/vote.blade.php ENDPATH**/ ?>