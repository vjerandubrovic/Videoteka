<!-- HTML NAVIGACIJE HTMLA -->

<nav id="menu">
    
    <div class="wrapper">
        
        <div id="mobile_button"> 
        <img src="slike/logo/mobile_button.svg" alt="mobile button">
        </div>
        
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>

            <!-- Samo za Admina samo admin moze dodavati filmove -->

            @if (Auth::user() && Auth::user()->type == 'admin')

                <li><a href="{{ route('films.create') }}">Add movie</a></li>

            @endif

            <!-- Za registraciju ako nije login-an daj mogućnost Login i Register -->
            
            @guest

            @if (Route::has('login'))
            
            

                <li>
                
                    <a href="{{ route('login') }}">Login</a>

                </li>

                <li>
                
                @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                @endif
                
                </li>

               

            @endif

            <!-- Ako je login-an  prikazi ovo dolje odnosno Logout -->

            @else

            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                </div>
            </li>

            @endguest

        </ul>

     

    </div> 

</nav> 