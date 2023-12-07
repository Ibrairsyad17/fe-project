<section class="bg-white dark:bg-violet-200">
    <div class="flex flex-col py-8 px-4 mx-auto max-w-screen-xl lg:pb-4 lg:pt-10 lg:px-6">
        <div class="text-left lg:mb-10 mb-8">
            <h2 class="mb-1 text-3xl text-center lg:text-3xl tracking-tight font-semibold text-gray-900 dark:text-gray-900">Cari Channel Pilihanmu Lads!</h2>
        </div> 
        <div class="grid gap-8 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 place-items-center">

        <!-- Lakukan Perulangan Data di sini -->
            <?php 
                $contents = execThis("SELECT cate, channel_name, yt_id, description_channel, pict, category_id FROM channels INNER JOIN categories ON categories.id = channels.category_id");

                foreach ($contents as $content):
            ?>
            
            <div class="w-full max-w-sm bg-white border border-gray-400 rounded-xl dark:bg-violet-100 dark:hover:shadow-violet-300 duration-300 ease-in-out dark:border-violet-500 hover:shadow-xl">
                <div class="flex justify-end px-4 pt-4">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-violet-600 hover:bg-gray-100 dark:hover:bg-violet-300 focus:ring-2 focus:outline-none focus:ring-violet-200 dark:focus:ring-violet-700 rounded-lg text-sm p-1.5" type="button">
                        <span class="sr-only">Open dropdown</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-violet-200">
                        <ul class="py-2" aria-labelledby="dropdownButton">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-violet-300 dark:text-gray-900 dark:hover:text-violet-600">Detail Channel</a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg shadow-violet-300" src="./assets/img/profile/<?= $content["pict"]; ?>" alt="<?= $content["pict"]; ?>"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-gray-900"><?= $content["channel_name"]; ?></h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400"><?= $content["cate"]; ?></span>
                    <div class="flex mt-4 space-x-3 md:mt-6">
                        <a href="descchannel.php?yt_id=<?= $content["yt_id"] ?>" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-violet-700 rounded-lg hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 dark:bg-violet-600 dark:hover:bg-violet-700 dark:focus:ring-violet-800">Detail Channel</a>
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-violet-700 rounded-lg hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-violet-300 dark:bg-amber-500 dark:hover:bg-amber-400 dark:focus:ring-violet-8000">Tambah ke list</button>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>              
        </div> 
    </div>
  </section>