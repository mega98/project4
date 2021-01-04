@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp

<nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="dashboard"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="produk"
                                aria-expanded="false"><i class="nav-icon fas fa-th"></i><span
                                    class="hide-menu">Produk
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="kategori"
                                aria-expanded="false"><i class="nav-icon fas fa-th"></i><span
                                    class="hide-menu">Kategori</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('user')}}"
                                aria-expanded="false"><i class="nav-icon fas fa-th"></i><span
                                    class="hide-menu">User</span></a></li>

                                <li class="list-divider"></li>
                                <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>

                                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="login"
                                aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                    class="hide-menu">Login
                                </span></a>
                                </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="login" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Register
                                </span></a>
                        </li>
                      
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="login"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>