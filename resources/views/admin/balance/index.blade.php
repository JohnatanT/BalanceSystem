@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <ol class="breadcrumb"> 
        <li><a href="">Home</a></li>
        <li><a href="">Saldo</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href=" {{ route('balance.deposito') }} " class="btn btn-primary"><i class="fa fa-credit-card"></i> Recarregar</a>
            <a href="" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Sacar</a>
        </div>
        <div class="box-body">
        @include('admin.includes.alerts')
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>R$ {{ number_format($amount, 2, '.', '') }}</h3>
                    <p>Saldo</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop