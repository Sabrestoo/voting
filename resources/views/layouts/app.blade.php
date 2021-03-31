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

    <main class="container flex mx-auto">
        <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut distinctio omnis quae sunt suscipit. Adipisci architecto consequatur, eligendi hic molestias necessitatibus qui unde voluptate! Ab, accusantium aliquam aliquid autem debitis eaque et facere id impedit magnam molestiae placeat quibusdam quisquam recusandae reiciendis rem saepe sed sint tenetur velit voluptatibus!</div>
        <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta dolores fuga id. Architecto, at consequatur culpa delectus ea eligendi eum excepturi, impedit labore laboriosam laborum libero minus odio porro quam quas quibusdam quis ratione recusandae reiciendis rem temporibus vero, voluptates! Blanditiis illum impedit non omnis quis rem, sapiente velit veniam!</div>
    </main>
    </body>
</html>
