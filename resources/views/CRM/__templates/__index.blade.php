@extends('adminlte::page')

@section('title_prefix', 'Dashboard')

@section('content_header')
    <h1>INDEX DEMO</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                #filtros
            </div>
            <div class="card-body">
                <table class="table-condensed table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>Pedro</tr>
                        <th>pedro@pedro.com</th>
                        <th>
                            <a href="#" class="btn btn-warning">Ver</a>
                        </th>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@stop

@section('js')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@stop
