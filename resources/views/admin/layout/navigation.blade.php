

        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{url('images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="active">
                        <a href="">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">S</i>
                            <span>Staff</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/Staff')}}" >
                                    <span>Add Staff</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{url('admin/Staffs')}}" >
                                    <span>View Staff</span>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">V</i>
                            <span>Vehicle</span>
                        </a>
                        <ul class="ml-menu">
                             <li>
                                <a href="{{url('admin/vehicle')}}">Add Vehicle</a>
                            </li>
                                                        
                            <li>
                                <a href="{{url('admin/vehicles')}}">View Vehicle</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Trip</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{url('admin/Trip')}}">Add Trip</a>
                            </li>
                            <li>
                                <a href="{{url('admin/Trips')}}">View Trip</a>
                            </li>
                           
                        </ul>
                    </li>
                  
                </ul>
            </div>
            <!-- #Menu -->

             <div class="legal">
                <div class="copyright">
                    <a href="">Greefi Technology - Pullipalaiyam </a>.
                </div>
                <div class="version">
                    <b>Version: </b> 12.10.97
                </div>
            </div>
           
        </aside>

        
          
            <div class="tab-content">
               
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
        <!-- #END# Right Sidebar -->
    