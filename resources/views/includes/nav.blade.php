<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <h3>AdvanceBlog</h3>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Learn <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Discuss</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Share</a>
            </li>
        </ul>
    </div>
    @guest
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Join AdvanceBlog</a></li>
        </ul>
    @else
        <div class="float-right m-r-50">
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-fw fa-user-circle-o m-r-5"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-fw fa-bell m-r-5"></i>Notifications
                        </a>
                        <a class="dropdown-item" href="{{ route('manage.dashboard') }}">
                            <i class="fa fa-fw fa-cog m-r-5"></i>Manage
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-sign-out m-r-5"></i>Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    @endguest
</nav>
