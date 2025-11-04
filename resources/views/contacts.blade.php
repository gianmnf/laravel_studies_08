@extends('layouts.main_layout')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p class="display-6 text-info">This page is available for both logged and guest users</p>
            
            <hr>

            @auth
            <p class="display-6 text-success">
                This text is only available for logged users
            </p>
            @endauth

            @guest
            <p class="display-6 text-warning">
                This text is only available for guest users
            </p>   
            @endguest

            <p>ALTERNATIVE WAY</p>
            @auth
            <p class="display-6 text-success">
                This text is only available for logged users
            </p>
            @else
            <p class="display-6 text-warning">
                This text is only available for guest users
            </p>   
            @endauth

        </div>
    </div>
</div>
@endsection
