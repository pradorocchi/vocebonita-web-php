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

                        <h4>Página de Dicas</h4>
                        <ul>
                            <li><a href="/editar/pagina/2">Editar Página</a></li>
                            <li><a href="/registrar/dicas">Cadastrar novo registro</a></li>
                            <li><a href="/listar/dicas">Administrar Dicas</a></li>
                        </ul>
                        <br>

                        <h4>Página de Promoções</h4>
                        <ul>
                            <li><a href="/editar/pagina/1">Editar Página</a></li>
                            <li><a href="/registrar/promocoes">Cadastrar novo registro</a></li>
                            <li><a href="/listar/promocoes">Administrar promoções</a></li>
                        </ul>
                        <br>

                        <h4>Página de Profissionais</h4>
                        <ul>
                            <li><a href="/editar/pagina/3">Editar Página</a></li>
                            <li><a href="/registrar/profissionais">Cadastrar novo registro</a></li>
                            <li><a href="/listar/profissionais">Administrar profissionais</a></li>
                        </ul>
                        <br>

                        <h4>Página de Cabelos</h4>
                        <ul>
                            <li><a href="/editar/pagina/7">Editar Página</a></li>
                            <li><a href="/listar/cabelos">Administrar fotos</a></li>
                        </ul>
                        <br>

                        <h4>Página de Manicure</h4>
                        <ul>
                            <li><a href="/editar/pagina/4">Editar Página</a></li>
                            <li><a href="/listar/manicure">Administrar fotos</a></li>
                        </ul>
                        <br>

                        <h4>Página de Sobrancelhas</h4>
                        <ul>
                            <li><a href="/editar/pagina/5">Editar Página</a></li>
                            <li><a href="/listar/sobrancelhas">Administrar fotos</a></li>
                        </ul>
                        <br>

                        <h4>Página de Maquiagem</h4>
                        <ul>
                            <li><a href="/editar/pagina/6">Editar Página</a></li>
                            <li><a href="/listar/maquiagens">Administrar fotos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
