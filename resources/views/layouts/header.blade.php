<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Point Of Sales</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" 
                    href="{{ route('home') }}" class="nav-link {{ $activeNavItem == 'home' ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" 
                    href="{{ route('penjualan') }}" class="nav-link {{ $activeNavItem == 'sales' ? 'active' : '' }}">Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" 
                    href="{{ route('user-profile', ['id' => 2, 'name' => 'Abiyyu Fiqlal']) }}" class="nav-link {{ $activeNavItem == 'profile' ? 'active' : '' }}">User</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" 
                    href="{{ route('food-beverage') }}" class="nav-link {{ $activeNavItem == 'food_beverage' ? 'active' : '' }}">Food Beverage</a>
                </li>
                <li><a class="dropdown-item" 
                    href="{{ route('beauty-health') }}" class="nav-link {{ $activeNavItem == 'beauty_health' ? 'active' : '' }}">Beauty Health</a>
                </li>
                <li><a class="dropdown-item" 
                    href="{{ route('home-care') }}" class="nav-link {{ $activeNavItem == 'home_care' ? 'active' : '' }}">Home Care</a> 
                </li>
                <li><a class="dropdown-item"
                    href="{{ route('baby-kid') }}" class="nav-link {{ $activeNavItem == 'baby_kid' ? 'active' : '' }}">Baby Kid</a>
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>