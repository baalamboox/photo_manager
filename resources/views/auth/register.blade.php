@extends('layouts.app')
@section('title', 'Crear cuenta')
@section('main_container')
    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100 mx-auto justify-content-center">
            <div class="col-md-6 text-center">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <img class="mb-4" src="{{ asset('img/logo/camara.png') }}" alt="Loading..." width="80" height="80">
                    <h1 class="h3 mb-3 fw-normal">Crear una cuenta</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-0 rounded-top border-bottom-0" id="" name="" placeholder="Nombre" required>
                        <label for="" class="form-label">Nombre</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control rounded-0 border-bottom-0" id="" name="" placeholder="Correo electrónico" required>
                        <label for="" class="form-label">Correo electrónico</label>
                    </div>
                    <div class="row gx-0">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control rounded-0 border-end-0 border-end-sm border-md-bottom-0" id="" name="" placeholder="Contraseña" required>
                                <label for="" class="form-label">Contraseña</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="password" class="form-control rounded-0" id="" name="" placeholder="Contraseña" required>
                                <label for="" class="form-label">Contraseña</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100 btn-lg">
                            {{ __('Crear') }}
                        </button>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div> --}}
                    <div class="mt-4">
                        <small><a href="{{ route('login') }}" class="link-secondary">¡Ya tengo una cuenta!</a></small>
                        <p class="mt-4 mb-3 text-muted">&copy; 2022–2023</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
