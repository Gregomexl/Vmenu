@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron">
                <h1>Bienvenido a la aplicación de Room Service <b>{!! Auth::user()->name !!}</b> </h1>
            </div>
        </div>
    </div>
@endsection