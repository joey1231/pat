<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Web Application</title>
        <meta name="description" content="Responsive Admin Web App with Bootstrap and AngularJS">
        <meta name="keywords" content="angularjs admin, admin templates, admin themes, bootstrap admin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Needs images, font... therefore can not be part of main.css -->
        <link rel="stylesheet" href="<% url('') %>/styles/loader.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300,300italic,500italic|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<% url('/components') %>/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<% url('/components') %>/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <!-- end Needs images -->

            
            <!-- build:css({.tmp,client}) <% url('') %>/styles/main.css -->
            <link rel="stylesheet" href="<% url('/components') %>/angular-material/angular-material.min.css">
            <link rel="stylesheet" href="<% url('') %>/styles/bootstrap.css">
            <link rel="stylesheet" href="<% url('') %>/styles/ui.css">
            <link rel="stylesheet" href="<% url('') %>/styles/main.css">
            <!-- endbuild -->

    </head>
    <body data-ng-app="app"
          id="app"
          class="app"
          data-custom-page 
          data-ng-controller="AppCtrl"
          data-ng-class=" { 'layout-boxed': main.layout === 'boxed', 
                            'nav-collapsed-min': main.isMenuCollapsed
          } ">
        <!--[if lt IE 9]>
            <div class="lt-ie9-bg">
                <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
                <p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            </div>
        <![endif]-->

        <div id="loader-container"></div>

        <header data-ng-include=" '<% url('') %>/app/layout/header.html' "
                 id="header"
                 class="header-container "
                 data-ng-class="{ 'header-fixed': main.fixedHeader,
                                  'bg-white': ['11','12','13','14','15','16','21'].indexOf(main.skin) >= 0,
                                  'bg-dark': main.skin === '31',
                                  'bg-primary': ['22','32'].indexOf(main.skin) >= 0,
                                  'bg-success': ['23','33'].indexOf(main.skin) >= 0,
                                  'bg-info': ['24','34'].indexOf(main.skin) >= 0,
                                  'bg-warning': ['25','35'].indexOf(main.skin) >= 0,
                                  'bg-danger': ['26','36'].indexOf(main.skin) >= 0
                 }"></header>

        <div class="main-container"
             data-ng-class="{ 'app-nav-horizontal': main.menu === 'horizontal' }">
            <aside data-ng-include=" '<% url('') %>/app/layout/sidebar.html' "
                   id="nav-container"
                   class="nav-container"  
                   data-ng-class="{ 'nav-fixed': main.fixedSidebar,
                                    'nav-horizontal': main.menu === 'horizontal',
                                    'nav-vertical': main.menu === 'vertical',
                                    'bg-white': ['31','32','33','34','35','36'].indexOf(main.skin) >= 0,
                                    'bg-dark': ['31','32','33','34','35','36'].indexOf(main.skin) < 0
                   }">
            </aside>

            <div id="content" class="content-container">
                <section data-ui-view
                         class="view-container {{main.pageTransition.class}}"></section>
            </div>
        </div>


        <script src="http://maps.google.com/maps/api/js"></script>

        <!-- build:js scripts/vendor.js -->
        <script src="<% url('/components') %>/jquery/dist/jquery.min.js"></script>
        <script src="<% url('/components') %>/angular/angular.min.js"></script>
        <script src="<% url('/components') %>/angular-animate/angular-animate.min.js"></script>
        <script src="<% url('/components') %>/angular-aria/angular-aria.min.js"></script>
        <script src="<% url('/components') %>/angular-messages/angular-messages.min.js"></script>
        <script src="<% url('/components') %>/angular-ui-router/release/angular-ui-router.min.js"></script>
        <!-- endbuild -->


        <!-- build:js scripts/ui.js -->
        <script src="<% url('/components') %>/angular-material/angular-material.min.js"></script>
        <script src="<% url('/components') %>/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
        <script src="<% url('/components') %>/jquery.slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<% url('/components') %>/angular-ui-tree/dist/angular-ui-tree.min.js"></script>
        <script src="<% url('/components') %>/ngmap/build/scripts/ng-map.min.js"></script>
        <script src="<% url('/components') %>/angular-scroll/angular-scroll.min.js"></script>
        <script src="<% url('/components') %>/angular-validation-match/dist/angular-validation-match.min.js"></script>

        <script src="<% url('/components') %>/jquery-steps/build/jquery.steps.min.js"></script>
        <script src="<% url('/components') %>/angular-wizard/dist/angular-wizard.min.js"></script>

        <script src="<% url('/components') %>/textAngular/dist/textAngular-rangy.min.js"></script>
        <script src="<% url('/components') %>/textAngular/dist/textAngular.min.js"></script>
        <script src="<% url('/components') %>/textAngular/dist/textAngular-sanitize.min.js"></script>

        <script src="<% url('/components') %>/angular-translate/angular-translate.min.js"></script>
        <script src="<% url('/components') %>/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>

        <script src="<% url('') %>/vendors/echarts.js"></script>        
        <script src="<% url('') %>/vendors/ngecharts.js"></script>
        <!-- endbuild -->


        <!-- build:js scripts/app.js -->
        <!-- inject:js -->
        <script src="<% url('') %>/app/app.module.js"></script>
        <script src="<% url('') %>/app/chart/chart.module.js"></script>
        <script src="<% url('') %>/app/core/core.module.js"></script>
        <script src="<% url('') %>/app/layout/layout.module.js"></script>
        <script src="<% url('') %>/app/form/form.module.js"></script>
        <script src="<% url('') %>/app/form/formValidation.module.js"></script>
        <script src="<% url('') %>/app/page/page.module.js"></script>
        <script src="<% url('') %>/app/table/table.module.js"></script>
        <script src="<% url('') %>/app/ui/ui.module.js"></script>
        <script src="<% url('') %>/app/chart/echarts.controller.js"></script>
        <script src="<% url('') %>/app/core/app.config.js"></script>
        <script src="<% url('') %>/app/core/app.controller.js"></script>
        <script src="<% url('') %>/app/core/config.route.js"></script>
        <script src="<% url('') %>/app/core/i18n.js"></script>
        <script src="<% url('') %>/app/dashboard/dashboard.controller.js"></script>
        <script src="<% url('') %>/app/layout/layout.controller.js"></script>
        <script src="<% url('') %>/app/layout/layout.diretive.js"></script>
        <script src="<% url('') %>/app/layout/loader.js"></script>
        <script src="<% url('') %>/app/layout/sidebar.directive.js"></script>
        <script src="<% url('') %>/app/form/form.controller.js"></script>
        <script src="<% url('') %>/app/form/form.directive.js"></script>
        <script src="<% url('') %>/app/form/formValidation.controller.js"></script>
        <script src="<% url('') %>/app/form/wizard.controller.js"></script>
        <script src="<% url('') %>/app/page/page.controller.js"></script>
        <script src="<% url('') %>/app/page/page.directive.js"></script>
        <script src="<% url('') %>/app/table/table.controller.js"></script>
        <script src="<% url('') %>/app/ui/material.controller.js"></script>
        <script src="<% url('') %>/app/ui/ui.controller.js"></script>
        <script src="<% url('') %>/app/ui/ui.directive.js"></script>
        <!-- endinject -->
        <!-- build:js scripts/app.js -->
    </body>
</html>
