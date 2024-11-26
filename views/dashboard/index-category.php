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
                            <div class="card-body flex justify-between gap-6">
                                <h6 class="text-lg text-gray-600 font-semibold">Tambah Kategori</h6>
                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-cyan-500 text-white hover:bg-cyan-600">
                                    <a href="create-category.php">Tambah Kategori</a>
                                </button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class=" lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                                    <div class="flex flex-col md:flex-row justify-between items-center">
                                        <h4 class="text-gray-600 text-lg font-semibold mb-6">Data Artikel</h4>
                                        <input type="text" id="input-label-with-helper-text"
                                            class="py-3 px-4 block md:w-44 w-full border-gray-200 rounded-md text-sm focus:border-blue-600 focus:ring-0 "
                                            placeholder="Cari..." aria-describedby="hs-input-helper-text">
                                    </div>
                                    <div class="relative overflow-x-auto">
                                        <!-- table -->
                                        <table class="text-left w-full whitespace-nowrap text-sm">
                                            <thead class="text-gray-700">
                                                <tr class="font-semibold text-gray-600">
                                                    <th scope="col" class="p-4">Id</th>
                                                    <th scope="col" class="p-4">Name</th>
                                                    <th scope="col" class="p-4">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="p-4 font-semibold text-gray-600 ">1</td>
                                                    <td class="p-4">
                                                        <h3 class=" font-semibold text-gray-600">Sunil Joshi</h3>
                                                    </td>
                                                    <td class="p-4">
                                                        <div class="flex gap-2">
                                                            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-cyan-500 text-white hover:bg-cyan-600">
                                                                Detail
                                                            </button>
                                                            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-teal-500 text-white hover:bg-teal-600">
                                                                Edit
                                                            </button>
                                                            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-red-500 text-white hover:bg-red-600">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex w-full justify-end items-center gap-2">
                                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-cyan-500 text-white hover:bg-cyan-600">
                                            <
                                                </button>
                                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-teal-500 text-white hover:bg-teal-600">
                                                    1
                                                </button>
                                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-teal-500 text-white hover:bg-teal-600">
                                                    2
                                                </button>
                                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-teal-500 text-white hover:bg-teal-600">
                                                    ...
                                                </button>
                                                <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-cyan-500 text-white hover:bg-cyan-600">
                                                    >
                                                </button>
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