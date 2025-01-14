<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

</head>

<body class="bg-gray-100 text-gray-800 font-sans font-semibold">
    <!-- Wrapper -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white text-white flex-shrink-0">
            <x-sidebar-product>
            </x-sidebar-product>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold">Product Menu</h2>
            </div>

            <!-- Button untuk menambah produk -->
            <div>
                <h1 class="text-2xl font-semibold mb-4 text-center">Tambah Produk Anda Disini</h1>
            </div>


            <!-- Charts and Orders -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Chart -->
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Expense Chart</h3>
                    <div class="h-48 bg-gray-200 rounded"></div>
                </div>

                <!-- Orders -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Orders</h3>
                    <div class="h-48 bg-gray-200 rounded-lg"></div>
                </div>
            </div>

            <!-- Summary Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold">Total Projects</h3>
                    <div class="h-40 bg-gray-200 rounded"></div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold">Total Vendors</h3>
                    <div class="h-40 bg-gray-200 rounded"></div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold">Total Products</h3>
                    <div class="h-40 bg-gray-200 rounded"></div>
                </div>
            </div>
        </main>
    </div>
    @livewireScripts

</body>


<script>
    < />

    <
    /html>
