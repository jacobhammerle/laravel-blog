@extends('main')

@section('content')
    <h3>Contact Me.</h3>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Subject</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Message</label>
        </div>
    </div>
    <a class="waves-effect waves-light btn">Send</a>
@endsection