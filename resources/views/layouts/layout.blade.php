<html lang="en">
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>Metronic | My Profile</title>
        <meta name="description" content="User profile example page">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->
        <link href="{{ asset('bower_components/managetrainee-bower/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />

        <!--RTL version:<link href="../../../assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
        <link href="{{ asset('bower_components/managetrainee-bower/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--RTL version:<link href="../assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

        <!--end::Base Styles -->
        <link rel="shortcut icon" href="../assets/demo/default/media/img/logo/favicon.ico" />
        @routes
        @yield('style')
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        @yield('content')

        <!--begin::Base Scripts -->
        <script src="bower_components/managetrainee-bower/js/vendors.bundle.js" type="text/javascript"></script>
        <script src="bower_components/managetrainee-bower/js/scripts.bundle.js" type="text/javascript"></script>
        <!-- <script type="text/javascript">
            var ActionsDemo={init:function(){$(".summernote").summernote({height:250})}};jQuery(document).ready(function(){ActionsDemo.init()});
        </script> -->
        
        <script src="js/app.js" type="text/javascript"></script>
        <!--end::Base Scripts -->
        
        @yield('script')
    </body>

    <!-- end::Body -->
</html>