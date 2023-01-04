@extends('adminlte::page')

@section('title_prefix', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-navy">
                    <div class="inner">
                        <h3>{{ $customersCount }}</h3>
                        <p>Contatos</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>{{ $schedulesCount }}</h3>
                        <p>Agendamentos</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-day"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-olive">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Agendamentos Concluidos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Agendamentos Cancelados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                </div>
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
