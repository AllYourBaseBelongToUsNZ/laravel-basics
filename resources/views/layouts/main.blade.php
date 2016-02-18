
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Laravel Demo </title>
{!! Html::style('css/foundation.css') !!}
{!! Html::style('css/foundation-flex.css') !!}

{!! Html::style('http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css')!!}
 
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

            @if(Session::has('message'))
<div data-alert class="alert-box success radius">
                {{{Session::get('message')}}}
             </div>   

            @endif
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
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{!! Html::script('js/app.js') !!}
{!! Html::script('js/foundation.js') !!}

<script>
$(function() {
   $(document).foundation();
});

</script>

</body>
</html>
