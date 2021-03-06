<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans text-gray-900 text-sm bg-gray-200">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#">Logo</a>
    <div class="flex">
        @if (Route::has('login'))
            <div class="htop-0 right-0 px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#"><img src={{ asset("assets/images/portrait.png") }} alt="" class="w-10 h-10 rounded-full"></a>
    </div>
</header>

<main class="container flex mx-auto" style="max-width:1000px">
    <div class="w-70 mr-5">Add idea form goes here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aliquid animi asperiores at ex
        illum, iusto laborum maiores minima minus nemo nobis odio perferendis provident qui quia quod repellendus sequi sunt. Aperiam culpa ea et facilis nam
        quam recusandae.
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-300">
                <li><a href="#" class="border-b-4 border-blue-600 pb-3">All Ideas (87)</a></li>
                <li><a href="#" class="text-gray-400 border-gray-300 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Considering</a></li>
                <li><a href="#" class="text-gray-400 border-gray-300 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">In Progress</a></li>
            </ul>

            <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 border-gray-300">
                <li><a href="#" class="text-gray-400 border-gray-300 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Implemented</a></li>
                <li><a href="#" class="text-gray-400 border-gray-300 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-600">Closed</a></li>
        </nav>

        <div class="mt-8">
            {{ $slot  }}
        </div>
    </div>

</main>
</body>
</html>
