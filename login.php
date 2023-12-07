<?php 

    session_start();

    if (isset($_SESSION["login"])){
        header("Location: ./user.php");
        exit;
    }

    require './query.php';
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $uname_check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_num_rows($uname_check) === 1){
            $uname = mysqli_fetch_assoc($uname_check);

            // check password
            if(password_verify($password, $uname["password"])){
                // SET SESSION
                $_SESSION["login"] = true;
                $_SESSION["username"] = $uname["username"];
                header("Location: user.php?username=$username");
                exit;
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk | PortaLearn</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <?php include("./includes/head.php") ?>
</head>
<body>

<section class="bg-gradient-to-tr from-violet-200 to-purple-300 h-screen">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-violet-900 dark:text-violet-800">
          <img class="w-8 h-8 mr-2" src="./assets/img/logo_portal.png" alt="logo">
          PortaLearn    
      </a>
      <div class="w-full rounded-2xl shadow-lg shadow-violet-300 md:mt-0 sm:max-w-md xl:p-0 bg-gradient-to-bl from-violet-200 to-purple-300">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-gray-900">
                  Selamat Datang Kembali, PortaLads!
              </h1>
              <form class="space-y-4 md:space-y-6" action="" method="post">
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Username</label>
                      <input type="username" name="username" id="username" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" placeholder="Masukkan username kamu" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Kata Sandi</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-violet-600 focus:border-violet-600 block w-full p-2.5 dark:bg-violet-300 dark:placeholder-violet-500 dark:text-gray-900 dark:focus:ring-violet-500 dark:focus:border-violet-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                      </div>
                      <a href="#" class="text-sm font-medium text-violet-600 hover:underline dark:text-violet-500">Lupa Kata Sandi?</a>
                  </div>
                  <button type="submit" name="login" class="w-full text-white bg-violet-600 hover:bg-violet-700 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Masuk</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-700">
                      Belum punya akun? <a href="register.php" class="font-medium text-violet-600 hover:underline dark:text-violet-500">Registrasi</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>