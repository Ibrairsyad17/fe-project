<?php 

$channel_id = $_GET["yt_id"];

$id_url_channel = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=". $channel_id ."&key=AIzaSyCLCkXBgf9VWMGoZ8x6Wy-5RmN7h1A81yo";

$id_url_videos = "https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyCLCkXBgf9VWMGoZ8x6Wy-5RmN7h1A81yo&channelId=". $channel_id ."&maxResults=1&order=date";

$id_url_videos_popular = "https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyCLCkXBgf9VWMGoZ8x6Wy-5RmN7h1A81yo&channelId=". $channel_id ."&maxResults=3&order=viewCount";

function get_api_data($url){
  $api_curl = curl_init();
  curl_setopt($api_curl, CURLOPT_URL,$url);
  curl_setopt($api_curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($api_curl);
  curl_close($api_curl);

  return json_decode($result, true);
}

$result_channel = get_api_data($id_url_channel);
$result_videos = get_api_data($id_url_videos);

$yt_title = $result_channel["items"][0]["snippet"]["title"];
$yt_description = $result_channel["items"][0]["snippet"]["description"];
$yt_pict = $result_channel["items"][0]["snippet"]["thumbnails"]["medium"]["url"];
$yt_view = $result_channel["items"][0]["statistics"]["viewCount"];
$yt_count = $result_channel["items"][0]["statistics"]["videoCount"];
$yt_subs = $result_channel["items"][0]["statistics"]["subscriberCount"];

$latest_videos_id = $result_videos["items"][0]["id"]["videoId"];

$data_vid = [];
$popular_vid = get_api_data($id_url_videos_popular);

for ($i = 0; $i < count($popular_vid["items"]); $i++) {
    $data_vid[] = $popular_vid["items"][$i]["id"]["videoId"];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $yt_title ?> | PortaLearn</title>
  <?php include("./includes/head.php") ?>
</head>
<body class="bg-gray-50 ">
  <!-- Navigation Bar -->
  <?php include("./includes/navbarshowcase.php") ?>

  <!-- Channel Description -->
  <section class="bg-white dark:bg-violet-200">
      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:pt-20 lg:pb-5 lg:px-12">
          <a href="https://www.youtube.com/channel/<?= $channel_id ?>" class="inline-flex ease-in-out duration-300 justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-violet-300 dark:text-violet-600 dark:hover:text-white dark:hover:bg-violet-400" role="alert">
              <span class="text-xs bg-violet-600 rounded-full text-white px-4 py-1.5 mr-3">Eksplor</span> <span class="text-sm font-medium">Kunjungi Youtube Channel!</span> 
              <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </a>
          <img class="w-24 h-24 my-5 rounded-full shadow-lg shadow-violet-300 mx-auto" src="<?= $yt_pict; ?>" alt="<?= $yt_pict; ?>"/>
          <h1 class="mb-4 mt-7 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-gray-900 leading-10"><?= $yt_title ?></h1>
          <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-500">Total video yang dibuat: <b><?= $yt_count ?></b></p>
          <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="https://www.youtube.com/channel/<?= $channel_id ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium scale-100 hover:scale-110 duration-300 ease-in-out text-center text-white rounded-lg dark:bg-violet-700 focus:ring-4 focus:ring-primary-300 dark:focus:ring-violet-900">
                Kunjungi Channel
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-violet-900 rounded-lg border border-violet-300 hover:bg-violet-100 focus:ring-4 focus:ring-violet-100 dark:text-violet-600 dark:hover:text-white duration-300 ease-in-out dark:border-violet-700 dark:hover:bg-violet-700 dark:focus:ring-violet-800 scale-100">
                <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                <?= $yt_view ?> Penayangan
            </a> 
          </div>
        </div> 
      </div>
    </section>
  
    
  <section class="bg-white dark:bg-violet-200">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
          <div class="flex flex-col justify-center">
              <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl dark:text-gray-900">Tentang <?= $yt_title ?></h1>
              <p class="mb-8 text-lg font-normal text-gray-500 lg:text-lg dark:text-gray-500"><?= $yt_description ?></p>
              <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="https://www.youtube.com/channel/<?= $channel_id ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium scale-100 hover:scale-110 duration-300 ease-in-out text-center text-white rounded-lg dark:bg-violet-700 focus:ring-4 focus:ring-primary-300 dark:focus:ring-violet-900">
                  Kunjungi Channel
                  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </a>
              <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-violet-900 rounded-lg border border-violet-300 hover:bg-violet-100 focus:ring-4 focus:ring-violet-100 dark:text-violet-600 dark:hover:text-white duration-300 ease-in-out dark:border-violet-700 dark:hover:bg-violet-700 dark:focus:ring-violet-800 scale-100">
                  <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                  <?= $yt_subs ?> Subcribers
              </a>  
            </div>
          </div>
          <div>
              <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" src="https://www.youtube.com/embed/<?= $latest_videos_id ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
  </section>
  
  <section class="bg-white dark:bg-violet-200">
      <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 flex flex-col ">
        <h2 class="mb-10 text-3xl text-center lg:text-3xl tracking-tight font-semibold text-gray-900 dark:text-gray-900">Video terpopuler dari <?= $yt_title; ?></h2>
        <div class="flex flex-wrap">
            <?php foreach($data_vid as $vid): ?>
                <iframe class="mx-auto w-full lg:max-w-xl h-20 mt-10 rounded-lg sm:h-96 shadow-xl" src="https://www.youtube.com/embed/<?= $vid ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php endforeach; ?>
        </div>
        

      </div>
  </section>

  <aside aria-label="Related articles" class="py-8 lg:pb-24 lg:pt-10 bg-gray-50 dark:bg-violet-200">
  <div class="px-4 mx-auto max-w-screen-xl">
      <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-gray-900">Related articles</h2>
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

<?php include("./includes/footer.php") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>