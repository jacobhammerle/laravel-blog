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

        <!-- JAVASCRIPT -->
        @include('partials._javascript')

    </body>
</html>
