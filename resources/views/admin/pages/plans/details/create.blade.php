@extends('adminlte::page')

@section('title', "Adiconar novo detalhe ao Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('plans.index') }}">Planos</a></li>
        <li class="breadcrumb-item "><a href="{{ route('plans.show', $plan->url) }}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item "><a href="{{ route('details.plan.index', $plan->url) }}" class="active">Detalhes</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plan.create', $plan->url) }}" class="active">Novo</a></li>
    </ol>

    <h1>Adiconar novo detalhe ao Plano {{ $plan->name }}</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            #form
        </div>
    </div>
@endsection

