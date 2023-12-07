<?php 
include("./connect/conn.php"); 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Channel Youtube | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body class="bg-gray-50">

  <?php include("./includes/navbarshowcase.php") ?>

  <section class="bg-white dark:bg-violet-200">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-9">
            <h1 class="max-w-2xl mb-4 text-2xl text-violet-950 font-semibold tracking-tight md:text-2xl xl:text-4xl">PortaLearn, Kunjungi Video dan Halaman Melalui Kami!</h1>
            <p class="max-w-3xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-600">Dengan PortaLearn, kami membuka pintu dunia pembelajaran langsung di ujung jari Anda. Nikmati akses cepat dan mudah ke berbagai video pembelajaran yang ada di Youtube yang menarik serta halaman pembelajaran yang informatif yang telah kami kumpulkan.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-violet-300 dark:focus:ring-violet-900">
                Jelajahi
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-violet-700 dark:border-violet-700 dark:hover:bg-violet-700 dark:hover:text-white duration-300 dark:focus:ring-gray-800">
                Kembali ke Halaman Utama!
            </a> 

        </div>
        <div class="hidden lg:mt-0 lg:col-span-3 lg:flex">
            <img src="./assets/img/1.png" alt="mockup">
        </div>                
    </div>
  </section>
  
  <!-- Content -->

  <?php include("./content/showcase/mtk.php") ?>



  <!-- Hero Section -->
  <section class="bg-white dark:bg-violet-200">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 bg-violet-200">
        <div class="bg-gradient-to-r from-violet-400 to-purple-500 border border-gray-200 rounded-xl p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-violet-200 dark:text-violet-600 mb-2">
                <svg class="w-2.5 h-2.5 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Kunjungi Youtube Kami!
            </a>
              <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold my-7">Jelajahi PortaLearn Lebih Jauh!</h1>
              <p class="text-lg font-normal text-amber-600 dark:text-gray-50 mb-7">Telusuri referansi belajarmu dari berbagai video youtube dan halaman website kapanpun dan dimanapun!</p>
              <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-violet-600 hover:bg-violet-500 focus:ring-4 focus:ring-violet-300 dark:focus:ring-violet-400">
                  Ke Beranda
              </a>
          </div>
        </div>
      </div>
    </section>

  <!-- Footer -->
  <?php include("./includes/footer.php") ?>
  

</body>
</html>