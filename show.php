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
  <title>Jelajahi Channel Youtube | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body>
  <!-- Navbar -->
  <?php include("./includes/navbarshowcase.php") ?>
  
  <!-- Hero Section -->
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

    <!-- More Content -->
    <?php include("./content/content.php") ?>

    <!-- Hero -->
    <?php include("./content/hero.php") ?>

<!-- Footer -->
<?php include("./includes/footer.php") ?>
</body>
</html>