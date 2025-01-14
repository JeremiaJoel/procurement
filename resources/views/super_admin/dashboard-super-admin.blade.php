<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Super Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100 font-sans font-semibold">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <x-super_admin.sidebar-dashboard></x-super_admin.sidebar-dashboard>
        <!-- Main Content -->
        <div class="flex-1 ml-64 overflow-y-auto p-6 relative z-10">
            <!-- Background Design -->
            <div class="absolute inset-0 bg-blue-900" style="clip-path: polygon(0 0, 100% 0, 100% 50%, 0 100%);">
            </div>
            <header class="flex justify-between items-center mb-6 relative z-10">
                <h1 class="text-2xl font-bold text-white">
                    Dashboard
                </h1>
                <div class="items-center">
                    <i class="fas fa-bell text-white mr-6">
                    </i>
                    <div class="flex items-center">
                        <a href="{{ route('logout') }}" class="text-white hover:bg-red-500 rounded-lg p-1">
                            Logout
                        </a>
                    </div>
                </div>
            </header>
            <div class="bg-white p-6 rounded-lg shadow-lg relative z-10">
                <nav class="mb-6">
                    <ul class="flex space-x-6">
                        <li>
                            <a class="text-red-600 border-b-2 border-red-600 pb-2" href="#">
                                My Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-600 pb-2" href="#">
                                Dashboard Staff
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-600 pb-2" href="#">
                                Dashboard E-Procurement
                            </a>
                        </li>
                    </ul>
                </nav>
                <section class="mb-6">
                    <h2 class="text-xl font-bold mb-4">
                        Overview
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        17
                                    </h3>
                                    <p class="text-gray-600">
                                        Total PR
                                    </p>
                                </div>
                                <i class="fas fa-file-alt text-blue-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        0
                                    </h3>
                                    <p class="text-gray-600">
                                        Total PO
                                    </p>
                                </div>
                                <i class="fas fa-shopping-cart text-orange-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        2
                                    </h3>
                                    <p class="text-gray-600">
                                        Total PO Outstanding
                                    </p>
                                </div>
                                <i class="fas fa-clipboard-list text-purple-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        1
                                    </h3>
                                    <p class="text-gray-600">
                                        Material Outstanding
                                    </p>
                                </div>
                                <i class="fas fa-star text-green-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="mb-6">
                    <h2 class="text-xl font-bold mb-4">
                        Payment Monitoring
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        17
                                    </h3>
                                    <p class="text-gray-600">
                                        Total Invoice
                                    </p>
                                </div>
                                <i class="fas fa-file-invoice text-blue-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        0
                                    </h3>
                                    <p class="text-gray-600">
                                        Petty Cash
                                    </p>
                                </div>
                                <i class="fas fa-money-bill-wave text-orange-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        2
                                    </h3>
                                    <p class="text-gray-600">
                                        Open Payment
                                    </p>
                                </div>
                                <i class="fas fa-folder-open text-purple-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center mb-4">
                                <div>
                                    <h3 class="text-2xl font-bold">
                                        1
                                    </h3>
                                    <p class="text-gray-600">
                                        Vendor Data
                                    </p>
                                </div>
                                <i class="fas fa-address-book text-green-500 text-3xl">
                                </i>
                            </div>
                            <a class="text-red-600 flex items-center" href="#">
                                Lihat Detail
                                <i class="fas fa-arrow-right ml-2">
                                </i>
                            </a>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="text-xl font-bold mb-4">
                        Grafik Payment Monitoring
                    </h2>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-bold">
                                Bulan
                            </h3>
                            <div class="flex items-center">
                                <span class="text-orange-500 mr-2">
                                    Total Invoice
                                </span>
                                <span class="text-green-500 mr-2">
                                    Open Payment
                                </span>
                                <span class="text-purple-500">
                                    Close Payment
                                </span>
                            </div>
                        </div>
                        <img alt="Bar chart showing payment monitoring data over several months"
                            src="https://placehold.co/600x300" />
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
