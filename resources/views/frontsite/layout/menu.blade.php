<div class="header-bottom header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                <!-- sticky -->
                <div class="sticky-logo">
                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-md-block">
                    <nav>
                        <ul id="navigation">
                            <li><a href="{{route('frontsite.home')}}">Home</a></li>
                            <li><a href="{{route('frontsite.category',1)}}">Category</a></li>
                            <li><a href="{{route('frontsite.about')}}">About</a></li>
                            <li><a href="{{route('frontsite.contact')}}">Contact</a></li>
                            <li><a href="{{route('admin.home')}}">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="col-12">
                <div class="mobile_menu d-block d-md-none"></div>
            </div>
        </div>
    </div>
</div>
