<?php 
    require './query.php';

    $ctgs = execThis("SELECT * FROM categories");

    foreach ($ctgs as $ctg):
?>
<section class="bg-white dark:bg-violet-200">
    <div class="flex flex-col py-8 px-4 mx-auto max-w-screen-xl lg:pb-4 lg:pt-10 lg:px-6">
        <div class="text-left lg:mb-10 mb-8">
            <h2 class="mb-1 text-3xl lg:text-2xl tracking-tight font-semibold text-gray-900 dark:text-gray-900"><?= $ctg["cate"] ?></h2>
        </div> 
        <div class="grid gap-8 lg:grid-cols-2">

        <!-- Lakukan Perulangan Data di sini -->
            <?php
                $cid = $ctg["id"]; 
                $mtk = execThis("SELECT cate, channel_name, yt_id, description_channel, pict, category_id FROM channels INNER JOIN categories ON categories.id = channels.category_id WHERE category_id = $cid LIMIT 3");

                foreach ($mtk as $m):
            ?>
            <article class="p-6 bg-violet-100 rounded-lg border border-violet-400 shadow-sm dark:bg-violet-100 dark:border-violet-400 hover:shadow-lg hover:shadow-violet-300 duration-300 h-72 flex box-border flex-col justify-between ease-in-out">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-violet-200 dark:text-violet-800">
                        <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        <?php echo $m["cate"]; ?>
                    </span>
                    <span class="text-sm">14 days ago</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-900"><a href="#"><?= $m["channel_name"] ?></a></h2>
                <p class="mb-5 font-light text-sm text-gray-500 dark:text-gray-400">
                    <?= $m["description_channel"] ?>
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="./assets/img/profile/<?= $m["pict"];?>" alt="<?= $m["pict"]; ?>" />
                        <span class="font-medium dark:text-gray-900">
                            <?= $m["channel_name"] ?>
                        </span>
                    </div>
                    <a href="descchannel.php?yt_id=<?= $m["yt_id"] ?>" class="inline-flex items-center font-medium text-primary-600 dark:text-violet-500 hover:underline">
                        Detail Channel
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>  
            <?php endforeach; ?>              
        </div>  
        <a href="show.php" class="self-center mt-10 p-3 rounded-lg inline-flex bg-violet-500 items-center scale-90 font-medium text-primary-600 dark:text-white hover:underline hover:scale-100 duration-300 hover:shadow-lg">
            Tampilkan Lebih Banyak
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
  </section>
<?php endforeach; ?>