@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireStyles

</head>

<body class="h-screen">
    <div class="font-[sans-serif] h-full">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 items-center gap-4 h-full">
            <div
                class="max-md:order-1 lg:col-span-2 min-h-screen md:h-screen w-full h-full bg-blue-900 md:rounded-tr-xl md:rounded-br-xl lg:p-12 p-8">
                <img src="../img/logo-bg.png" class=" h-full object-contain block mx-auto rounded-3xl"
                    alt="login-image" />
            </div>
            <div class="">
                @livewire('create-user')

            </div>
        </div>
    </div>
    @livewireScripts

</body>

</html>



===============================================================================================

<div>
    <div class="w-full p-6">
        <h2 class="text-gray-900 text-3xl font-extrabold text-center">Create your account
        </h2>
        <form wire:submit.prevent='store'>
            @csrf
            <div class="mt-4">
                <label class="text-gray-800 text-[15px] mb-2 block">Input your name</label>
                <div class="relative flex items-center flex-col">
                    <input type="text" name="company_name"
                        class="form-control w-full text-sm text-gray-800 bg-gray-100
                    focus:bg-transparent px-4 py-3.5 rounded-md outline-blue-600 @error('name') is-invalid @enderror"
                        placeholder="Your name" value="{{ old('name') }}" wire:model="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-2">
                <label class="text-gray-800 text-[15px] mb-2 block">Input your email</label>
                <div class="relative flex items-center flex-col">
                    <input type="text" name="email"
                        class="form-control w-full text-sm text-gray-800 bg-gray-100
                    focus:bg-transparent px-4 py-3.5 rounded-md outline-blue-600 @error('email') is-invalid @enderror"
                        placeholder="Your email" value="{{ old('email') }}" wire:model="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-2">
                <label class="text-gray-800 text-[15px] mb-2 block">Create your password</label>
                <div class="relative flex items-center flex-col">
                    <input name="password" type="password"
                        class="form-control w-full text-sm text-gray-800 bg-gray-100 focus:bg-transparent px-4 py-3.5 
                        rounded-md outline-blue-600 @error('password') is-invalid @enderror"
                        placeholder="Enter password" wire:model='password' />
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-2">
                <label class="text-gray-800 text-[15px] mb-2 block">Phone number</label>
                <div class="relative flex items-center flex-col">
                    <input name="phone_number" type="text"
                        class="form-control w-full text-sm text-gray-800 bg-gray-100 focus:bg-transparent
                    px-4 py-3.5 rounded-md outline-blue-600 @error('phoneNumber') is-invalid @enderror"
                        placeholder="phone number" wire:model='phoneNumber'>
                    @error('phoneNumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-2">
                <label class="text-gray-800 text-[15px] mb-2 block">Address</label>
                <div class="relative flex items-center flex-col">
                    <input name="address" type="text"
                        class="form-control w-full text-sm text-gray-800 bg-gray-100 focus:bg-transparent
                    px-4 py-3.5 rounded-md outline-blue-600 @error('address') is-invalid @enderror"
                        placeholder="Your address" wire:model='address'>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-8">
                <button type="submit"
                    class="w-full py-3 px-6 text-sm tracking-wide rounded-md text-white 
                    bg-blue-600 hover:bg-blue-700 focus:outline-none hover:font-semibold">
                    Sign up
                </button>
            </div>
            <div class="flex justify-center pt-2">
                <a class="text-blue-600 font-semibold items-center hover:text-blue-800"
                    href="{{ route('login') }}">Already have an
                    account?</a>
            </div>
        </form>
    </div>
</div>




==============================================================================================

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Role</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    @stack('styles') {{-- Panggilan jika ada styles tambahan --}}
    @livewireStyles {{-- Pastikan hanya ini yang digunakan untuk Livewire Styles --}}
</head>

<body class="h-screen">
    <div class="font-[sans-serif] h-full">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 items-center gap-4 h-full">
            <div
                class="max-md:order-1 lg:col-span-2 min-h-screen md:h-screen w-full h-full bg-blue-900 md:rounded-tr-xl md:rounded-br-xl lg:p-12 p-8">
                {{-- Gunakan helper asset() --}}
                <img src="{{ asset('img/logo-bg.png') }}" class="h-full object-contain block mx-auto rounded-3xl"
                    alt="login-image" />
            </div>
            <div>
                {{-- Komponen Livewire --}}
                @livewire('select-role')
                <div class="flex items-center justify-center mt-9">
                    <a type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 
                        dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 font-sans font-semibold justify-center"
                        href="{{ route('login') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
    @stack('scripts') {{-- Panggilan jika ada scripts tambahan --}}
    @livewireScripts {{-- Pastikan hanya ini yang digunakan untuk Livewire Scripts --}}
</body>

</html>





