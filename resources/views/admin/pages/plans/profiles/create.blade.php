
@extends('adminlte::page')

@section('title', 'Cadastra novo Perfil')

@section('content_header')
    <h1>Cadastrar Novo Perfil</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action=" {{ route ('profiles.store') }}" class="form" method="POST">
                @csrf


                @include('admin.pages.plans.profiles._partials.form')

            </form>
        </div>
    </div>

@endsection
