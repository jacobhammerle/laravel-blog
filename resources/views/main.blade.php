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

        <!-- NEW POST MODAL -->
        <div id="new-post-modal" class="modal">
            <div class="modal-content">
                <h5>Compose new post</h5>
                <input class="new-post-title" type="text" name="title" placeholder="Title goes here" >
                <textarea class="new-post-body" rows="4" placeholder="What's happening?" cols="100"></textarea>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        @include('partials._javascript')

    </body>
</html>
