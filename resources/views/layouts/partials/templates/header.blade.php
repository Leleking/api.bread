<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>A1 Bread | {{Route::currentRouteName()}} </title>
    
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    
    <!-- Plugins -->
    @yield('css')
    <link rel="stylesheet" href="/assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/vendor/waves/waves.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--Skin -->
    <link rel="stylesheet" href="/assets/skins/red.min.css">
    <style>
a:link{
  text-decoration:none;
}
</style>
    
    <!--[if lt IE 9]>
    <script src="/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="/assets/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="/assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition site-menubar-fold">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
      role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="/assets/images/logo.jpg" title="A1bread">
          <span class="navbar-brand-text hidden-xs-down"> A1 Bread</span>
        </div>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="/assets/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-card" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-notifications" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Empty</h6>
                            <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                     
                     
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon md-email" aria-hidden="true"></i>
                <span class="badge badge-pill badge-info up">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header" role="presentation">
                  <h5>MESSAGES</h5>
                  <span class="badge badge-round badge-info">New 3</span>
                </div>
    
                <div class="list-group" role="presentation">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-online">
                              <img src="/assets/portraits/2.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Mary Adams</h6>
                            <div class="media-meta">
                              <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                            </div>
                            <div class="media-detail">Anyways, i would like just do it</div>
                          </div>
                        </div>
                      </a>
                     
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer" role="presentation">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon md-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
    
          <div class="navbar-brand navbar-brand-center">
            <a href="../index.html">
              <img class="navbar-brand-logo navbar-brand-logo-normal" src="/assets/images/logo.jpg"
                title="A1bread">
              <img class="navbar-brand-logo navbar-brand-logo-special" src="/assets/images/logo.jpg"
                title="A1bread">
            </a>
          </div>
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon md-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    
    <div class="site-menubar">
      <div class="site-menubar-header">
        <div class="cover overlay">
          <img class="cover-image" src="/assets//examples/images/dashboard-header.jpg"
            alt="...">
          <div class="overlay-panel vertical-align overlay-background">
            <div class="vertical-align-middle">
              <a class="avatar avatar-lg" href="javascript:void(0)">
                <img src="/assets/portraits/1.jpg" alt="">
              </a>
              <div class="site-menubar-info">
                <h5 class="site-menubar-user">{{Auth::user()->name}}</h5>
                <p class="site-menubar-email">{{Auth::user()->email}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>  <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-item">
                <a class="animsition-link" href="/">
                        <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
              </li>
              <li class="site-menu-item has-sub active open">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Catalog</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item active">
                    <a class="animsition-link" href="/admin/category">
                      <span class="site-menu-title">Categories</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/product">
                      <span class="site-menu-title">Products</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/headers.html">
                      <span class="site-menu-title">Reviews</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/boxed.html">
                      <span class="site-menu-title">Information</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-money" aria-hidden="true"></i>
                        <span class="site-menu-title">Sales</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/orders">
                      <span class="site-menu-title">Orders</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/orders/returns">
                      <span class="site-menu-title">Returns</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon md-account" aria-hidden="true"></i>
                        <span class="site-menu-title"> Customers</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/customers">
                      <span class="site-menu-title">Customers</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/customers/groups">
                      <span class="site-menu-title">Customers Groups</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/customers/approvals">
                      <span class="site-menu-title">Customer Approvals</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Marketing</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item hidden-sm-down site-tour-trigger">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Marketing</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/animation.html">
                      <span class="site-menu-title">Coupons</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/highlight.html">
                      <span class="site-menu-title">Mail</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-settings" aria-hidden="true"></i>
                        <span class="site-menu-title">System</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/settings">
                      <span class="site-menu-title">Settings</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/localisation">
                      <span class="site-menu-title">Localisation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/maintenance">
                      <span class="site-menu-title">Maintenance</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                        <span class="site-menu-title">Reports</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="/admin/reports">
                      <span class="site-menu-title">Reports</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/blog.html">
                      <span class="site-menu-title">Statistics</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>      </div>
        </div>
      </div>
    </div>
