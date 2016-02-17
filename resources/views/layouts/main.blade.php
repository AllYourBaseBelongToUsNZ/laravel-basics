
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Laravel Demo </title>
{!! Html::style('css/foundation.min.css') !!}
{!! Html::style('css/foundation-flex.css') !!}

<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
 
</head>
<body>
 
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Home</li>
                <li class="has-submenu">
                <a href="#">One</a>
                <ul class="submenu menu vertical" data-submenu>
                    <li><a href="#">One</a></li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                </ul>
                </li>
                    <li><a href="#">Two</a></li>
                    <li><a href="#">Three</a></li>
                </ul>
        </div>
    </div>
</div>

    <!-- End Header and Nav -->

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-6 columns">
                    <p>© Laurie Williams</p>
                </div>
            </div>
        </div>
    </footer>

{!! Html::script('js/app.js') !!}
{!! Html::script('js/foundation.min.js') !!}

<script>
      $(document).foundation();
    </script>

</body>
</html>
