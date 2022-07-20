<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">JobEntry</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
            <div class="nav-item dropdown">
                @guest
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                @else
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ auth()->user()->name }}</a>
                @endguest
                <div class="dropdown-menu rounded-0 m-0">
                    @auth
                        <a href="/home" class="dropdown-item">Profile</a>
                        <a  href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                             @csrf
                        </form>
                    @else
                        <a href="/login" class="dropdown-item">Login</a>
                        <a href="/register" class="dropdown-item">Register</a>
                    @endauth
                </div>
            </div>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block me-1">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
