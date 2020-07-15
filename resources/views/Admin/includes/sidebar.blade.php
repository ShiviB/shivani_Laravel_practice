<!-- sidebar: style can be found in sidebar.less -->
  
@php  $seg1=Request::segment(1);  @endphp
@php  $seg2=Request::segment(2);   @endphp

    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a href="{{ url('/home') }}"  class="nav-link <?php if( $seg1=='home'){ echo 'active'; } ?>"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard</a
                    >
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link <?php if($seg2=='' && $seg1=='posts'){ ?> active <?php } ?>" href="{{ url('/posts') }}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Posts</a
                    ><a class="nav-link" href="tables.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables</a
                    >
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>