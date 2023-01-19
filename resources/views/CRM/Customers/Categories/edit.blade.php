@extends('adminlte::page')

@section('title_prefix', "Editar a Categoria {$category->category}")

@section('content_header')
    <h1>Editar a Categoria {{ $category->category }}</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Contatos</a></li>
        <li class="breadcrumb-item"><a href="#">Categoria</a></li>
        <li class="breadcrumb-item active">{{ $category->category }}</li>
    </ol>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customers.categories.update', $category->id) }}" class="form" method="POST">
                    @csrf
                    @method('PUT')

                    @include('CRM.Customers.Categories._partials.form')
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
