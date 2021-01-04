<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title> {{ config('app.name', "e-ERP") }} | {{ $pageTitle }}</title>
    @include('includes.head')
    @yield('styles')
    @livewireStyles()
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px"
        data-has-scrolling-region>
        <div class="mdk-drawer-layout__content">
            <div
                class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                <div class="mdk-header js-mdk-header bg-primary" data-fixed>
                    <div class="mdk-header__content">
                        <nav class="navbar navbar-expand-md navbar-dark d-flex-none">
                            <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                                <i class="material-icons align-middle md-36">short_text</i>
                            </button>
                            <div class="page-title m-0">{{ $pageTitle ?? "Dashboard" }}</div>
                            <div class="m-0 pl-2 feedback-container">
                                @yield('feedback')
                            </div>

                            <div class="collapse navbar-collapse" id="mainNavbar">
                                <ul class="navbar-nav ml-auto align-items-center">
                                    <li class="nav-item notifications d-flex align-self-center align-items-center"
                                        id="navbarNotifications">
                                        <a href="#" class="nav-link">
                                            <i class="material-icons align-middle">notifications</i>
                                        </a>
                                    </li>
                                    <li class="nav-item nav-divider">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            {{ Session::get('department')->name }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100 my-3">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="mdk-drawer__inner" data-simplebar data-simplebar-force-enabled="true">
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
    </div>
    @include('includes.modals')
    @include('includes.scripts')
    @yield('scripts')
    @livewireScripts()
</body>

</html>
