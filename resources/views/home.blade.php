@extends('layouts.extend') 
@section('headerSection')
@endsection
 
@section('main-content')
<section class="blue lighten-4">
    <h3 class="light grey-text text-darken-3 center">Welcome</h3>
</section>
<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Petunjuk</span>
                    <p>Menu dapat dilihat pada navbar pojok kanan atas atau dibawah ini.</p>
                </div>
                <div class="card-action">
                    <a href="{{route('users.index')}}">Users</a>
                    <a href="{{route('roles.index')}}">Roles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('footerSection')
@endsection