<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../../assets/images/logos/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Core Css -->
    <link rel="stylesheet" href="../../assets/css/theme.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Artikel</title>
</head>

<body class="DEFAULT_THEME bg-white">
    <main>
        <!--start the project-->
        <div id="main-wrapper" class=" flex">
            <!-- sidebar -->
            <?php include("../../components/sidebar.php") ?>
            <div class="w-full page-wrapper overflow-hidden">

                <!--  Header Start -->
                <!-- navbar -->
                <?php include("../../components/navbar.php") ?>
                <!--  Header End -->

                <!-- Main Content -->
                <main class="h-full overflow-y-auto  max-w-full  pt-4">
                    <div class="container full-container py-5 flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row ">
                            <div class="w-full p-24">
                                <img src="../../assets/images/profile/rocket.png" class="w-full h-full" alt="profile" />
                            </div>
                            <div class="card w-full">
                                <div class="card-body">
                                    <form class="flex flex-col gap-6">
                                        <div>
                                            <label for=" input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Tittle</label>
                                            <input type="text" id="input-label-with-helper-text"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="Gorengan" aria-describedby="hs-input-helper-text">
                                        </div>
                                        <div>
                                            <label for=" input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Cover</label>
                                            <input type="file" id="input-label-with-helper-text"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="Masukan Artikel" aria-describedby="hs-input-helper-text">
                                        </div>
                                        <div>
                                            <label for="input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Hubungkan Kategori</label>
                                            <select name="category_id" id="category_is" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="Masukan Artikel" aria-describedby="hs-input-helper-text">
                                                <option value="">Category 1</option>
                                                <option value="">Category 2</option>
                                            </select>
                                        </div>
                                        <div>
                                            <div>
                                                <label for="input-label-with-helper-text"
                                                    class="block text-sm font-semibold mb-2 text-gray-600">Nama Artikel</label>
                                                <div>
                                                    <textarea name="content" id="content" placeholder="Hiii..." class="h-44 py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                        aria-describedby="hs-input-helper-text"></textarea>
                                                </div>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <button type="submit" name="submit" class="btn text-sm text-white font-medium w-fit hover:bg-blue-700">Tambah</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>


    </main>
    <!-- Main Content End -->

    </div>
    </div>
    <!--end of project-->
    </main>



    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../../assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
    <script src="../../assets/libs/@preline/dropdown/index.js"></script>
    <script src="../../assets/libs/@preline/overlay/index.js"></script>
    <script src="../../assets/js/sidebarmenu.js"></script>



</body>

</html>