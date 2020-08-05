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
						class="inline-block text-sm px-4 py-2 leading-none border rounded transition duration-200 ease-in-out transform hover:scale-110 hover:font-bold text-white border-white hover:border-transparent hover:text-gray-700 lg:mt-0"
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
