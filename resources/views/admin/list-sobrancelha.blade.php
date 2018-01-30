@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sobrancelhas</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(isset($return) && $return == true)
                            <div class="alert alert-success" role="alert">
                                Imagem adicionada.
                            </div>
                        @endif

                        @if(isset($return) && $return == false)
                            <div class="alert alert-danger" role="alert">
                                Você deve escolher algum arquivo!
                            </div>
                        @endif

                        <form method="post" action="/adicionar/sobrancelhas" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="picture">Nova foto: </label>
                                    <input type="file" name="picture" accept="image/*" id="picture">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" class="btn btn-primary" value="Inserir"
                                           style="position:relative; top: 15px;">
                                </div>
                            </div>

                        </form>
                        <br>
                        <hr>

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Fotos</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $i)
                                @if($i != "." && $i != "..")
                                    <tr id="{{ $i }}">
                                        <td><img src="{{ URL::asset('img/sobrancelhas/'.$i) }}" alt="cabelo" height="100"
                                                 width="170"></td>
                                        <td>
                                            <button type="button" onclick="deleteSobrancelha('{{ $i }}')"
                                                    class="btn btn-info">Deletar
                                            </button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
