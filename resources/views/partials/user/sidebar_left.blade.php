 <!--------------------
        START - Mobile Menu
        -------------------->
 <div class="menu-mobile menu-activated-on-click color-scheme-dark">
     <div class="mm-logo-buttons-w">
         <a class="mm-logo" href="/user_dashboard"><img src="public/dashboard/img/logo.png"><span></span></a>
         <div class="mm-buttons">
             <div class="content-panel-open">
                 <div class="os-icon os-icon-grid-circles"></div>
             </div>
             <div class="mobile-menu-trigger">
                 <div class="os-icon os-icon-hamburger-menu-1"></div>
             </div>
         </div>
     </div>
     <div class="menu-and-user">
         <div class="logged-user-w">
             <div class="avatar-w">
                 <img alt="" src='{{(Auth::user()->picture != null)? "public/storage/uploads/".Auth::user()->picture : "public/dashboard/img/avatar1.jpg"}}' height='150px' width='150px'>
             </div>
             <div class="logged-user-info-w">
                 <div class="logged-user-name">
                 {{ Auth::user()->first_name }} Dashboard
                 </div>
                 <div class="logged-user-role">
                 {{ Auth::user()->user_role }}
                 </div>
             </div>
         </div>
         <!--------------------
            START - Mobile Menu List
            -------------------->
         <ul class="main-menu">
             <li class="has-sub-menu">
                 <a href="/user_dashboard">
                     <div class="icon-w">
                         <div class="os-icon os-icon-layout"></div>
                     </div>
                     <span>Dashboard</span>
                 </a>
                 <ul class="sub-menu">

                     <li>
                         <a href="/user_dashboard">My Dashboard </a>
                     </li>

                 </ul>
             </li>

             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-coins-4"></div>
                     </div>
                     <span>Lend a Loan</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                        <a href="initiate_transaction">Initiate Process</a>
                    </li>
                    <li>
                        <a href="finalize_transaction">Finalize Process</a>
                    </li>
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-wallet-loaded"></div>
                     </div>
                     <span>My Wallet</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/user_wallet">My Wallet</a>
                     </li>
                    
                 </ul>
             </li>
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-credit-card"></div>
                     </div>
                     <span>Loan Requests</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/loan_request">View My Requests</a>
                     </li>
                    
                 </ul>
             </li>
            
             <li class="has-sub-menu">
                 <a href="#">
                     <div class="icon-w">
                         <div class="os-icon os-icon-user"></div>
                     </div>
                     <span>Profile</span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="/user_profile">My Profile</a>
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
         <a class="logo" href="user_dashboard">
             <div class="logo-element"></div>
             <div class="logo-label">
                 Devis Loans
             </div>
         </a>
     </div>
     <div class="logged-user-w avatar-inline">
         <div class="logged-user-i">
             <div class="avatar-w">
                  <img alt="" src='{{(Auth::user()->picture != null)? "public/storage/uploads/".Auth::user()->picture : "public/dashboard/img/avatar1.jpg"}}' height='150px' width='150px'>
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
                          <img alt="" src='{{(Auth::user()->picture != null)? "public/storage/uploads/".Auth::user()->picture : "public/dashboard/img/avatar1.jpg"}}' height='150px' width='150px'>
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
                         <a href="/user_profile"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                 Details</span></a>
                     </li>

                     <li>
                         <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
             <a href="/user_dashboard">
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
                             <a href="/user_dashboard">My Dashboard</a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
         <li class=" has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-coins-4"></div>
                 </div>
                 <span>Lend a Loan</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                    Lend a Loan
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-coins-4"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">
                         <li>
                             <a href="initiate_transaction">Initiate Process</a>
                         </li>
                         <li>
                             <a href="finalize_transaction">Finalize Process</a>
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
                 <span>My Wallet</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                  My Wallet
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-wallet-loaded"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/user_wallet"> My Wallet </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
         <li class="selected has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-credit-card"></div>
                 </div>
                 <span>Loan Requests</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                  Loan Requests
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-credit-card"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">

                         <li>
                             <a href="/loan_request"> View My Requests </a>
                         </li>

                     </ul>
                 </div>
             </div>
         </li>
         <li class=" has-sub-menu">
             <a href="#">
                 <div class="icon-w">
                     <div class="os-icon os-icon-user"></div>
                 </div>
                 <span>My Profile</span>
             </a>
             <div class="sub-menu-w">
                 <div class="sub-menu-header">
                     My Profile
                 </div>
                 <div class="sub-menu-icon">
                     <i class="os-icon os-icon-users"></i>
                 </div>
                 <div class="sub-menu-i">
                     <ul class="sub-menu">
                         <li>
                             <a href="/user_profile">My Profile</a>
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