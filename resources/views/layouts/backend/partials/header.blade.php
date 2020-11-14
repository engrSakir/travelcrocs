<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top gradient-ibiza">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Type here">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form>
            </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item">
                <a href="{{ url('/') }}" target="_blank" class="btn-social btn-social-circle btn-outline-tumblr waves-effect waves-light m-1"><i class="fa fa-eye"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="{{ asset('assets/backend/images/avatars/avatar-17.png') }}" class="img-circle" alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('assets/backend/images/avatars/avatar-17.png') }}" alt="user avatar"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">{{ auth()->user()->name }}</h6>
                                    <p class="user-subtitle">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-item logout-btn"> <a style="cursor: pointer;"><i class="icon-power mr-2"></i> Logout</a> </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
