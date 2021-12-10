<div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="{{url('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">About</span></a>
                <ul>
                    <li><a class="submenu" href="{{url('/about/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add About</span></a></li>
                    <li><a class="submenu" href="{{url('/about')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Show About</span></a></li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Experience</span></a>
                <ul>
                    <li><a class="submenu" href="{{url('/experience/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Experience</span></a></li>
                    <li><a class="submenu" href="{{url('/experience')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">All Experience</span></a></li>
                </ul>
            </li>

            <li>
                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Portfolio</span></a>
                <ul>
                    <li><a class="submenu" href="{{url('/portfolio/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Add Portfolio</span></a></li>
                    <li><a class="submenu" href="{{url('/portfolio')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">All Portfolio</span></a></li>
                </ul>
            </li>


        </ul>
    </div>
</div>
