@extends('adminlte::page')

@section('title_prefix', 'Cadastrar Nova Categoria')

@section('content_header')
    <h1>Cadastrar Nova Categoria</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Agendamentos</a></li>
        <li class="breadcrumb-item"><a href="{{ route('schedules.categories.index') }}">Categorias</a></li>
        <li class="breadcrumb-item active">Cadastrar Nova Categoria</li>
    </ol>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('schedules.categories.store') }}" class="form" method="POST">
                    @csrf

                    @include('CRM.Schedules.Categories._partials.form')
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/custom.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@stop

@section('js')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@stop
