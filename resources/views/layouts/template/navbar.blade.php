<nav class="py-5 sb-topnav navbar navbar-expand navbar-dark bg-black">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-1"><img src="{{ URL('images/brand.png') }}" alt="brand-nav"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
           
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
            <a class="button" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                                                    <button type="button" class="btn btn-outline-danger"> <i class="fas fa-sign-out-alt"></i> LogOut</a></button>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </ul>
            
        </nav>