@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Recarga</h1>

    <ol class="breadcrumb"> 
        <li><a href="">Home</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
<div class="box">
        <div class="box-header">
            <h3>Fazer sua Recarga</h3>
        </div>
        <div class="box-body">
        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <p> {{ $error }} </p>
                @endforeach
            </div>
        @endif
            <form method="post" action=" {{ route('deposit.store') }} ">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor Recarga" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Recarregar</button>
                </div>
            </form>
        </div>
    </div>
@stop