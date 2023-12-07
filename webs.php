<?php 
  include("./connect/conn.php");
  session_start();
  require './query.php';

  $cats = execThis("SELECT * FROM categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jelajahi Website | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body class="bg-gray-50">

  <?php include("./includes/navbarshowcase.php") ?>

  <section class="bg-white dark:bg-violet-200">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:pt-20 lg:pb-5 lg:px-12">
          <a href="#" class="inline-flex ease-in-out duration-300 justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-violet-300 dark:text-violet-600 dark:hover:text-white dark:hover:bg-violet-400" role="alert">
              <span class="text-xs bg-violet-600 rounded-full text-white px-4 py-1.5 mr-3">Eksplor</span> <span class="text-sm font-medium">PortaLads Telah Rilis!</span> 
              <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </a>
          <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-gray-900 leading-10">Selamat Datang, PortaLads!</h1>
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Jelajahi referensi belajarmu dari berbagai video youtube dan halaman website kapanpun dan dimanapun!</p>
          <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 items-center">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Filter Kategori</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-semibold text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-4/12 p-2.5 dark:bg-violet-400 dark:border-violet-600 dark:placeholder-violet-400 dark:text-white dark:focus:ring-violet-500 dark:focus:border-violet-500">
              <option selected>Pilih Kategori</option>
              <?php foreach($cats as $category): ?>
              <option value="<?php echo $category["id"] ?>"><?= $category["cate"]; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div> 
      </div>
    </section>
  
  <!-- Content -->

  <?php include("./content/showcase/sites.php") ?>

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