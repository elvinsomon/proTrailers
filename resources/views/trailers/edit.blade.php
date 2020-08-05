@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card shadow-xl">
                    <div class="card-header text-gray-700 text-2xl font-black">Editar Trailer</div>
                    <div class="card-body">
                        <a href="{{ url('/trailers') }}" title="Regresar"><button class="btn text-gray-800 bg-yellow-500 hover:bg-yellow-400 btn-sm font-bold px-3 py-2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/trailers/' . $trailer->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('trailers.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
