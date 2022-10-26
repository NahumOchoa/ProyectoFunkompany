@extends('page')


@section('custom-css')
<style>
    body{
        background-image: url(" {{asset('images/fondoarco2.jpg')}} ");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #titulo_banquetes{
        font-family: 'Oleo Script', cursive;
    }
    #logo_izq{
        width: 35%
    }
</style>
@endsection


@section('contenido')

    <!-- Row -->
    <div class="container">
        @include('sweetalert::alert')
        <div class="row justify-content-center">

            {{-- COLUMNA DERECHA --}}
            <div class="col-4 bg-white pb-8 pt-5 pr-5 pl-5 rounded">

            <h2 class="fw-bold text-left py-5">Inicio de sesión</h2>

            {{-- login --}}
            <form class="pl-5 pr-5" method="POST" action="{{ route('login') }}">
                @csrf
                {{-- correo --}}
                <div class="mb-4">
                    <label class="form-label mb-0 mt-2"> {{ __('E-Mail Address') }}</label>
                    <!--<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa un correo electronico" autofocus autocomplete="email">-->
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="admin@upv.edu.mx" autofocus autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- contraseña --}}
                <div class="mb-4">
                    <label class="form-label mb-0 mt-2">{{ __('Password') }}</label>
                    <!--<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Introduce una contraseña" autocomplete="current-password">-->
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="PASSWORD" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember"> {{ __('Remember Me') }} </label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
<!-- Aqui va el boton de registro -->
<!--
                <div class="my-3">
                    <div class="text-center">
                        <span>¿No tienes cuenta? <a class="btn btn-link" href="{{ route('register') }}">Regístrate</a></span>
                    </div>
                </div>
-->
            </div>
            </form>
        </div>
    </div>

<!-- End Row-->
@endsection