<div id="header-wrapper">

	<div id="head" class="container">
	 @if (Route::has('login')) 
        <div id="nav">
            @auth
						@if (Auth::user()->type = "admin")
						<a class="navi" href="{{ url('/admin') }}">Admin Panel</a>
						@endif
                <a class="navi" href="{{ url('/home') }}">Home</a>
            @else
                <a class="navi" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="navi" href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
		  
     @endif 
		<div id="logo">
			<h1><a href="#">IT blog</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="/" accesskey="1" title="">Homepage</a></li>
				<!-- <li><a href="#" accesskey="2" title="">Our Clients</a></li> -->
				<!-- <li><a href="#" accesskey="3" title="">About Us</a></li> -->
				<!-- <li><a href="#" accesskey="4" title="">Careers</a></li> -->
				<li><a href="/contact" accesskey="5" title="">Contact Me</a></li>
			</ul>
		</div>
	</div>
	</div>
	
