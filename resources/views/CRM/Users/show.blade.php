@extends('adminlte::page')

@section('title_prefix', "Detalhes do Usuário {$user->name}")

@section('content_header')
    <h1>Detalhes do Usuario <b>{{ $user->name }}</b></h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuários</a></li>
        <li class="breadcrumb-item active">{{ $user->name }}</li>
    </ol>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <ul>
                    <li>
                        <strong>Nome: </strong> {{ $user->name }}
                    </li>
                    <li>
                        <strong>email: </strong> {{ $user->email }}
                    </li>

                </ul>

                @include('CRM.includes.alerts')

                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O USUÁRIO
                        {{ $user->name }}</button>
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
