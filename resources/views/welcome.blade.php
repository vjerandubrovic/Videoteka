<!-- HTML SADRŽAJA HOME page -->

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

            <!-- nesemantički html element s bootstrap css-om class="content" -->
            <div class="content">

                <!-- semantički html element s css-om class="wrapper" -->
                <section class="wrapper">
                   
                    <!-- naslov 1 razine s css-om class="welcome" -->
                    <h1 class="welcome">Dobro došli!</h1>

                    <!-- naslov 1 razine s css-om class="titlep1" -->
                    <h2 class="titlep1">Filmovi po nazivu:</h2>
                    
                    <!-- nesemantički html s css-om class="clearfix"-->
                    <div class="clearfix">

                        <!-- varijabla $letters je array od a do z -->
                        <?php $letters = range('a','z');?>

                        <!-- foreach petlja za varijablu(array) $letters gdje su $v a,b,c... -->
                        @foreach($letters as $v)

                        <!-- varijabla $send je array od znakova sa vrijednosti znaka a = a -->
                        <?php $send = array($v=>$v);?>

                            <!-- paragraph s css-om class="znakovi" -->
                            <p class="znakovi">
                                
                                <!-- link na rutu films.show i pošalji GET metodom varijablu $send i link sadrži tekst echo-an $v = {{$v}} -->
                                <a  href="{{ route('films.show', $send)}}"> {{$v}}</a>
                                
                            </p>
                            
                        <!-- završetank foreach petlje -->
                        @endforeach
                    
                    </div>

                </section>

                <section class="wrapper">

                    <h3 id="title2">Popis svih filmova:</h3>

                    <div class="table1 clearfix">

                        <h4>Slika</h4>

                        <h4>Naslov filma</h4>

                        <h4>Godina</h4>

                        <h4>Trajanje</h4>

                    </div>

                    <div class="table1 clearfix">

                        <!-- foreach petlja za varijablu($films) $films poslan iz FilmsConroller-a -->
                        @FOREACH($films as $film)

                        <img src="/images/{{ $film->slika }}" alt="{{$film->naslov}}">

                        <h5>{{$film->naslov}}</h5>

                        <p>{{$film->godina}}.</p>

                        <p>{{$film->trajanje}} min</p>

                        <!-- završetank foreach petlje -->
                        @ENDFOREACH

                    </div>

                </section>

            </div>

        </div>
     
        <!-- ubaci footer iz layout/footer.blade.php -->
        @include('layout.footer')

    </body>

</html>
