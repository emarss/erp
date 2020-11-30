<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title> {{ config('app.name', "e-ERP") }} | {{ $pageTitle }}</title>
  @include('includes.head')
  @yield('styles')
  @livewireStyles()
</head>
<body>
  <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" data-has-scrolling-region>
    <div class="mdk-drawer-layout__content">
      <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
        <div class="mdk-header js-mdk-header bg-primary" data-fixed>
            <div class="mdk-header__content">
                @include('includes.nav_bar')
            </div>
        </div>
        <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
            @include('includes.messages')
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