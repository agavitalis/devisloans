 <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
     <div class="mm-logo-buttons-w">
         <a class="mm-logo" href="#"><img src="dashboard/img/logo.png"><span>Luvion Dashboard</span></a>
         <div class="mm-buttons">
             
             <div class="mobile-menu-trigger">
                 <div class="os-icon os-icon-hamburger-menu-1"></div>
             </div>
         </div>
     </div>
     <div class="menu-and-user">
         <div class="logged-user-w">
             <div class="avatar-w">
                 <img alt="" src="dashboard/img/avatar1.jpg">
             </div>
             <div class="logged-user-info-w">
                 <div class="logged-user-name">
                 {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                 </div>
                 <div class="logged-user-role">
                     Admin
                 </div>
             </div>
         </div>
         <!--------------------
            START - Mobile Menu List
            -------------------->
         <ul class="main-menu">
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-layout"></div>
                     </div>
                     <span>Dashboard</span>
                 </a>
                 <ul class="sub-menu">

                     <li>
                         <a href="/admin_dashboard">My Dashboard </a>
                     </li>

                 </ul>
             </li>

             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-package"></div>
                     </div>
                     <span>Series</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/manage_series">Manage Series</a>
                     </li>
                    
                 </ul>
             </li>
             
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-coins-4"></div>
                     </div>
                     <span>Bitcoin Address</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/manage_bitcoin_address">Bitcoin Address</a>
                     </li>
                    
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-tasks-checked"></div>
                     </div>
                     <span>Pro-Investors</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/manage_pro_investors">Pro-Investors</a>
                     </li>
                    
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-wallet-loaded"></div>
                     </div>
                     <span>Investors</span>
                 </a>
                 <ul class="sub-menu">
                    <li>
                        <a href="/manage__investors"> Manage Investors </a>
                    </li>
                    <li>
                        <a href="/withdraw__request"> Withdraw Request </a>
                    </li>
                    <li>
                        <a href="/bonus__request"> Bonus Request </a>
                    </li>
                    
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-users"></div>
                     </div>
                     <span>Users</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/manage_users">Manage Users</a>
                     </li>
                     <li>
                         <a href="/admin_profile">My Profile</a>
                     </li>
                    
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-settings"></div>
                     </div>
                     <span>Miscellaneous</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/announcements">Announcements</a>
                     </li>
                     <li>
                         <a href="/referral_bonus">Referral Bonus</a>
                     </li>
                     <li>
                        <a href="/manage_requests">Manage Requests</a>
                    </li>
                    
                 </ul>
             </li>

         </ul>
         <!--------------------
            END - Mobile Menu List
            -------------------->
     </div>
 </div>
 <!--------------------
        END - Mobile Menu
        -------------------->
 <!--------------------
        START - Main Menu
        -------------------->
 <div
     class="menu-w color-scheme-dark color-style-bright menu-position-side menu-side-left menu-layout-mini sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
     <div class="logo-w">
         <a class="logo" href="#">
             <div class="logo-element"></div>
             <div class="logo-label">
                 Luvion Dashboard
             </div>
         </a>
     </div>
     <div class="logged-user-w avatar-inline">
         <div class="logged-user-i">
             <div class="avatar-w">
                 <img alt="" src="dashboard/img/avatar1.jpg">
             </div>
             <div class="logged-user-info-w">
                 <div class="logged-user-name">
                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                 </div>
                 <div class="logged-user-role">
                  {{ Auth::user()->user_role }}
                 </div>
             </div>
             <div class="logged-user-toggler-arrow">
                 <div class="os-icon os-icon-chevron-down"></div>
             </div>
             <div class="logged-user-menu color-style-bright">
                 <div class="logged-user-avatar-info">
                     <div class="avatar-w">
                         <img alt="" src="dashboard/img/avatar1.jpg">
                     </div>
                     <div class="logged-user-info-w">
                         <div class="logged-user-name">
                         {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                         </div>
                         <div class="logged-user-role">
                         {{ Auth::user()->user_role }}
                         </div>
                     </div>
                 </div>
                 <div class="bg-icon">
                     <i class="os-icon os-icon-wallet-loaded"></i>
                 </div>
                 <ul>

                     <li>
                         <a href="/admin_profile"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                 Details</span></a>
                     </li>

                     <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="os-icon os-icon-signs-11"></i><span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <h1 class="menu-page-header">
         Page Header
     </h1>
     <ul class="main-menu">
         <li class="sub-header">
             <span>Layouts</span>
         </li>
         <li class="selected has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-layout"></div>
                 </div>
                 <span>Dashboard</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                     Dashboard
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-layout"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/admin_dashboard"> Dashboard </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
         <li class="selected has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-package"></div>
                 </div>
                 <span>Series</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                 Series
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-package"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/manage_series"> Manage Series </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
       
         <li class="selected has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-tasks-checked"></div>
                 </div>
                 <span>Manage Pro-Investors</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                  Manage Pro-Investors
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-tasks-checked"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/manage_pro_investors"> Manage Pro-Investors </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
         <li class="selected has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-wallet-loaded"></div>
                 </div>
                 <span>Manage Investors</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                  Manage Investors
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-wallet-loaded"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/manage__investors"> Manage Investors </a>
                         </li>
                         <li>
                             <a href="/withdraw__request"> Withdraw Request </a>
                         </li>
                         <li>
                             <a href="/bonus__request"> Bonus Request </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>

         <li class=" has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-users"></div>
                 </div>
                 <span>Users</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                     Users
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-users"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">
                        <li>
                            <a href="/manage_users">Manage Users</a>
                        </li>
                        
                         <li>
                             <a href="/admin_profile">My Profile</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </li>

         <li class=" has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-settings"></div>
                 </div>
                 <span>Miscellaneous</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                     Miscellaneous
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-settings"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">
                        <li>
                            <a href="/announcements">Announcements</a>
                        </li>
                        <li>
                            <a href="/referral_bonus">Referral Bonus</a>
                        </li>
                        <li>
                            <a href="/manage_requests">Manage Requests</a>
                        </li>
                     </ul>
                 </div>
             </div>
         </li>

     </ul>

 </div>
 <!--------------------
        END - Main Menu
        -------------------->
