<div class="w-64 bg-white h-full shadow-lg fixed z-20">
    <div class="p-6">
        <div class="flex flex-col items-start mb-6">
            <span class="text-xl font-bold text-red-600">
                {{ Auth::user()->name }}
            </span>
            <p class="text-sm font-bold">Super Admin</p>
            <hr class="my-8 z-20">

        </div>
        <nav>
            <ul class="font-sans">
                <li class="mb-2">
                    <a class="flex items-center text-white bg-red-500 rounded-lg p-2 tracking-wider" href="#">
                        <i class="fas fa-tachometer-alt mr-3">
                        </i>
                        Dashboard
                    </a>
                </li>
                <li class="mb-2">
                    <a class="flex items-center text-gray-700 hover:text-white hover:bg-red-500 rounded-lg p-2 tracking-wide transition-all"
                        href="#">
                        <i class="fas fa-file-alt mr-3">
                        </i>
                        Barang
                    </a>
                </li>
                <li class="mb-2">
                    <a class="flex items-center text-gray-700 hover:text-white hover:bg-red-500 rounded-lg p-2 tracking-wide transition-all"
                        href="{{ route('menuManajemenUser') }}">
                        <i class="fas fa-file-alt mr-3">
                        </i>
                        Manajamen User
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
