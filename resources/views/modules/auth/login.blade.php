@extends('layouts/main')

@section('titulo_pagina', 'Login de usuario')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Login de usuario con laravel 11</h2>
                        <form action="{{ route('logear') }}" method="post">
                            @csrf
                            @method('post')
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <button class="btn btn-primary mt-4">Entrar</button>
                            <a href="{{ route('registro') }}" class="btn btn-info mt-4">Registrate aqui</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection