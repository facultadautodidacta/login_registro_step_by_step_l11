@extends('layouts/main')
@section('titulo_pagina', 'Registro de usuario')
    
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Registro de usuario con laravel 11</h2>
                    <form action="{{ route('registrar') }}" method="post">
                        @csrf
                        @method('POST')
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <button class="btn btn-primary mt-4">Registrarse</button>
                        <a href="{{ route('login') }}" class="btn btn-info mt-4">Logearse</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection