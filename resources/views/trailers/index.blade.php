@extends('layouts.app')

@section('content')
    <div class="container mx-auto ">
        <div class="row">
            <div class="col-md-10 mx-auto ">
                <div class="card ">
                    <div class="card-header text-xl">Listado de Trailers</div>
                    <div class="card-body">
                        <a href="{{ url('/trailers/create') }}" class="btn btn-success btn-sm" title="Add New Trailer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        <form method="GET" action="{{ url('/trailers') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th><th>Título</th><th>Género</th><th>Director</th><th>Fecha</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($trailers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Titulo }}</td><td>{{ $item->Genero }}</td><td>{{ $item->Director }}</td><td>{{ $item->Fecha }}</td>
                                        <td>
                                            <a href="{{ url('/trailers/' . $item->id) }}" title="View Trailer"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                            <a href="{{ url('/trailers/' . $item->id . '/edit') }}" title="Edit Trailer"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button></a>

                                            <form method="POST" action="{{ url('/trailers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Trailer" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $trailers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                        <div class="bg-blue-500 text-white">
                            <p></p>
                        </div>
                    </div>
                </div>
                {{ $trailers->links() }}
            </div>
        </div>
    </div>
@endsection
