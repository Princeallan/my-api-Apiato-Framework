<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/foundation-icons/foundation-icons.css')}}">

    <title>BOM </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>



<div class="app-dashboard shrink-medium">
    <div class="row expanded app-dashboard-top-nav-bar">
        <div class="columns medium-2">
            <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
            <a class="app-dashboard-logo">Foundation</a>
        </div>
        <div class="columns show-for-medium">
            <div class="app-dashboard-search-bar-container">
                <input class="app-dashboard-search" type="search" placeholder="Search">
                <i class="app-dashboard-search-icon fa fa-search"></i>
            </div>
        </div>
        <div class="columns shrink app-dashboard-top-bar-actions">
            <button href="#" class="button hollow">Logout</button>
            <a href="#" height="30" width="30" alt=""><i class="fa fa-info-circle"></i></a>
        </div>
    </div>

    <div class="app-dashboard-body off-canvas-wrapper">
        <div id="app-dashboard-sidebar" class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium" data-off-canvas>
            <div class="app-dashboard-sidebar-title-area">
                {{--<div class="app-dashboard-close-sidebar">--}}
                    {{--<!-- Close button -->--}}
                    {{--<button id="close-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-sidebar-close-button show-for-medium" aria-label="Close menu" type="button">--}}
                        {{--<span aria-hidden="true"><a href="#"><i class="large fa fa-angle-double-left"></i></a></span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                <div class="app-dashboard-open-sidebar">
                    <button id="open-sidebar" data-app-dashboard-toggle-shrink class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu" type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fi fi-angle-double-right"></i></a></span>
                    </button>
                </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
                <ul class="menu vertical">
                    <li><a href="/boards" class="is-active">
                            <i class="fi-list-thumbnails medium"></i><span class="app-dashboard-sidebar-text">Boards</span>
                        </a></li>
                    <li><a href="/boardmembers">
                            <i class="fi-torsos-all large"></i><span class="app-dashboard-sidebar-text">Board Members</span>
                        </a></li>
                    <li><a href="/committees">
                            <i class="fi-projection-screen large"></i><span class="app-dashboard-sidebar-text">Committee</span>
                        </a></li>
                    <li><a href="/committeemembers">
                            <i class="fi-torsos-all large"></i><span class="app-dashboard-sidebar-text">Committee Members</span>
                        </a></li>

                </ul>
            </div>
        </div>

        <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>

 @yield('content')

        </div>
    </div>
</div>
<script src="{{asset('/js/app.js')}}"></script>

<script> $(document).foundation();

    $('[data-app-dashboard-toggle-shrink]').on('click', function(e) {
        e.preventDefault();
        $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
    });


</script>

</body>
</html>


