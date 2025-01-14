<div class="md:w-1/2 p-8 relative flex flex-col justify-center bg-white">
    <div class="absolute top-0 left-0 w-40 h-40 bg-blue-900 rounded-full -ml-20 -mt-20">
    </div>
    <div class="absolute bottom-0 right-0 w-40 h-40 bg-red-500 rounded-full -mr-20 -mb-20">
    </div>
    <div class="text-center mb-8 relative z-10">
        <h2 class="text-2xl font-bold text-gray-800">
            SELECT A </h2>
        <h1 class="text-3xl font-bold text-blue-500">
            Role
        </h1>
    </div>
    <div class="text-center">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg inline-block w-60">
            <div class="space-y-8 mb-6">
                <div class="w-32 h-32 bg-white rounded-lg shadow-md flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-105 hover:outline-yellow-400 cursor-pointer mx-auto group"
                    wire:click.prevent="selectRole('super_admin')">
                    <i class="fas fa-wrench text-red-500 text-3xl mb-2 "></i>
                    <span class="text-sm font-sans font-semibold ">Super Admin</span>
                </div>
                <div wire:click.prevent="selectRole('admin')"
                    class="w-32 h-32 bg-white rounded-lg shadow-md flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-105 hover:outline-blue-600 cursor-pointer mx-auto group">
                    <i class="fas fa-pen text-red-500 text-3xl mb-2"></i>
                    <span class="text-sm font-sans font-semibold">Admin</span>
                </div>
                <div wire:click.prevent="selectRole('staff')"
                    class="w-32 h-32 bg-white rounded-lg text-red-500 shadow-md flex flex-col items-center justify-center p-4 transition-transform transform hover:scale-105 hover:bg-blue-500 cursor-pointer mx-auto group mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path
                            d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25
                            0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0
                            1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96
                            10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                    </svg>
                    <span class="text-sm font-sans font-semibold text-black">Staff</span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center text-red-500 hover:text-red-300 mt-6 relative z-10">
        <a href="{{ route('login') }}">
            Already have an account
        </a>
    </div>
</div>
