@extends('layouts.landing')

@section('content')
    <section id="precos">
        <div class="container">
            <div class="precos-thumb">
                <h1>{{ $page->title }}</h1>
                <br>
                <p>{{ $page->description }}</p>

                @foreach($data as $promocao)
                    <br>
                    <hr>
                    <br>
                    @if($promocao->title_color != null)
                        <h2 style="color: {{ $promocao->title_color }}">{{ $promocao->title }}</h2>
                    @else
                        <h2>{{ $promocao->title }}</h2>
                    @endif
                    <br>
                    @if($promocao->body_color != null)
                        <p style="color: {{ $dica->body_color }}"><?php echo $promocao->body; ?></p>
                    @else
                        <p><?php echo $promocao->body; ?></p>
                    @endif
                    <br>
                @endforeach


            </div>
        </div>
    </section>
@endsection