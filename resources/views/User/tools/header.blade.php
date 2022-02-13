<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{('asset/User/assets/images/klassy-logo.png')}}" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('user.home')}}" class="active">Home</a></li>
                            {{-- <li class="scroll-to-section"><a href="#about">About</a></li> --}}
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="{{route('product.index')}}">Menu</a></li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="{{route('user.contact')}}">Contact Us</a></li>
                            @if (Auth::check())
                            <li class="submenu">
                                <a href="javascript:;">Profil</a>
                                <ul>
                                    <li><a href="{{route('product.cart')}}">Cart</a></li>
                                    <li><a href="{{route('profil.index')}}">Setting</a></li>
                                    <li><a href="{{route('profil.riwayat')}}">Riwayat</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @else
                            <li class="scroll-to-section"><a href="{{route('login')}}">Login</a></li> 
                            @endif
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>