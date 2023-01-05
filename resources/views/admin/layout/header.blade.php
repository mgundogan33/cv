   <!-- Header Section Start -->
   <div class="header-section">
       <div class="container-fluid">
           <div class="row justify-content-between align-items-center">

               <!-- Header Logo (Header Left) Start -->
               <div class="header-logo col-auto">
                   <a href="index.html">
                       <img src="assets/images/logo/logo.png" alt="">
                       <img src="assets/images/logo/logo-light.png" class="logo-light" alt="">
                   </a>
               </div><!-- Header Logo (Header Left) End -->

               <!-- Header Right Start -->
               <div class="header-right flex-grow-1 col-auto">
                   <div class="row justify-content-between align-items-center">

                       <!-- Side Header Toggle & Search Start -->
                       <div class="col-auto">
                           <div class="row align-items-center">

                               <!--Side Header Toggle-->
                               <div class="col-auto"><button class="side-header-toggle"><i
                                           class="zmdi zmdi-menu"></i></button></div>

                               <!--Header Search-->

                           </div>
                       </div><!-- Side Header Toggle & Search End -->

                       <!-- Header Notifications Area Start -->
                       <div class="col-auto">

                           <ul class="header-notification-area">
                               <!--User-->
                               <li class="adomx-dropdown col-auto">
                                   <a class="toggle" href="#">
                                       <span class="user">
                                           <span class="avatar">
                                               <img src="assets/images/avatar/avatar-1.jpg" alt="">
                                               <span class="status"></span>
                                           </span>
                                           <span class="name">{{ Auth::user()->name }}</span>
                                       </span>
                                   </a>

                                   <!-- Dropdown -->
                                   <div class="adomx-dropdown-menu dropdown-menu-user">
                                       <div class="head">
                                           <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
                                           <a class="mail" href="#">{{ Auth::user()->email }}</a>
                                       </div>
                                       <div class="body">
                                           <ul>
                                               <li class="nav-item"><a class="nav-link"
                                                       href="{{ route('register-user') }}">Yeni Kayıt</a></li>
                                               <li><a href="{{ route('login') }}"><i
                                                           class="zmdi zmdi-lock-open"></i>Çıkıs Yap</a></li>
                                           </ul>

                                       </div>
                                   </div>

                               </li>

                           </ul>

                       </div><!-- Header Notifications Area End -->

                   </div>
               </div><!-- Header Right End -->

           </div>
       </div>
   </div>
   <!-- Header Section End -->
 