@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Profissional</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ URL::asset('img/profissionais/'.$data->id.'.jpg') }}" alt="profissional" height="300" width="200">
                            </div>
                            <div class="col-md-8">
                                <form method="post" action="/profissionais/{{ $data->id }}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {{ method_field('PUT') }}
                                    <label for="name">Nome: <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required>
                                    <br>
                                    <label for="description">Descrição: <span style="color: red">*</span></label>
                                    <textarea rows="5" class="form-control" id="description" name="description" required>{{ $data->description }}</textarea>
                                    <br>
                                    <label for="picture">Foto: </label>
                                    <input type="file" name="picture" accept="image/*" id="picture">
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Registrar">
                                </form>
                            </div>
                        </div>
                        <br>
                        @if(isset($return))
                            <div class="alert alert-success" role="alert">
                                Profissional atualizada com sucesso!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
