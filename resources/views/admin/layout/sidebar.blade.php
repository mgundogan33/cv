<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li class=""><a href="{{ route('admin_home.index') }}"><i class="ti-home"></i>
                        <span>Anasayfa</span></a></li>

                <li class="has-sub-menu"><a href=""><i class="ti-package"></i> <span>Kişisel Bilgiler</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('admin_information.index') }}"><span>Kişisel Bilgiler</span></a></li>
                        <li><a href="{{ route('admin_information.create') }}"><span>Kişisel Bilgi Oluştur</span></a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href=""><i class="ti-package"></i> <span>Hakkımda</span></a>
                    <ul class="side-header-sub-menu">
                        <li><a href="{{ route('admin_about.index') }}"><span>Hakkımda</span></a></li>
                        <li><a href="{{ route('admin_about.create') }}"><span>Hakkımda Oluştur</span></a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
