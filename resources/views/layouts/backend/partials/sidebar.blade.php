<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="{{ route('backend.dashboard.index') }}">
            <img src="{{ asset('assets/backend/images/logo-icon.png') }}" class="logo-icon" alt="App Name">
            <h5 class="logo-text"> Travelcrocs</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">DASHBOARD</li>
        <li>
            <a href="{{ route('backend.dashboard.index') }}" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="waves-effect">
                <i class="icon-home"></i> <span>Setting</span>
            </a>
        </li>
    </ul>
</div>
