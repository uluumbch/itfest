  <!-- section form popup modal -->
  <div
  class="fixed top-0 left-0 w-full h-full backdrop-blur-lg transition-all ease-in-out duration-500 hidden z-50 m-auto items-center justify-center p-12"
  id="modal">
  <div class="mx-auto w-full max-w-[550px] text-slate-100">
    <div role="status" id="loading">
      <svg aria-hidden="true"
        class="m-auto w-24 h-24 hidden text-gray-200 animate-spin dark:text-gray-600 fill-secondary"
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
    <form id="myFormContact" class="">
      <div class="mb-5">
        <label for="nama" class="mb-3 block text-base font-medium">
          Nama
        </label>
        <input type="text" name="nama" id="nama" placeholder="nama anda"
          class="w-full rounded-md border border-secondary bg-darkblue py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>
      <div class="mb-5">
        <label for="subject" class="mb-3 block text-base font-medium">
          Whatsapp
        </label>
        <input type="text" name="noWA" id="noWA" placeholder="628xxxxxx"
          class="w-full rounded-md border border-secondary bg-darkblue py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>
      <div class="mb-5">
        <label for="email" class="mb-3 block text-base font-medium">
          Email
        </label>
        <input type="email" name="email" id="email" placeholder="email.anda@mail.com"
          class="w-full rounded-md border border-secondary bg-darkblue py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>

      <div class="mb-5">
        <label for="message" class="mb-3 block text-base font-medium">
          Pesan
        </label>
        <textarea rows="4" name="pesan" id="message" placeholder="Isikan pertanyaan anda disini"
          class="w-full resize-y rounded-md border border-secondary bg-darkblue py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
      </div>
      <div>
        <button type="submit"
          class="hover:shadow-form rounded-md bg-secondary py-3 px-8 text-base font-semibold text-darkblue outline-none">
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
<!-- end section form popup modal -->

<!-- floating button -->

<div class="hidden fixed bottom-[100px] md:bottom-[90px] right-[30px] md:right-[30px] bg-secondary rounded-3xl p-2"
 id="popupContactUs">
 <div class="w-full text-center text-sm h-full">
   Memiliki pertanyaan lain? silakan hubungi kami disini
 </div>
</div>

<button  title="Contact Us" id="myContactBtn"
 class="hidden fixed bottom-[50px] md:bottom-[20px] right-[30px] md:right-[30px] bg-secondary w-16 md:w-20 h-16 md:h-20 z-50 rounded-full text-white text-4xl shadow-2xl hover:bg-secondarydarker">
 <svg class="p-2 w-12 md:w-16 m-auto" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
   <path
     d="M27.1776 15.6834C26.032 15.9074 24.7776 16.6498 23.792 18.3906C23.6882 18.5734 23.5494 18.734 23.3836 18.8631C23.2177 18.9923 23.028 19.0875 22.8254 19.1434C22.6227 19.1992 22.4111 19.2146 22.2025 19.1887C21.9938 19.1628 21.7924 19.096 21.6096 18.9922C21.4268 18.8884 21.2662 18.7496 21.1371 18.5838C21.0079 18.4179 20.9127 18.2282 20.8568 18.0256C20.8009 17.8229 20.7855 17.6113 20.8115 17.4027C20.8374 17.194 20.9042 16.9926 21.008 16.8098C22.4192 14.3266 24.4256 12.9602 26.5632 12.5442C28.5522 12.1686 30.6092 12.583 32.2976 13.6994C33.8464 14.7234 35.0976 16.397 35.136 18.4034C35.1776 20.4994 33.904 22.3906 31.5552 23.7794C29.9616 24.7202 29.3408 25.3602 29.0752 25.7858C28.8512 26.1442 28.8 26.4706 28.8 27.2002C28.8 27.6245 28.6314 28.0315 28.3314 28.3316C28.0313 28.6316 27.6243 28.8002 27.2 28.8002C26.7756 28.8002 26.3687 28.6316 26.0686 28.3316C25.7686 28.0315 25.6 27.6245 25.6 27.2002C25.6 26.3298 25.6448 25.2482 26.3584 24.0962C27.0304 23.0178 28.1792 22.0578 29.9264 21.0242C31.6384 20.0098 31.9488 19.0466 31.9392 18.4706C31.9232 17.8082 31.4848 16.9986 30.5312 16.3682C29.5439 15.715 28.342 15.4696 27.1776 15.6834ZM28 36.8002C28.6365 36.8002 29.247 36.5473 29.697 36.0973C30.1471 35.6472 30.4 35.0367 30.4 34.4002C30.4 33.7637 30.1471 33.1532 29.697 32.7031C29.247 32.2531 28.6365 32.0002 28 32.0002C27.3635 32.0002 26.753 32.2531 26.3029 32.7031C25.8528 33.1532 25.6 33.7637 25.6 34.4002C25.6 35.0367 25.8528 35.6472 26.3029 36.0973C26.753 36.5473 27.3635 36.8002 28 36.8002ZM27.2 3.2002C23.5728 3.19935 20.0083 4.14706 16.8605 5.94928C13.7127 7.7515 11.0909 10.3456 9.25524 13.474C7.41962 16.6025 6.43402 20.1566 6.39627 23.7837C6.35851 27.4107 7.2699 30.9846 9.03999 34.1506L6.49599 40.813C6.28424 41.3668 6.23053 41.9686 6.34085 42.5512C6.45116 43.1337 6.72116 43.6742 7.12074 44.1123C7.52031 44.5503 8.03373 44.8688 8.60373 45.0321C9.17372 45.1953 9.77788 45.1971 10.3488 45.037L18.3072 42.8066C21.1264 44.1386 24.2089 44.8198 27.3269 44.7998C30.4448 44.7797 33.5184 44.0589 36.3202 42.6907C39.122 41.3226 41.5803 39.342 43.5134 36.8955C45.4464 34.449 46.8047 31.5992 47.4878 28.557C48.1709 25.5147 48.1613 22.3578 47.4597 19.3197C46.758 16.2817 45.3824 13.4402 43.4344 11.0056C41.4865 8.57095 39.0161 6.60539 36.206 5.25432C33.3959 3.90325 30.318 3.20123 27.2 3.2002ZM9.59999 24.0002C9.60142 20.1648 10.8557 16.4348 13.172 13.3778C15.4882 10.3208 18.7397 8.10407 22.4317 7.06496C26.1237 6.02585 30.0541 6.22121 33.6248 7.62132C37.1956 9.02143 40.2112 11.5496 42.2129 14.8213C44.2146 18.0929 45.0928 21.9289 44.7139 25.7456C44.335 29.5622 42.7196 33.1506 40.1137 35.9648C37.5078 38.779 34.0539 40.6649 30.2776 41.3356C26.5012 42.0062 22.6092 41.425 19.1936 39.6802L18.6368 39.3922L9.48479 41.9554L12.5856 33.8402L12.176 33.1682C10.4869 30.4089 9.59521 27.2355 9.59999 24.0002ZM36.6816 54.4002C33.6874 54.4035 30.728 53.7589 28.0065 52.5105C25.285 51.2622 22.8659 49.4397 20.9152 47.1682C22.753 47.6661 24.6438 47.9422 26.5472 47.9906C29.5114 50.0842 33.0526 51.2057 36.6816 51.2002C39.568 51.2002 42.288 50.5058 44.688 49.2802L45.2448 48.9922L54.3968 51.5554L51.296 43.4402L51.7056 42.7682C53.3376 40.0994 54.2816 36.9634 54.2816 33.6002C54.2866 30.0468 53.2107 26.5758 51.1968 23.6482C51.1706 21.7445 50.9182 19.8507 50.4448 18.0066C52.6588 19.9562 54.4317 22.3554 55.6451 25.0444C56.8586 27.7333 57.4846 30.6501 57.4816 33.6002C57.4816 37.2834 56.5216 40.7458 54.8384 43.7506L57.3856 50.413C57.597 50.9665 57.6506 51.5679 57.5404 52.15C57.4302 52.7322 57.1605 53.2724 56.7614 53.7103C56.3622 54.1482 55.8494 54.4667 55.2799 54.6304C54.7104 54.794 54.1067 54.7963 53.536 54.637L45.5744 52.4066C42.8768 53.6866 39.8592 54.4002 36.6784 54.4002H36.6816Z"
     fill="#050634" />
 </svg>
</button>

<?php /**PATH C:\laragon\www\midtrans-laravel\resources\views/partials/contactModal.blade.php ENDPATH**/ ?>