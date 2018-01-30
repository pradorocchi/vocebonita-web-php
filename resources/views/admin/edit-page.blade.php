@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Página</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="/pagina/{{ $data->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" value="{{ $data->id }}">

                            <label for="title">Título: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" required>
                            <br>
                            <label for="description">Descrição:</label>
                            <textarea rows="5" class="form-control" id="description" name="description">{{ $data->description }}</textarea>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Atualizar">
                        </form>
                        <br>

                        @if(isset($return))
                            <div class="alert alert-success" role="alert">
                                Página atualizada com sucesso!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
