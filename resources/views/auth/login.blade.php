@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('main_container')
    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100 mx-auto justify-content-center">
            <div class="col-md-4 text-center">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <img class="mb-4" src="{{ asset('img/logo/camara.png') }}" alt="Loading..." width="80" height="80">
                    <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control rounded-0 rounded-top border-bottom-0" id="email"
                            name="email" placeholder="Correo electrónico" required>
                        <label for="email" class="form-label">Correo electrónico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-0 rounded-bottom" id="password" name="password"
                            placeholder="Contraseña" required>
                        <label for="password" class="form-label">Contraseña</label>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-100 btn btn-lg btn-primary">Ingresar</button>
                    </div>
                    <div class="mt-4">
                        <small><a href="{{ route('register') }}" class="link-secondary">¡No tengo una cuenta!</a></small>
                        <p class="mt-4 mb-3 text-muted">&copy; 2022–2023</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
