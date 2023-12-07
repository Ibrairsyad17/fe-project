<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PortaLearn | Portal Ke Tempat Belajarmu</title>
  <?php include("./includes/head.php") ?>
</head>
<body>
<?php include("./includes/navbar.php") ?>

  <section class="bg-gradient-to-tr from-violet-200 to-purple-300">
      <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
          <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
          <img class="w-full hidden dark:block" src="./assets/img/img_lp1.png" alt="dashboard image">
          <div class="mt-4 md:mt-0">
              <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-violet-900">Cari Referensi Belajar Dari Channel YouTube dan Website Di PortaLearn.</h2>
              <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-600">Dengan PortaLearn, kami membuka pintu dunia pembelajaran langsung di ujung jari Anda. Nikmati akses cepat dan mudah ke berbagai video pembelajaran yang ada di Youtube yang menarik serta halaman pembelajaran yang informatif yang telah kami kumpulkan.</p>
              <a href="#" class="inline-flex items-center text-white bg-violet-700 duration-300 ease-in-out scale-100 hover:scale-105 focus:ring-4 focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-violet-900">
                  Jelajahi Sekarang!
                  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
          </div>
      </div>
  </section>

  <section class="bg-gradient-to-br from-violet-200 to-purple-300 antialiased">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
      <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-gray-900">
          Kami Menampilkan
        </h2>
        <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-700">
          Kami Mengumpulkan Semuanya Untukmu, Jelajahi Bersama Kami Sekarang
        </p>
      </div>

      <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
        <div class="space-y-4">
          <span
            class="bg-violet-300 text-violet-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
            Kunjungi Blog Kami!
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-gray-900">
            Kumpulan Blog
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-700">
            Bacaan harian yang menambah wawasan kamu setiap saat kapan pun dan dimanapun.
          </p>
          <a href="#" title=""
            class="text-gray-900 bg-violet-700 justify-center duration-300 ease-in-out inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:text-white dark:focus:ring-violet-800 scale-100 hover:scale-105"
            role="button">
            Kunjungi Langsung!
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>

        <div class="space-y-4">
          <span
            class="bg-violet-300 text-violet-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
            Jelajahi Sekarang
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-gray-900">
            Kumpulan Channel Youtube
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-700">
            Referensi Berbagai Channel Youtube Bisa Kamu Temukan Di Sini Kapan Pun dan Dimanapun.
          </p>
          <a href="#" title=""
            class="text-gray-900 bg-violet-700 justify-center duration-300 ease-in-out inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:text-white dark:focus:ring-violet-800 scale-100 hover:scale-105"
            role="button">
            Kunjungi Langsung!
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>

        <div class="space-y-4">
          <span
            class="bg-violet-300 text-violet-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
            Website Penuh Referensi
          </span>
          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-gray-900">
            Website
          </h3>
          <p class="text-lg font-normal text-gray-500 dark:text-gray-700">
            Referensi Berbagai Website Bisa Kamu Temukan Di Sini Kapan Pun dan Dimanapun Untuk Pembelajaran Kamu.
          </p>
          <a href="#" title=""
            class="text-gray-900 bg-violet-700 justify-centerduration-300 ease-in-out  inline-flex items-center focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:text-white dark:focus:ring-violet-800 scale-100 hover:scale-105 duration-300 ease-in-out"
            role="button">
            Kunjungi Langsung!
            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-tr from-violet-200 to-purple-300">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-gray-900">Jelajahi Sepenakmu PortaLads!</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-700">Dengan PortaLearn, kami membuka pintu dunia pembelajaran langsung di ujung jari Anda. Nikmati akses cepat dan mudah ke berbagai video pembelajaran yang ada di Youtube yang menarik serta halaman pembelajaran yang informatif yang telah kami kumpulkan.</p>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="./assets/img/img_lp2.png" alt="mockup">
        </div>                
    </div>
  </section>

  
  <?php include("./content/faq.php") ?>

  <aside aria-label="Related articles" class="py-8 lg:pb-24 lg:pt-10 bg-gradient-to-tr from-violet-200 to-purple-300 antialiased">
    <div class="px-4 mx-auto max-w-screen-xl">
      <h2 class="mb-8 text-2xl text-center font-bold text-gray-900 dark:text-gray-900">Tinjauan Blog Kami</h2>
      <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 place-items-center">
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png" class="mb-5 rounded-lg" alt="Image 1">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-gray-900">
                  <a href="#">Our first office</a>
              </h2>
              <p class="mb-4 text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-violet-700 hover:no-underline">
                  Baca Lebih Lanjut
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png" class="mb-5 rounded-lg" alt="Image 2">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-gray-900">
                  <a href="#">Enterprise design tips</a>
              </h2>
              <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-violet-700 hover:no-underline">
                  Baca Lebih Lanjut
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png" class="mb-5 rounded-lg" alt="Image 3">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-gray-900">
                  <a href="#">We partnered with Google</a>
              </h2>
              <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-violet-700 hover:no-underline">
                  Baca Lebih Lanjut
              </a>
          </article>
          <article class="max-w-xs">
              <a href="#">
                  <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png" class="mb-5 rounded-lg" alt="Image 4">
              </a>
              <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-gray-900">
                  <a href="#">Our first project with React</a>
              </h2>
              <p class="mb-4  text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone many changes! After months of preparation.</p>
              <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-violet-700 hover:no-underline">
                  Baca Lebih Lanjut
              </a>
          </article>
        </div>
    </div>
  </aside>
  
  <!-- Hero Section -->
    <section class="bg-gradient-to-br from-violet-200 to-purple-300">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 transparent">
        <div class="bg-gradient-to-r from-violet-400 to-purple-500 border border-gray-200 rounded-xl p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-violet-200 dark:text-violet-600 mb-2">
                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Kunjungi Youtube Kami!
            </a>
              <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold my-7">Jelajahi PortaLearn Lebih Jauh!</h1>
              <p class="text-lg font-normal text-amber-600 dark:text-gray-50 mb-7">Telusuri referensi belajarmu dari berbagai video youtube dan halaman website kapanpun dan dimanapun!</p>
              <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-violet-600 hover:bg-violet-500 focus:ring-4 focus:ring-violet-300 dark:focus:ring-violet-400">
                  Jelajahi
              </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="p-4 sm:p-6 bg-gradient-to-tr from-violet-200 to-purple-300">
    <div class="mx-auto max-w-screen-xl pt-2">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
                    <img src="./assets/img/logo_portal.png" class="mr-3 h-8" alt="FlowBite Logo"/>
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PortaLearn</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-12 sm:gap-6 sm:grid-cols-2">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Ikuti Kami</h2>
                    <ul class="text-gray-600 dark:text-white">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Instagram</a>
                        </li>
                        <li>
                            <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-600 dark:text-white">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-white lg:mt-8 lg:mb:4"/>
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-violet-800 sm:text-center dark:text-white">© 2023 <a href="https://flowbite.com" class="hover:underline">PortaLearn</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-white hover:text-white dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-white hover:text-white dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-white hover:text-white dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
                <a href="#" class="text-white hover:text-white dark:hover:text-white">
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
                  </svg>
                </a>
            </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>