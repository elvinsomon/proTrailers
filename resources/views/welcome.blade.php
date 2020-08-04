<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro Trailers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <nav class="flex items-center justify-between flex-wrap bg-blue-300 p-6 shadow-xl">
			<div class="flex items-center flex-shrink-0 text-white mr-6">
				<svg
					class="fill-current h-8 w-8 mr-2"
					width="54"
					height="54"
					viewBox="0 0 54 54"
					xmlns="http://www.w3.org/2000/svg"
				>
					<path
						d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"
					/>
				</svg>
				<span class="font-semibold text-2xl tracking-tight">Pro Trailers</span>
			</div>
			<div class="block lg:hidden">
				<button
					class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
				>
					<svg
						class="fill-current h-3 w-3"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
					</svg>
				</button>
			</div>
			<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
				<div class="text-sm lg:flex-grow">
					<a
						href="#responsive-header"
						class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4"
					>

					</a>
					<a
						href="#responsive-header"
						class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4"
					>

					</a>
					<a
						href="#responsive-header"
						class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white"
					>

					</a>
				</div>
				<div>
					<a
						href="{{ url('/trailers/') }}"
						class="inline-block text-sm px-4 py-2 leading-none border rounded transition duration-200 ease-in-out transform hover:scale-110 text-white border-white hover:border-transparent hover:text-gray-700 hover:bg-white mt-4 lg:mt-0"
						>Iniciar Sesion</a
					>
				</div>
			</div>
        </nav>



            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

        <div class="container mx-auto">
            <div class="container mt-12 border-info-400 border-b-2 w-1/4">
                <h1 class="font-bold text-3xl">Peliculas Disponibles</h1>
            </div>

            <div class="container mx-auto flex flex-row justify-between flex-wrap">
            @foreach ($trailers as $item)
            <div class="max-w-sm rounded overflow-hidden shadow-lg mt-10">
                <iframe
                    style="width: 100%;"
                    height="215"
                    src="{{ $item->Video }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
                <div class="px-6 py-4">
                    <div class="font-bold text-black text-xl mb-2">{{ $item->Titulo }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $item->Sinopsis }}
                    </p>
                    <br>
                    <p><b class="font-bold">Dirigido por:</b> {{$item->Director}}</p>
                    <p><b class="font-bold">Fecha de estreno:</b> {{$item->Fecha}}</p>

                </div>
                <div class="px-6 py-4">
                    <span
                        class="inline-bloc bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-200"
                        >{{ $item->Genero }}</span
                    >
                </div>
            </div>
            @endforeach
            </div>
            <div class="mt-5">
                {{ $trailers->links() }}
            </div>

        </div>

        <footer class="bg-blue-700 text-white shadow-xl p-4 mt-12 text-center">
			Elvin Somón & Wagner Matos <br />
			<i>Todos los derechos reservados </i>
		</footer>
    </body>
</html>
