@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')


    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('categories.index')}}" class="">Planos</a></li>
    </ol>

    <h1>Categorias <a href="{{ route('categories.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"> ADD</i></a></h1>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
          <form action="{{route('categories.search')}}" method="POST" class="form form-inline">
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
                        <th>Descrição</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($categories as $category )
                     <tr>
                         <td>
                             {{$category->name}}
                         </td>
                         <td>
                            {{$category->description}}
                        </td>

                         <td style="width=10px;">

                            <a href="{{route ('categories.edit', $plan->url)}}" class="btn btn-info">Editar</a>
                           <a href="{{route ('categories.show', $plan->url)}}" class="btn btn-warning">VER</a>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      {{--   <div class="card-footer">
            {!! $categories->link() !!}
        </div> --}}
    </div>
@stop
