
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Laravel Demo </title>



{!! Html::style('css/foundation.css') !!}
{!! Html::style('css/normalise.css') !!}
{!! Html::style('http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css')!!}
 
</head>
<body>
 
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">My Site</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="#">Right Button Active</a></li>
      <li class="has-dropdown">
        <a href="#">Right Button Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li class="active"><a href="#">Active link in dropdown</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">Left Nav Button</a></li>
    </ul>
  </section>
</nav>

    <!-- End Header and Nav -->

    <div class="row">
        <div class="large-12">

            @if(Session::has('message'))
                <div data-alert class="alert-box success radius">
                {{{Session::get('message')}}}
             </div>   

            @endif

        
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
{{ HTML::script('js/vendor/jquery.js') }}
{{ HTML::script('js/vendor/modernizr.js') }}
{{ HTML::script('js/vendor/fastclick.js') }}

<script>
$(function() {
   $(document).foundation();
   $(document).foundationAlerts();
});

</script>

</body>
</html>
