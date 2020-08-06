<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro Trailers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        <nav class="flex items-center justify-between flex-wrap bg-blue-900 p-6 shadow-xl">
			<div class="flex items-center flex-shrink-0 text-white mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-12 mr-2 text-white" width="24" height="24" viewBox="0 0 24 24"><path d="M22 14.236v3.528l-2-1v-1.528l2-1zm2-3.236l-6 3v4l6 3v-10zm-10 2v5.5c0 .276-.224.5-.5.5h-9c-.276 0-.5-.224-.5-.5v-5.5c-.702 0-1.373-.127-2-.35v6.35c0 1.104.896 2 2 2h10c1.104 0 2-.896 2-2v-6.35c-.627.223-1.298.35-2 .35zm0-8c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm-10 0c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm10-2c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm-10 0c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4z"/></svg>
				<span class="font-semibold text-3xl tracking-tight">Pro Trailers</span>
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
						href="{{ url('/login') }}"
						class="inline-block text-sm px-4 py-2 leading-none border rounded transition duration-200 ease-in-out transform hover:scale-110 hover:font-bold text-white border-white hover:border-transparent hover:text-gray-700 hover:bg-white mt-4 lg:mt-0"
						>Administrar</a
					>
				</div>
			</div>
        </nav>

        <div class="container mx-auto">
            <div class="container mt-12 border-gray-600 border-b-2 w-1/4">
                <h1 class=" font-black text-gray-700 text-4xl">Trailers Disponibles</h1>
            </div>

            <div class="container mx-auto flex flex-row justify-between flex-wrap">
                @foreach ($trailers as $item)
                <div class="max-w-sm max-h-full rounded overflow-hidden shadow-lg mt-10">
                    @php
                        $urlFinal = Str::replaceFirst('watch?v=', 'embed/', $item->Video);
                    @endphp
                    <iframe
                        style="width: 100%;"
                        height="215"
                        src="{{$urlFinal}}"
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

        <footer class="bg-blue-900 text-white shadow-xl p-4 mt-12 text-center">
			Elvin Somón & Wagner Matos <br />
			<i class=" text-sm">Todos los derechos reservados </i>
		</footer>
    </body>
</html>
