@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-9 mx-auto">
            <div class="card shadow-xl">
                <div class="card-header text-gray-700 text-2xl font-black">Trailer "{{ $trailer->Titulo }}"</div>
                <div class="card-body">

                    <a href="{{ url('/trailers') }}" title="Back"><button class="btn text-white bg-yellow-600 hover:bg-yellow-700 btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>

                    <a href="{{ url('/trailers/' . $trailer->id . '/edit') }}" title="Editar Trailer"><button class="btn text-white bg-blue-700 hover:bg-blue-800 btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                    <form method="POST" action="{{ url('trailers' . '/' . $trailer->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn bg-red-700 hover:bg-red-800 text-white btn-sm" title="Delete Trailer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                    </form>
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>ID</th><td>{{ $trailer->id }}</td>
                                </tr>
                                <tr>
                                    <th> Título </th><td> {{ $trailer->Titulo }} </td>
                                </tr>
                                <tr>
                                    <th> Sinópsis </th><td> {{ $trailer->Sinopsis }} </td></tr>
                                </tr>
                                <tr>
                                    <th> Género </th><td> {{ $trailer->Genero }} </td>
                                </tr>
                                <tr>
                                    <th> Estreno </th><td> {{ $trailer->Fecha }} </td>
                                </tr>
                                <tr>
                                    <th> Director </th><td> {{ $trailer->Director }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
