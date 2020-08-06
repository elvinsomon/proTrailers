@extends('layouts.app')

@section('content')
<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">



        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-4xl font-bold text-gray-900">Bienvenido</p>
            <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">E-Mail</label>
                    <input id="email" type="email" placeholder="ejemplo@correo.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Contraseña</label>

                    <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-check mt-8">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Recuérdame
                    </label>
                </div>

                <button type="submit" class=" bg-gray-800 rounded-lg text-white font-bold text-lg hover:bg-gray-900 p-2 mt-8">
                    Ingresar
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
        </div>
    </div>

    <!-- Image Section -->
    <div class="w-1/2 ">
        <img class="object-cover w-full hidden md:block" src="{{ URL::asset('img/bg.svg')}}">
    </div>
</div>
@endsection
