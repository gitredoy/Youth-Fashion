<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Category </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-category')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Category </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-category')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Category </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Brand </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-brand')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Add Brand </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-brand')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Manage Brand </span></a></li>
                    </ul>
                </li>
                 <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Products </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('add-product')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Add Product </span></a></li>
                        <li class="sidebar-item"><a href="{{route('manage-product')}}" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Manage Product </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{route('manage-order')}}" ><i class="mdi mdi-account-key"></i><span class="hide-menu">Manage Order </span></a>

                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                        <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                        <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                        <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>