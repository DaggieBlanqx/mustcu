<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-tint"></i> <span>Oils</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.oils.index')}}"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="{{route('admin.oils.create')}}"><i class="fa fa-circle-o"></i> New Oil</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-map-signs"></i>
	                <span>Stations</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.stations.index')}}"><i class="fa fa-circle-o"></i>Your Stations</a></li>
                    <li><a href="{{route('admin.stations.create')}}"><i class="fa fa-circle-o"></i> Add Station</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-users"></i>
                    <span>Users</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.access.user.index')}}"><i class="fa fa-circle-o"></i>Users</a></li>
                    <li><a href="{{route('admin.access.role.index')}}"><i class="fa fa-circle-o"></i>Roles</a></li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
