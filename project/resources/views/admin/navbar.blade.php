<div class="header-3">

            <div >
            </div>

            <nav class="navbar">
              <a href="{{url('home')}}">Home</a>
              
                <a href="{{url('reviews')}}">Reviews</a>
                

                @if(Route::has('login'))
                @auth
                @else
                <a href="{{url('login')}}">Sign In</a>
                <a href="{{url('register')}}">Sign Up</a>
                
                @endauth
                @endif
                      
            </nav>


        @if(Route::has('login'))
        @auth
        <div>   
            
            <nav class="navbar">
                
                    <x-dropdown-link :href="route('profile.edit')">
                    {{ Auth::user()->name }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
            
            </nav>

        </div>
        @else
        <div>
        </div>
        @endauth
        @endif

            

</div>