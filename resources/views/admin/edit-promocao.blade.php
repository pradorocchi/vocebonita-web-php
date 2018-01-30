@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Promoção</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="/promocoes/{{ $data->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{ method_field('PUT') }}

                            <label for="title">Título: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" required>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="title-color">Cor do título: <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="title-color" name="title_color" value="{{ $data->title_color }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="body-color">Cor do Texto: <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="title-color" name="body_color" value="{{ $data->body_color }}">
                                </div>
                                <div class="col-md-4">
                                    <a style="position: relative; top: 33px;" href="http://www.color-hex.com/" target="_blank">Pesquisar Cores</a>
                                </div>
                            </div>
                            <br>
                            <label for="body">Texto: <span style="color: red">*</span></label>
                            <textarea rows="5" class="form-control" id="body" name="body">{{ $data->body }}</textarea>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </form>
                        <br>

                        @if(isset($return))
                            <div class="alert alert-success" role="alert">
                                Promoção atualizada com sucesso!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
