@extends('layouts.extend') 
@section('headerSection')
@endsection
 
@section('main-content')
<section class="blue lighten-4">
    <h3 class="light grey-text text-darken-3 center">Create Users</h3>
</section>
<form action="{{route('users.update',$users->id)}}" method="POST">
    {{csrf_field()}} {{method_field('PUT')}}
    <div class="container">
        <div class="row">
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">colorize</i>
                <input id="name" type="text" name="name" class="validate" value="{{$users->name}}">
                <label for="name">Nama :</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
            <div class="input-field col m6 s12">
                <i class="material-icons prefix">colorize</i>
                <input id="email" name="email" type="email" class="validate" value="{{$users->email}}">
                <label for="email">email:</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col m6 s12">
                <select id="ganti" required>
                              <option value="" disabled selected>Choose your option</option>
                              <option value="1">Ya</option>
                              <option value="2">Tidak</option>
                            </select>
                <label>Ganti Password?</label>
            </div>
            <div class="input-field col m6 s12 coba">
                <i class="material-icons prefix">colorize</i>
                <input placeholder="input kembali" id="password" name="password" type="password" class="validate">
                <label for="password">password:</label>
                <span class="helper-text" data-error="wrong" data-success="right"></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <a href="{{route('users.index')}}" class="blue lighten-effect blue lighten-2 btn col m6 s6 z-depth-3 push-m3"><i class="material-icons left">arrow_back</i>Kembali</a>
                <button class="btn waves-effect waves-light col m6 s6 push-s1 push-m2 z-depth-3 push-m5" type="submit">Submit
                <i class="material-icons right">done</i>
                </button>
            </div>
        </div>
    </div>
</form>
@endsection
 
@section('footerSection')
<script type="text/javascript">
    $(document).ready(function(){
        $(function() {
            $('.coba').hide();
            $('#ganti').on('change', function(event) {
                var opt = this.options[ this.selectedIndex ];
                var Ya = $(opt).text().match(/Ya/i);
                if(Ya) {
                    $('.coba').show();
                } else {
                    $('.coba').hide();
                }
            });
        });
    });

</script>
@endsection