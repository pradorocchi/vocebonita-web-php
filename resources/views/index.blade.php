@extends('layouts.landing')

@section('content')

    <!-- Home section -->
    <section id="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ URL::asset('img/logo.png') }}" alt="vocebonita" height="150" width="200">
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">A melhor versão de você</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.9s">Atendimento de beleza diretamente no conforto da sua casa. O tratamento que você merece, com a qualidade
                        que você precisa.
                    </p>
                    <button type="button" id="btn-quem-somos" class="btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Quem somos</button>
                </div>
            </div>
        </div>
    </section>

    <!-- About section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-thumb">
                        <h1>Quem somos</h1>
                        <p>A Você Bonita surgiu para levar a beleza com o conforto e a segurança de um atendimento personalizado
                            na casa de nossas clientes. Com um estilo democrático, acreditamos na beleza individual e primamos
                            por garantir que nosso trabalho realce a beleza e o estilo únicos de cada cliente.</p>
                        <p>Todas as integrantes da Você Bonita são apaixonadas pela área da beleza, não só pela transformação
                            estética, mas também pelos benefícios à auto estima que traz as mulheres depois de uma produção;
                            o brilho nos olhos ao se olharem no espelho e ver o quanto são lindas e poderosas. Nosso objetivo
                            é sempre realçar a beleza de cada mulher, pois acreditamos que, ao realçar nossa beleza externa,
                            refletimos nossa beleza interna.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                    <img src="{{ URL::asset('img/team-img0.jpg') }}" class="img-responsive img-circle" alt="About">
                </div>
                <div class="clearfix"></div>


                <!--
                <div class="col-md-12 col-sm-12 wow" data-wow-delay="0.3s">
                    <div class="section-title text-center">
                        <h1>Nossa equipe</h1>
                        <h3>Nossa equipe é treinada para oferecer um atendimento de alto padrão, com materiais de máxima qualidade
                            e equipamentos esterilizados, conforme regulamentação e exigências da ANVISA para esta área.</h3>

                        <a href="/profissionais" class="smoothScroll btn btn-success btn-lg wow" data-wow-delay="1.2s">VEJA NOSSAS PROFISSIONAIS</a>
                    </div>
                </div>
                <br>
                <div style="padding-left: 100px; padding-right: 100px;">
                    <h3>Trabalhamos com uma equipe de manicures, pedicures e podólogas, especializadas em suas áreas de atuação.
                        Além disso, dispomos também dos serviços de maquiagem, penteado e designer de sobrancelhas.</h3>
                </div>
                <div style="padding-left: 100px; padding-right: 100px;">
                    <h3>Para garantir a segurança de nossas clientes, nossas colaboradoras realizam os atendimentos uniformizadas
                        e com um crachá de identificação.</h3>
                </div>
                <br>
                -->


            </div>
        </div>
    </section>

    <!-- Trabalhos -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h1>Nossos trabalhos</h1>
                        <p>Com foco no respeito mútuo entre nossas colaboradoras e as clientes, buscamos realizar um atendimento
                            personalizado e transparente, e estamos abertas a receber feedbacks para sempre melhorar nossa
                            qualidade.
                        </p>
                    </div>
                </div>
                <ul class="grid cs-style-4">
                    <li class="col-md-6 col-sm-6">
                        <figure>
                            <div><img src="{{ URL::asset('img/trabalhos-img1.jpg') }}" alt="image 1"></div>
                            <figcaption>
                                <h1>Manicure</h1>
                                <small>Um toque de arte nas suas mãos.</small>
                                <a href="/manicure">VEJA MAIS</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-md-6 col-sm-6">
                        <figure>
                            <div><img src="{{ URL::asset('img/trabalhos-img2.jpg') }}" alt="image 2"></div>
                            <figcaption>
                                <h1>Sobrance</h1><h1>lhas</h1>
                                <small>Suas sobrancelhas com mais estilo.</small>
                                <a href="/sobrancelhas">VEJA MAIS</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-md-6 col-sm-6">
                        <figure>
                            <div><img src="{{ URL::asset('img/trabalhos-img3.jpg') }}" alt="image 3"></div>
                            <figcaption>
                                <h1>Maquiagem</h1>
                                <small>Você muito mais bonita.</small>
                                <a href="/maquiagens">VEJA MAIS</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-md-6 col-sm-6">
                        <figure>
                            <div><img src="{{ URL::asset('img/trabalhos-img4.jpg') }}" alt="image 4"></div>
                            <figcaption>
                                <h1>Cabelos</h1>
                                <small>Seu cabelo com muito mais estilo e beleza.</small>
                                <a href="/cabelos">VEJA MAIS</a>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- sistema section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h1>Sistema de marcações</h1>
                    <p>Registre-se e tenha o melhor dos serviços de beleza direto na sua casa.</p>
                    <a href="/login" class="smoothScroll btn btn-success btn-lg wow" data-wow-delay="1.2s">Entrar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h1>Entre em Contato</h1>
                        <p>Solicite um orçamento ou tire suas dúvidas. </p>
                        <br><br>
                        <p>Envie sua mensagem para <b>contato@vocebonita.art.br</b>.</p>
                        <p>Também, entre em contato através do nosso WhatsApp: +55 51 99547-1173</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back top -->
    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

@endsection