$(document).ready(function () {
  // validasi untuk form kontak
  $("#myFormContact").validate({
    errorClass: "text-red-500",
    rules: {
      nama: {
        required: true,
        minlength: 2,
      },
      noWA: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 13,
      },
      email: {
        required: true,
        email: true,
      },
      message: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      nama: {
        required: "Mohon masukan nama anda",
        minlength: "Nama anda terlalu pendek",
      },
      email: "Mohon masukan alamat email yang valid",
      noWA: {
        required: "Mohon isikan nomor WhatsApp anda",
        number: "Nomor WhatsApp harus berupa angka",
        minlength: "Noomor WA harus diisi minimal 10 digit",
        maxlength: "Nomor WA maksimal 13 karakter",
      },

      message: {
        required: "Mohon isikan pesan dengan benar",
        minlength: "Pesan harus berisi minimal 10 karakter",
      },
    },
    submitHandler: function (form, event) {
      $("#myFormContact").addClass("hidden");
      $("#loading svg").removeClass("hidden");
      let formData = {
        waktu: new Date(),
        nama: $("#nama").val(),
        noWA: $("#noWA").val(),
        email: $("#email").val(),
        pesan: $("#message").val(),
      };

      $.ajax({
        type: "POST",
        url: "https://script.google.com/macros/s/AKfycbzKtcdhBa8qPdYplnA5q5r55bykod3ZCvoBa8zo7OQjYE3t_CjJzC5dHcwX38y-cRBoww/exec",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        Swal.fire(
          "Berhasil!",
          "Terimakasih telah mengirim pesan kepada kami!",
          "success"
        ).then(() => {
            // reset form
            $("#myFormContact")[0].reset();
          $("#myFormContact").removeClass("hidden");
          $("#loading svg").addClass("hidden");
        });
      });

      event.preventDefault();
    },
  });



  $(".clickme").click(function () {
    $(this).next().slideToggle();
    $(this).find("svg").toggleClass("rotate-180");
  });

  $("#mobile-nav").click(function () {
        $("#mobile-nav-content").toggleClass("h-36").addClass("grid");
    });

  // when scroll-btn click scroll to roadmap jquery
  $("#scroll-btn").click(function () {
    $("html, body").animate(
      {
        scrollTop: $("#roadmap").offset().top,
      },
      500
    );
  });

  // open modal when a user click
  $('#myContactBtn').click(function () {
    $("#modal").toggleClass("hidden").addClass("flex");
  });

  // jquery when user scrolls down 20px from the top of the document, show the button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      $("#myContactBtn").fadeIn();
    } else {
      $("#myContactBtn").fadeOut();
    }
  });

  // jquery when user scrolls to the end , show the popupContactUs id
  $(window).scroll(function () {
    if (
      $(this).scrollTop() >
      $(document).height() - $(window).height() - 10
    ) {
      $("#popupContactUs").fadeIn();
    } else {
      $("#popupContactUs").fadeOut();
    }
  });




});
