<?php 

    require 'query.php';

    if (isset($_POST["register"])) {
        
        if(reg_user($_POST) > 0) {
            header("Location: ./auth/success.php");
        }else if(reg_user($_POST) == -3) {
            header("Location: register.php?err=uname");
        }else if(reg_user($_POST) == -4) {
            header("Location: register.php?err=confirm");
        }          
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body>

<section class="bg-gradient-to-tr from-violet-200 to-purple-300 h-screen">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="../index.php" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
          <img class="w-8 h-8 mr-2" src="./assets/img/logo_portal.png" alt="logo">
          PortaLearn    
      </a>
      <?php if(!empty($_GET['err'])): ?>
        <?php if($_GET['err'] == "uname"): ?>
            <div class="p-4 mb-4 text-sm text-yellow-600 rounded-lg bg-yellow-50 border border-yellow-600" role="alert">
                <span class="font-bolf">Username telah dipakai!</span> Cari username lain yang sesuai.
            </div>
        <?php endif; ?>
        <?php if($_GET['err'] == "confirm"): ?>
            <div class="p-4 mb-4 text-sm text-red-600 rounded-lg bg-red-50 border border-red-600" role="alert">
                <span class="font-bolf">Kata Sandi tidak Sama!</span> Masukkan dengan teliti kata sandi anda.
            </div>
        <?php endif; ?>
      <?php endif; ?>
      <div class="w-full rounded-2xl shadow-lg shadow-violet-300 md:mt-0 sm:max-w-md xl:p-0 bg-gradient-to-tl from-violet-200 to-purple-300">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                  Buat akunmu sekarang!
              </h1>
              <form class="space-y-4 md:space-y-6" action="" method="post">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                      <input type="username" name="username" id="username" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata Sandi</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Konfirmasi Password</label>
                      <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" required="">
                  </div>
                  <button name="register" type="submit" class="w-full text-white bg-violet-600 hover:bg-violet-700 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Buat akun</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-700">
                      Sudah memiliki akun? <a href="login.php" class="font-medium text-primary-600 hover:underline dark:text-violet-500">Masuk di sini</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>