@include('Admin.includes.header')

<div id="layoutSidenav">

@include('Admin.includes.sidebar')

<div id="layoutSidenav_content">
    @yield('content')
</div>

</div>
@include('Admin.includes.footer')