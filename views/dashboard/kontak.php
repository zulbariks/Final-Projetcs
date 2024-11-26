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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    <!-- Core Css -->
    <link rel="stylesheet" href="../../assets/css/theme.css" />
    <title>Home Category</title>
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
                        <div class="flex flex-col md:flex-row text-center">
                            <div class="w-full p-24">
                                <img src="../../assets/images/profile/rocket.png" class="w-full h-full" alt="profile" />
                            </div>
                            <div class="card w-full">
                                <div class="card-body">
                                    <form class="flex flex-col gap-6 text-start">
                                        <div>
                                            <label for="input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Alamat</label>
                                            <textarea name="address" id="address" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 " placeholder="Jalan kurang baguss..."></textarea>
                                        </div>
                                        <div>
                                            <label for="input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Instagram</label>
                                            <input type="text" id="input-label-with-helper-text" name="instagram"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="https://**&^%lakjsdf" aria-describedby="hs-input-helper-text">
                                        </div>
                                        <div>
                                            <label for="input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Whastapp</label>
                                            <input type="text" id="input-label-with-helper-text" name="whastapp"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="https://**&^%lakjsdf" aria-describedby="hs-input-helper-text">
                                        </div>
                                        <div>
                                            <label for="input-label-with-helper-text"
                                                class="block text-sm font-semibold mb-2 text-gray-600">Telegram</label>
                                            <input type="text" id="input-label-with-helper-text" name="telegram"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                placeholder="https://**&^%lakjsdf" aria-describedby="hs-input-helper-text">
                                        </div>
                                        <button type="submit" name="submit" class="btn text-sm text-white font-medium w-fit hover:bg-blue-700">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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