
         <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>  

                      <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">    <a href="#">Dashboard </a></li>
                                
                                <li class="app-sidebar__heading">Sections</li>
                                <li class="mm-active">
                                    <a href="">
                                       
                                        Announcement
                                      
                                    </a>
                                    <ul
                                   
                         class="mm-show"
                                    >
                                        <li>
                                            <a href="{{url('admin/announcements')}}">
                                                <i class="metismenu-icon"></i>
                                                View Announcement
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Add/edit Announcement
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                                
                                <!--contact-->
                                <li class="mm-active">
                                    <a href="">
                                       
                                       Contact Message
                                      
                                    </a>
                                    <ul
                                   
                         class="mm-show"
                                    >
                                        <li>
                                            <a href="/adminresponce">
                                                <i class="metismenu-icon"></i>
                                                View Message
                                            </a>
                                        </li>
                                       

                                        
                                        
                                    </ul>
                                </li>
                               
                                <!-- appoinments-->

                                <li class="mm-active">
                                    <a href="">
                                       
                                        Appoinments
                                      
                                    </a>
                                    <ul
                                   
                         class="mm-show"
                                    >
                                        <li>
                                            <a href="{{url('admin/appoinments')}}">
                                                <i class="metismenu-icon"></i>
                                                View Appoinments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Add/edit Announcement
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>    
                @yield('content')
        </div>