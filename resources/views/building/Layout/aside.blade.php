<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/admin"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href=""><img src="{{asset('images/logo2.png')}}"  alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <li><a href="{{asset('/admin/news')}}"> <i class="menu-icon fa fa-calendar-o"></i>消息管理 </a></li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa   fa-tags"></i>商品管理</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-angle-double-right"></i><a href="{{asset('/admin/product')}}">商品管理</a></li>
                    </ul>
                </li>
                <li><a href="{{asset('/admin/vendor')}}"><i class="menu-icon fa fa-briefcase"></i>廠商管理</a></li>
                <li><a href="{{asset('/admin/customer')}}"><i class="menu-icon fa fa-users"> </i>買家管理</a></li>
                <li><a href="{{asset('/admin/user')}}"><i class="menu-icon fa  fa-comments"></i>使用者管理</a></li>

                </li>
                <!--                <li class="menu-item-has-children active dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>-->
                <!--                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->

                <!--                <h3 class="menu-title">Icons</h3>&lt;!&ndash; /.menu-title &ndash;&gt;-->

                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>-->
                <!--                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>-->
                <!--                </li>-->
                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->

                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <h3 class="menu-title">Extras</h3>&lt;!&ndash; /.menu-title &ndash;&gt;-->
                <!--                <li class="menu-item-has-children dropdown">-->
                <!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>-->
                <!--                    <ul class="sub-menu children dropdown-menu">-->
                <!--                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>-->
                <!--                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>