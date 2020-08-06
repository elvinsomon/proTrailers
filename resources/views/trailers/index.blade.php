@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card shadow-2xl">
                    <div class="card-header text-gray-700 text-3xl font-bold">Listado de Trailers</div>
                    <div class="card-body">
                        <a href="{{ url('/trailers/create') }}" class="btn text-white bg-green-600 hover:bg-green-700 btn-sm  font-bold px-3 py-2" title="Agregar Nuevo Trailer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        {{-- Funcio  buscar --}}
                        {{-- <form method="GET" action="{{ url('/trailers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form> --}}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless table-hover">
                                <thead >
                                    <tr>
                                        <th> </th><th>Título</th><th>Género</th><th>Director</th><th>Estreno</th><th>Actiones</th>
                                    </tr>

                                </thead>
                                <tbody>
                                @foreach($trailers as $item)
                                    <tr>
                                        <td class="font-bold">{{ $loop->iteration }}</td>
                                        <td>{{ $item->Titulo }}</td><td>{{ $item->Genero }}</td><td>{{ $item->Director }}</td><td>{{ $item->Fecha }}</td>
                                        <td>
                                            <a href="{{ url('/trailers/' . $item->id) }}" title="Ver Trailer"><button class="btn text-white bg-teal-600 hover:bg-teal-500 btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>


                                            <a href="{{ url('/trailers/' . $item->id . '/edit') }}" title="Editar Trailer"><button class="btn text-white bg-blue-700 hover:bg-blue-600 btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/trailers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-sm bg-red-700 hover:bg-red-600 text-white" title="Eliminar Trailer" onclick="return confirm(&quot;¿Quieres eliminar este Trailers?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $trailers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
