<div class="wrapper">

    @include('layout.navbars.auth')

    <div class="main-panel">
        @include('layout.navbars.navs.auth')
        @yield('content')
        @include('layout.footer')
    </div>
</div>