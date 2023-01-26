@extends('adminlte::page')

@section('title_prefix', 'Contatos')

@section('content_header')
    <h1>Contatos <a href="{{ route('customers.create') }}" class="btn btn-primary">Novo Contato</a></h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Contatos</li>
    </ol>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card rounded-xl">
            <div class="card-header">
                <form action="{{ route('customers.search') }}" method="post" class="form form-inline">
                    @csrf
                    <input type="text" name="filter">
                    <button type="submit" class="btn btn-dark">Filtrar</button>

                </form>
            </div>
            <div class="card-body bg-gray">
                <table class="table-condensed table">
                    <thead class="bg-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-warning"
                                        title="Mostrar Registro"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info"
                                        title="Editar Registro"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                @if (isset($filters))
                    {!! $customers->appends($filters)->links() !!}
                @else
                    {!! $customers->links() !!}
                @endif

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
