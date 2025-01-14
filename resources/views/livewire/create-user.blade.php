<div class="md:w-1/2 p-8 relative flex flex-col justify-center bg-white">
    <div class="absolute top-0 left-0 w-40 h-40 bg-blue-900 rounded-full -ml-20 -mt-20">
    </div>
    <div class="absolute bottom-0 right-0 w-40 h-40 bg-red-500 rounded-full -mr-20 -mb-20">
    </div>
    <div class="text-center mb-8 relative z-10">
        <h2 class="text-2xl font-bold text-gray-800">
            CREATE AN </h2>
        <h1 class="text-3xl font-bold text-red-500">
            Account
        </h1>
    </div>
    <form wire:submit.prevent='store' class="relative z-10">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">
                <i class="fas fa-user absolute mt-3 ml-3 text-gray-400">
                </i>
                <input
                    class="form-control pl-10 pr-4 py-3 rounded-lg w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') is-invalid @enderror"
                    placeholder="nama" type="name" value="{{ old('name') }}" wire:model="name" />
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                <i class="fas fa-user absolute mt-3 ml-3 text-gray-400">
                </i>
                <input
                    class="form-control pl-10 pr-4 py-3 rounded-lg w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') is-invalid @enderror"
                    placeholder="masukan email" type="email" value="{{ old('email') }}" wire:model="email" />
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                <i class="fas fa-lock absolute mt-3 ml-3 text-gray-400">
                </i>
                <input
                    class="form-control pl-10 pr-4 py-3 rounded-lg w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') is-invalid @enderror"
                    placeholder="Buat password anda" type="password" value="{{ old('password') }}"
                    wire:model="password" />
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                <i class="fas fa-user absolute mt-3 ml-3 text-gray-400">
                </i>
                <input
                    class="form-control pl-10 pr-4 py-3 rounded-lg w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phoneNumber') is-invalid @enderror"
                    placeholder="Nomor Telepon" type="phoneNumber" value="{{ old('phoneNumber') }}"
                    wire:model="phoneNumber" />
                @error('phoneNumber')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700">
                <i class="fas fa-user absolute mt-3 ml-3 text-gray-400">
                </i>
                <input
                    class="form-control pl-10 pr-4 py-3 rounded-lg w-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('address') is-invalid @enderror"
                    placeholder="Alamat" type="address" value="{{ old('address') }}" wire:model="address" />
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <button
            class="bg-gradient-to-r from-red-500 to-blue-950 text-white font-bold py-3 rounded-lg w-full shadow-lg hover:from-red-600 hover:to-blue-600">
            SIGN UP
        </button>
    </form>
    <div class="text-center text-red-500 hover:text-red-300 mt-6 relative z-10">
        <a href="{{ route('login') }}">
            Already have an account
        </a>
    </div>
</div>
