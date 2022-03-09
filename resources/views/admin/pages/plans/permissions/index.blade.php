@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('permissions.index')}}" class="">Permissões</a></li>
    </ol>

    <h1>Permissões <a href="{{ route('permissions.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"> ADD</i></a></h1>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
          <form action="{{route('plans.search')}}" method="POST" class="form form-inline">
              @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{$filters ['filter'] ?? ''}}">
              <button type="submit" class="btn btn-dark">Filtrar</button>
          </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>

                        <th width="250">Ações</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($permissions as $permission )
                     <tr>
                         <td>
                             {{$permission->name}}
                         </td>

                         <td style="width=10px;">
                        {{--     <a href="{{ route('details.profile.index', $profile->url) }}" class="btn btn-primary">Detalhes</a> --}}
                            <a href="{{route ('permissions.edit', $permission->id)}}" class="btn btn-info">Editar</a>
                           <a href="{{route ('permissions.show', $permission->id)}}" class="btn btn-warning">VER</a>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      {{--   <div class="card-footer">
            {!! $profiles->link() !!}
        </div> --}}
    </div>
@stop
