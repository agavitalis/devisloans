<div class="top-bar color-scheme-bright">
    <div class="fancy-selector-w">
        <div class="fancy-selector-current">
            <div class="fs-img">
                <img alt="" src="public/dashboard/img/logo.png">
            </div>
            <div class="fs-main-info">
                <div class="fs-name">
                    <span>Devis Loans</span><strong></strong>
                </div>
                
            </div>
            
        </div>
       
    </div>
    <!--------------------
            START - Top Menu Controls
            -------------------->
    <div class="top-menu-controls">
        <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
        </div>
        <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
            <i class="os-icon os-icon-mail-14"></i>
            <div class="new-messages-count">
                0
            </div>
            <div class="os-dropdown light message-list">
                <ul>
                    <li>
                        <a href="#">
                            <div class="user-avatar-w">
                                <img alt="" src="img/avatar1.jpg">
                            </div>
                            <div class="message-content">
                                <h6 class="message-from">
                                    No Messages
                                </h6>
                                <h6 class="message-title">
                                    No messages yet
                                </h6>
                            </div>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <!--------------------
              END - Messages Link in secondary top menu
              -------------------->
        <!--------------------
              START - Settings Link in secondary top menu
              -------------------->
        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
            <i class="os-icon os-icon-ui-46"></i>
            <div class="os-dropdown">
                <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                </div>
                <ul>
                    <li>
                        <a href="/admin_profile"><i class="os-icon os-icon-ui-49"></i><span>Profile
                                Settings</span></a>
                    </li>
                    
                    <li>
                        <a href="{{ route('logout') }}"><i class="os-icon os-icon-ui-15"></i><span>Log
                                Out</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--------------------
              END - Settings Link in secondary top menu
              -------------------->
        <!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="public/dashboard/img/avatar1.jpg">
                </div>
                <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="public/dashboard/img/avatar1.jpg">
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
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        
                        <li>
                            <a href="/admin_profile"><i
                                    class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                        </li>
                       
                        
                        <li>
                            
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form1').submit();">
                                <i class="os-icon os-icon-signs-11"></i><span>Logout</span>
                            </a>

                            <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
    </div>
    <!--------------------
            END - Top Menu Controls
            -------------------->
</div>