<!-- HTML SADRŽAJA CONTENTA -->

<!doctype html>

<!-- Jezik na stranici -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        
        <!-- html meta za znakove -->
        <meta charset="utf-8">

        <!-- html meta za mobilne uređaje -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bookmark traka -->
        <title>Videoteka</title>

        <!-- Styles / CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   
    </head>
    
    <body>

        <!-- ubaci navigaciju iz layout/nav.blade.php -->
        @include('layout.nav')

        <main id="content" class="wrapper">

            <div class="content">
                
                <div class="m-b-md">

                    <!-- ubaci flashMessage iz layout/message.blade.php -->
                    @include('layout.message')

                    <!-- ubaci sadržaj iz @section('content') npr iz /movies/index.blade.php -->
                    @yield('content')

                    <!-- ubaci flashMessage iz layout/errors.blade.php -->
                    @include('layout.errors')
                
                </div>

            </div>
        
        </main>

        <!-- ubaci footer iz layout/footer.blade.php -->
        @include('layout.footer')

    </body>
</html>