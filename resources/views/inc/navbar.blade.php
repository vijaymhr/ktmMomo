
	   


      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">   <img src="{{ asset('images/logo3.png') }}">

		  </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
	        	<li class="nav-item"><a href="/aboutUs" class="nav-link">About Us</a></li>
	        	<li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
			  <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

							<a class="dropdown-item" target="_blank" rel="noopener noreferrer" href="/foods">Admin</a>
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


       
			  {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#feedback">
				Any Questions?
			  </button> --}}
			  
			  
	        </ul>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
