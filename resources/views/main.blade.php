<!doctype html>
<html lang="{{ config('app.locale') }}">
    
    <!-- HEAD -->
    @include('partials._head')

    <body>

        <!-- NAVBAR -->
        @include('partials._navbar')

        <!-- SUBNAV -->
        @include('partials._subnav')

        <!-- MAIN CONTENT -->
        <div id="main-wrapper"> 

            @yield('content')

        </div>

        <!-- FOOTER -->
        @include('partials._footer')

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
      <script src="/js/site.js"></script>

    </body>
</html>
