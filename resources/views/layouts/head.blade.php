<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
<link rel="stylesheet" href="{{ asset('materialize/css/materialize.min.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('materialize/css/my.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

@section('headerSection') @show
<title>Smart</title>

<nav class="navbar-material">
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('users.index')}}">Users</a>
            </li>
            <li><a href="{{route('roles.index')}}">Roles</a></li>
        </ul>
    </div>
</nav>
{{-- mobile --}}
<ul class="sidenav" id="mobile-demo">
    <li><a href="#">Profiles<i class="material-icons dropdown-button" data-target="dropdownaccount2">person_pin</i></a>
    </li>
</ul>