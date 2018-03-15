@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Recarga</h1>

    <ol class="breadcrumb"> 
        <li><a href="">Home</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Retirada</a></li>
    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Fazer Saldo</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')
            <form method="post" action=" {{ route('withdrawn.store') }} ">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor Retirado" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sacar</button>
                </div>
            </form>
        </div>
    </div>
@stop