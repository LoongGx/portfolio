<x-guest-layout>
    <x-auth.container-card>
        <x-slot name="logo">    
            <h3 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-br from-blue-400 to-red-600">LOONG-PORTFOLIO</h3>
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 grid grid-row-3">
                <label for="email" class="">Email</label>
                <input id="email" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 grid grid-row-2">
                <div class="flow-root">
                    <label for="password" class="float-left">Password</label>
                    <a class="float-right text-blue-500" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <input id="password" class="shadow appearance-none border border-gray-200 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password">
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded" id="btnLogin">Log In</button>

            <div class="hr-sect">Signup Now</div>
            <div class="text-center">
                <a class="w-1/3 bg-transparent hover:bg-blue-500 text-blue-700 hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded inline-flex items-center" href="{{ route('register') }}">
                    <svg width="" height="1.3em" viewBox="0 0 16 16" class="bi bi-person-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zM13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    Register
                </a>
            </div>
        </form>
    </x-auth.container-card>
</x-guest-layout>