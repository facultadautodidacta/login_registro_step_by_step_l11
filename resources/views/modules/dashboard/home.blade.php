@extends('layouts/main')

@section('titulo_pagina', 'Home')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('logout') }}" class="btn btn-danger">Salir del sistema</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection