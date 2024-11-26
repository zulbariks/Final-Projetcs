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
                        <div class="card">
                            <div class="card-body flex flex-col md:flex-row gap-3">
                                <div class="card w-full">
                                    <div class="card-body">
                                        <div class="avatar w-32 h-32 mx-auto">
                                            <img src="../../assets/images/profile/user-1.jpg" alt="" class="rounded-full  w-full h-full">
                                        </div>
                                        <div class="content flex flex-col justify-center items-center">
                                            <h4 class="text-gray-600 text-lg font-semibold">Zulqornain Mubarok</h4>
                                            <p class="text-gray-500 text-sm">Bergabung pada 02 Oktober</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-full">
                                    <div class="card-body">
                                        <form class="flex flex-col gap-6">
                                            <div>
                                                <label for="input-label-with-helper-text"
                                                    class="block text-sm font-semibold mb-2 text-gray-600">Nama Lengkap</label>
                                                <input type="text" id="input-label-with-helper-text" name="full_name"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                    placeholder="Anton" aria-describedby="hs-input-helper-text">
                                            </div>
                                            <div>
                                                <label for="input-label-with-helper-text"
                                                    class="block text-sm font-semibold mb-2 text-gray-600">Bio</label>
                                                <textarea name="bio" id="bio" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 " placeholder="Hallo nama saya...."></textarea>
                                            </div>
                                            <div>
                                                <label for="input-label-with-helper-text"
                                                    class="block text-sm font-semibold mb-2 text-gray-600">Jenis Kelamin</label>
                                                <select name="gender" id="gender" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 ">
                                                    <option value="">Laki-Laki</option>
                                                    <option value="">Perempuan</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="input-label-with-helper-text"
                                                    class="block text-sm font-semibold mb-2 text-gray-600">Avatar</label>
                                                <input type="file" id="input-label-with-helper-text" name="full_name"
                                                    class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                                    placeholder="Masukan Kategori" aria-describedby="hs-input-helper-text">
                                            </div>
                                            <button type="submit" name="submit" class="btn text-sm text-white font-medium w-fit hover:bg-blue-700">Update</button>
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