<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{route('frontend.user.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-calendar"></i> <span>Daily Records</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('frontend.records.index')}}"><i class="fa fa-circle-o"></i> All Records</a></li>
                    <li><a href="{{route('frontend.records.record.today')}}"><i class="fa fa-circle-o"></i> Record Today</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-safari"></i> <span>Dips</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('frontend.dips.index')}}"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="{{route('frontend.dips.create')}}"><i class="fa fa-circle-o"></i> Add Dip</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-tint"></i> <span>Pumps</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('frontend.pumps.index')}}"><i class="fa fa-circle-o"></i> All</a></li>
                    <li><a href="{{route('frontend.pumps.create')}}"><i class="fa fa-circle-o"></i> Add Pump</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class="fa fa-paperclip"></i> <span>Other Records</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('frontend.records.incomes')}}"><i class="fa fa-circle-o"></i>Income</a></li>
                    <li><a href="{{route('frontend.records.invoices')}}"><i class="fa fa-circle-o"></i>Invoices</a></li>
                    <li><a href="{{route('frontend.records.expenses')}}"><i class="fa fa-circle-o"></i>Expenses</a></li>
                    <li><a href="{{route('frontend.records.debts')}}"><i class="fa fa-circle-o"></i>Debts</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
