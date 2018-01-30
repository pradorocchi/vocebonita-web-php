@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Adicionar Profissional</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="/profissionais" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <label for="name">Nome: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <br>
                            <label for="description">Descrição: <span style="color: red">*</span></label>
                            <textarea rows="5" class="form-control" id="description" name="description" required></textarea>
                            <br>
                            <label for="picture">Foto: </label>
                            <input type="file" name="picture" accept="image/*" id="picture">
                            <br>
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </form>
                        <br>

                        @if(isset($return))
                            <div class="alert alert-success" role="alert">
                                Profissional cadastrada com sucesso!
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
