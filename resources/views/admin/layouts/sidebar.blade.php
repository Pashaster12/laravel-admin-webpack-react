<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">
            
            <li>
                <a href="{{ url('admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Single item</span>
                </a>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil-square-o"></i> <span>List item</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/products') }}"><i class="fa fa-circle-o"></i> Item 1</a></li>
                    <li><a href="{{ url('admin/attributes') }}"><i class="fa fa-circle-o"></i> Item 2</a></li>
                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
