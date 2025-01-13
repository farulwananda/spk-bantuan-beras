<nav class="mb-4 navbar navbar-expand navbar-light bg-navbar topbar static-top">
    <button id="sidebarToggleTop" class="mr-3 btn btn-link rounded-circle">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="ml-auto navbar-nav">
        <div class="p-3 shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="searchDropdown">
            <form class="navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small"
                        placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2"
                        style="border-color: #3f51b5;">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('assets/img/boy.png') }}" style="max-width: 60px">
                <span class="ml-2 text-white d-none d-lg-inline small">{{ Auth::user()->name }}</span>
            </a>
            <div class="shadow dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="mr-2 text-gray-400 fas fa-sign-out-alt fa-sm fa-fw"></i>
                        Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
