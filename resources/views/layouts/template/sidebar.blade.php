<div id="layoutSidenav_nav">

<nav class="sb-sidenav accordion sb-sidenav-dark bg-mdb-color darken-4" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Store</div>
        
            
            <a class="nav-link" href="{{ url('supplier') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-parachute-box"></i></div>
                Suppliers
            </a>

            @if (Auth::user()->is_admin == 1)
            <a class="nav-link" href="{{ url('user') }}">
            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Accounts
            </a>
            @endif

            <a class="nav-link" href="{{ url('transaction') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-cash-register"></i></div>
                Transactions
            </a>
            
            <a class="nav-link" href="{{ url('/item') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
                Inventory
            </a>

          
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        {{ Auth::user()->name }}
    </div>
</nav>
</div>
