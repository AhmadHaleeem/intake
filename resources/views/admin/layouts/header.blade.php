<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Beeldr</b> Survey</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if (auth()->user()->name === 'Martijn') { ?>
                        <img src="{{ url('admin/dist/img/user2.jpg') }}" class="user-image" alt="User Image">
                        <?  } else { ?>
                                <img src="{{ url('admin/dist/img/default.png') }}" class="user-image" alt="User Image">
                          <?php  } ?>
                        <span class="hidden-xs">Beeldr Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if (auth()->user()->name === 'Martijn') { ?>
                                <img src="{{ url('admin/dist/img/user2.jpg') }}" class="img-circle" alt="User Image">
                            <?  } else { ?>
                                <img src="{{ url('admin/dist/img/default.png') }}" class="img-circle" alt="User Image">
                            <?php  } ?>
                            <p>
                                {{ auth()->user()->name }} - Web Developer
                                <small>Member since <b>{{ auth()->user()->created_at->diffForHumans() }}</b></small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>