<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pro Trailers</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        a{
            text-decoration: none !important;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-blue-800 p-6 shadow-xl">
            <a href="{{ url('/') }}">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-12 mr-2 text-white" width="24" height="24" viewBox="0 0 24 24"><path d="M22 14.236v3.528l-2-1v-1.528l2-1zm2-3.236l-6 3v4l6 3v-10zm-10 2v5.5c0 .276-.224.5-.5.5h-9c-.276 0-.5-.224-.5-.5v-5.5c-.702 0-1.373-.127-2-.35v6.35c0 1.104.896 2 2 2h10c1.104 0 2-.896 2-2v-6.35c-.627.223-1.298.35-2 .35zm0-8c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm-10 0c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zm10-2c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm-10 0c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4z"/></svg>
                    <span class="font-semibold text-3xl tracking-tight">Pro Trailers</span>
                </div>
            </a>
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
						href="{{ url('/') }}"
						class="inline-block text-sm px-4 py-2 leading-none border rounded transition duration-200 ease-in-out transform hover:scale-110 hover:font-bold text-white border-white hover:border-transparent hover:text-gray-700 lg:mt-0 items-center"
						>Ver Galería</a>
				</div>
			</div>
        </nav>

        <main class="container mx-auto mt-12">
            @yield('content')
        </main>

        <footer class="bg-blue-900 text-white shadow-xl p-4 mt-12 text-center">
            Elvin Somón & Wagner Matos <br />
            <i>Todos los derechos reservados </i>
        </footer>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
