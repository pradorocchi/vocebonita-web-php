@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Painel de Controle</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $dica)
                                <tr id="tr-{{ $dica->id }}">
                                    <td>{{ $dica->id }}</td>
                                    <td>{{ $dica->title }}</td>
                                    <td><button type="button" onclick="window.location.replace('/listar/dicas/{{ $dica->id }}')" class="btn btn-default">Editar</button></td>
                                    <td><button type="button" onclick="deleteTip({{ $dica->id }})" class="btn btn-info">Deletar</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
