<!-- Start Header Area -->

	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="/category">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="/single-product">Product Details</a></li>
									<li class="nav-item"><a class="nav-link" href="/checkout">Product Checkout</a></li>
									<li class="nav-item"><a class="nav-link" href="/cart">Shopping Cart</a></li>
									<li class="nav-item"><a class="nav-link" href="/confirmation">Confirmation</a></li>

								</ul>
				
								
								

								 <!-- <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
										 <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
							</li> -->

							<!-- @if (Route::has('login'))
                @auth
                    
                       <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link" > Welcome {{ Auth::user()->name }}</a> </li>
                    @else
                       <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link">Login</a> </li>

                        @if (Route::has('register'))
                           <li class="nav-item"> <a href="{{ route('register') }}" class="nav-link" >Register</a> </li>

                        @endif
                    @endauth
                    
                
            @endif -->
							<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
						
						<!--<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
						</ul>-->
						@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

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
				</div>
			</nav>
		</div>
	
	</header>
	<!-- End Header Area -->



