@extends('layouts.landing')

@section('content')
    <section id="precos">
        <div class="container">
            <div class="precos-thumb">
                <h1>{{ $page->title }}</h1>
                <br>
                <p>{{ $page->description }}</p>


                @foreach($data as $dica)
                    <br>
                    <hr>
                    <br>
                    @if($dica->title_color != null)
                        <h2 style="color: {{ $dica->title_color }}">{{ $dica->title }}</h2>
                    @else
                        <h2>{{ $dica->title }}</h2>
                    @endif
                    <br>
                    @if($dica->body_color != null)
                        <p style="color: {{ $dica->body_color }}"><?php echo $dica->body; ?></p>
                    @else
                        <p><?php echo $dica->body; ?></p>
                    @endif
                    <br>
                @endforeach
            </div>
        </div>
    </section>
@endsection