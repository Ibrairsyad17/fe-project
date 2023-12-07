<?php 

session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang <?= $_SESSION["username"]; ?> | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body>

<?php include("./includes/navbarshowcase.php") ?>
<section class="bg-white dark:bg-violet-200 h-screen">
    <div class="flex flex-col py-8 px-4 mx-auto max-w-screen-xl lg:pb-4 lg:pt-10 lg:px-6">
      <h1 class="text-3xl font-semibold">Selamat Datang, <?= $_SESSION["username"]; ?></h1>
      <div class="w-6/12 flex mt-6 mb-4">
        <button type="button" class="flex items-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 duration-300 dark:bg-green-600 dark:hover:bg-green-500 dark:focus:ring-green-800">
          <svg class="w-3.5 h-3.5 mr-2 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.109 17H1v-2a4 4 0 0 1 4-4h.87M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm7.95 2.55a2 2 0 0 1 0 2.829l-6.364 6.364-3.536.707.707-3.536 6.364-6.364a2 2 0 0 1 2.829 0Z"/>
          </svg>
          Edit Profil</button>

        <a href="logout.php" class="inline-flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 duration-300 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
          <svg class="w-3.5 h-3.5 mr-2 dark:text-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
          </svg>
          Logout</a>


      </div>
      <div class="mb-4 border-b border-gray-500 w-9/12">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg dark:hover:text-violet-600 hover:bg-blue-400 duration-300 hover-this text-gray-800" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Website</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg dark:hover:text-violet-600 hover:bg-blue-400 duration-300 hover-this text-gray-800 " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Youtube</button>
            </li>
        </ul>
      </div>
      <div id="default-tab-content w-9/12">
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-violet-100 w-9/12 border border-blue-600" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-violet-100 w-9/12 border border-blue-600" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
              <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
          </div>
      </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>