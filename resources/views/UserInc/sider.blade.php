<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                    
                </li>

          

                

                

            

                <li class="menu-title">Components</li>


                  <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-user-circle"></i> Manage
                        <span></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <!--  <span class="badge badge-success">2</span> -->
                        <li><a href="{{route('user.findplayer')}}">Find Player</a></li>
                        <li><a href="{{route('user.friendrequest')}}">Friend Request </a></li>
                        <li><a href="{{route('user.friends')}}">Friends</a></li>
                        
                    </ul>
                </li>

                

                

                <li class="menu-title">AUTHENTICATION</li>

              <li>
                    <a href="{{route('user.settings')}}" class="waves-effect">
                        <i class="bx bx-cog"></i>
                        <span>Settings</span>
                    </a>
                    
                </li>

                   <li class="menu-title">Main Site</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Main Site</span>
                    </a>
                    
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
