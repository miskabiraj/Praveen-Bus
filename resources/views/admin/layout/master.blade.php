@include('admin.layout.header')
@yield('style')
    @include('admin.layout.navigation')
        @include('master.error')
            @yield('content')

@include('admin.layout.footer')





