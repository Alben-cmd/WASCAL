
    <!-- <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('admin.home') }} "><img src="{!! asset('images/logo.png') !!}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{ route('admin.home') }}"><img src="{!! asset('images/logo.png') !!}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('admin.home') }} "> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <h3 class="menu-title"> Users</h3>
                    <li>
                        <a href="{{ route('admin.letter') }} "> <i class="menu-icon ti-email"></i> Subscribers</a>
                    </li>
    

                    <h3 class="menu-title"> Blog</h3>
                    <li>
                        <a href="{{ route('admin.blog') }} "> <i class="menu-icon fa fa-th"></i> Blog Posts</a>
                    </li>
                    <li>
                        <a href=" {{ route('admin.blog.create') }} "> <i class="menu-icon fa fa-th"></i> Create New Blog</a>
                    </li>
                    <h3 class="menu-title">Opportunities</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-graduation-cap"></i>Scholarships</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-graduation-cap"></i><a href="{{ route('admin.opportunity') }}">Scholarships</a></li>
                            <li><i class="fa fa-graduation-cap"></i><a href="{{ route('admin.opportunity.create') }}">Create Scholarship</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-briefcase"></i>Internship</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-briefcase"></i><a href="{{ route('admin.intern') }}">Internships</a></li>
                            <li><i class="fa fa-briefcase"></i><a href="{{ route('admin.intern.create') }}">Create Internship</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </aside> -->

    
    <!-- <div id="right-panel" class="right-panel">
         <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                 <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="ti-power-off text-primary"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header> --><!-- /header -->
        <!-- Header-->
        

              