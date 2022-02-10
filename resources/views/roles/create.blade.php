@extends('layouts.extend') 
@section('headerSection')
@endsection
 
@section('main-content')
<section class="blue lighten-4">
    <h3 class="light grey-text text-darken-3 center">Create Roles</h3>
</section>
<form action="{{route('roles.store')}}" method="POST">
    {{csrf_field()}}
    <div class="container">
        <div class="row">
            <div class="input-field col m6 s12 push-m2">
                <select name="name" required>
                            <option value="" disabled selected>Choose roles</option>
                            <option value="Super Admin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="Editor">Editor</option>
                            <option value="Author">Author</option>
                            <option value="Guest">Guest</option>
                          </select>
                <label>Pick roles</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12 push-m2">
                <select name="user_id">
                              <option value="" disabled selected>Choose User</option>
                              @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                <label>For?</label>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <a href="{{route('roles.index')}}" class="blue lighten-effect blue lighten-2 btn col m6 s6 z-depth-3 push-m3"><i class="material-icons left">arrow_back</i>Kembali</a>
                <button class="btn waves-effect waves-light col m6 s6 push-s1 push-m2 z-depth-3 push-m5" type="submit">Submit
                <i class="material-icons right">done</i>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
 
@section('footerSection')
@endsection