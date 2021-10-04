<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                    
                </li>

                <li>
                    <a href="{{route('admin.players')}}" class="waves-effect">
                        <i class="bx bx-user-plus"></i>
                        <span>Players</span>
                    </a>
                
                </li>
             

                
                

                <li class="menu-title">Main Pages</li>

              

            

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-columns"></i>
                        <span>News</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.createnews')}}">Create News</a></li>
                        <li><a href="{{route('admin.news')}}">View</a></li>
                       
                
                    </ul>
                </li>

              

                
              

                
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->









