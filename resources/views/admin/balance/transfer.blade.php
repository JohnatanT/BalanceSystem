@extends('adminlte::page')

@section('title', 'Transferir Saldo')

@section('content_header')
    <h1>Recarga</h1>

    <ol class="breadcrumb"> 
        <li><a href="">Home</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Fazer sua Transferência (Informe o recebedor)</h3>
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')
            <form method="post" action=" {{ route('confirm.transfer') }} ">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="sender" placeholder="Quem vai Receber (Nome ou Email)" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próxima Etapa</button>
                </div>
            </form>
        </div>
    </div>
@stop