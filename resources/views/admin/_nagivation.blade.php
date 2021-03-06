<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="
                    @if(Auth::user()->profile_photo_path)
                    {{ Storage::url(Auth::user()->profile_photo_path) }}
                    @else
                        {{ asset("assets/admin") }}/assets/images/user/avatar-2.jpg
                    @endif
                        " alt="User-Profile-Image">
                    <div class="user-details">
                        <span>{{ Auth::user()->name }}</span>
                        <div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <li class="list-group-item"><a href="{{ route('logout') }}"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin_home") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin_message") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Contact Messages</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin_category") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Category</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin_setting") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Settings</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin_car") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Cars</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route("admin_reservation") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Reservations</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin_users") }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Users</span></a>
                </li>


            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->
