<header class="header">
    <nav class="navbar fixed-top">
        <!-- Begin Search Box-->
        <div class="search-box">
            <button class="dismiss"><i class="ion-close-round"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="Search something ..." class="form-control">
            </form>
        </div>
        <!-- End Search Box-->
        <!-- Begin Topbar -->
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <!-- Begin Logo -->
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                    <div class="brand-image brand-big">
                        <img src="{{asset('assets/img/logo-big.png')}}" alt="logo" class="logo-big">
                    </div>
                    <div class="brand-image brand-small">
                        <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="logo-small">
                    </div>
                </a>
                <!-- Toggle Button -->
                <a id="toggle-btn" href="#" class="menu-btn active">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <!-- End Toggle -->
            </div>
            <!-- End Logo -->
            <!-- Begin Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">

                <!-- Search -->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                <!-- End Search -->
                <!-- Begin Notifications -->
                <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu notification">
                        <li>
                            <div class="notifications-header">
                                <div class="title">{{__('Notifications')}} (4)</div>
                                <div class="notifications-overlay"></div>
                                <img src="{{asset('assets/img/notifications/01.jpg')}}" alt="..." class="img-fluid">
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-user"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        New user registered
                                    </div>
                                    <span class="date">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-calendar-check-o"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        New event added
                                    </div>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-history"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        Server rebooted
                                    </div>
                                    <span class="date">7 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-icon">
                                    <i class="la la-twitter"></i>
                                </div>
                                <div class="message-body">
                                    <div class="message-body-heading">
                                        You have 3 new followers
                                    </div>
                                    <span class="date">10 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">{{__('View All Notifications')}}</a>
                        </li>
                    </ul>
                </li>
                <!-- End Notifications -->
                <!-- User -->
                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{asset('assets/img/avatar/avatar-01.jpg')}}" alt="..." class="avatar rounded-circle"></a>
                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                        <li class="welcome">
                            <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                            <img src="{{asset('assets/img/avatar/avatar-01.jpg')}}" alt="..." class="rounded-circle">
                        </li>
                        <li>
                            <a href="{{route('profile.index')}}" class="dropdown-item">
                                {{__('Profile')}}
                            </a>
                        </li>
                        <li>
                            <a href="app-mail.html" class="dropdown-item">
                                {{__('Messages')}}
                            </a>
                        </li>
                        <li class="separator"></li>
                        <li>
                            <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                FAQ
                            </a>
                        </li>
                        <li><a rel="nofollow" href="{{route('logout')}}" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                    </ul>
                </li>
                <!-- End User -->
                <li class="nav-item d-flex align-items-center">
                    @if(\Auth::user()->language !== "pt-PT")
                        <a href="/language/pt-PT">
                            <img src="{{asset('assets/icons/flags/portugal.png')}}" alt="Portuguese" class="avatar rounded-circle"/>
                        </a>
                    @else
                        <a href="/language/en">
                            <img src="{{asset('assets/icons/flags/united-kingdom.png')}}" alt="Inglês" class="avatar rounded-circle"/>
                        </a>
                    @endif
                </li>
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>