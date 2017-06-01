<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jacob's Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/site.css">
        
    </head>
    <body>

        <!-- NAVBAR -->
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Jacob's Blog</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <<li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- SUBNAV -->
        <div class="sub-nav">
            <div class="sub-nav-wrapper">
                <div class="row">
                    <div class="col s6 sub-nav-left">
                        breadcrumbs
                    </div>
                    <div class="col s6 sub-nav-right">
                        <div class="search-left">
                            <input type="text" placeholder="search">
                        </div>
                        <div class="search-right">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            
            @yield('content')

        </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script src="/js/site.js"></script>

    </body>
</html>
