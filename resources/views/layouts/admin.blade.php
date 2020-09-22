
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Kovamsam  கோவம்சம் Times">
    <meta name="author" content="">
    
    <title>கோவம்சம் - Kovamsam Times</title>
    
    
    <link rel="apple-touch-icon" href="{{ url('assets') }}/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ url('assets') }}/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('/global') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/global') }}/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/waves/waves.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ url('/global') }}/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="{{ url('/global') }}/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    @livewireStyles
   <!--[if lt IE 9]>
    <script src="{{ url('/global') }}/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{ url('/global') }}/vendor/media-match/media.match.min.js"></script>
    <script src="{{ url('/global') }}/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{ url('/global') }}/vendor/breakpoints/breakpoints.js"></script>
    
    
    @stack('styles')
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
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
          <img class="navbar-brand-logo" src="{{ url('assets') }}/images/logo.png" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Kovamsam</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon md-search" aria-hidden="true"></i>
        </button>
      </div>


      @include('layouts.topmenu')
      
    </nav>  
    
    @include('layouts.sidemenu')
    
    <!-- Page -->
    <div class="page">
      @yield('content')
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2020 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remarks</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{ url('/global') }}/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="{{ url('/global') }}/vendor/jquery/jquery.js"></script>
    <script src="{{ url('/global') }}/vendor/popper-js/umd/popper.min.js"></script>
    <script src="{{ url('/global') }}/vendor/bootstrap/bootstrap.js"></script>
    <script src="{{ url('/global') }}/vendor/animsition/animsition.js"></script>
    <script src="{{ url('/global') }}/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ url('/global') }}/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="{{ url('/global') }}/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="{{ url('/global') }}/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="{{ url('/global') }}/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="{{ url('/global') }}/vendor/switchery/switchery.js"></script>
    <script src="{{ url('/global') }}/vendor/intro-js/intro.js"></script>
    <script src="{{ url('/global') }}/vendor/screenfull/screenfull.js"></script>
    <script src="{{ url('/global') }}/vendor/slidepanel/jquery-slidePanel.js"></script>
    
    <!-- Scripts -->
    <script src="{{ url('/global') }}/js/Component.js"></script>
    <script src="{{ url('/global') }}/js/Plugin.js"></script>
    <script src="{{ url('/global') }}/js/Base.js"></script>
    <script src="{{ url('/global') }}/js/Config.js"></script>
    
    <script src="{{ url('assets') }}/js/Section/Menubar.js"></script>
    <script src="{{ url('assets') }}/js/Section/GridMenu.js"></script>
    <script src="{{ url('assets') }}/js/Section/Sidebar.js"></script>
    <script src="{{ url('assets') }}/js/Section/PageAside.js"></script>
    <script src="{{ url('assets') }}/js/Plugin/menu.js"></script>
    
    <script src="{{ url('/global') }}/js/config/colors.js"></script>
    <script src="{{ url('assets') }}/js/config/tour.js"></script>
    <script>Config.set('assets', '{{ url('assets') }}');</script>
    
    <!-- Page -->
    <script src="{{ url('assets') }}/js/Site.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/asscrollable.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/slidepanel.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/switchery.js"></script>
    @stack('scripts')

    @livewireScripts
     
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
     


 
  </body>
</html>
