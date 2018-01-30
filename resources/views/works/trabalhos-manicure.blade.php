@extends('layouts.landing')

@section('content')
    <!-- Trabalhos -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h1>{{ $page->title }}</h1>
                    </div>
                    <p><?php echo  $page->description ?></p>
                    <br>
                </div>
                <ul class="grid cs-style-4">

                    @foreach($data as $i)
                        @if($i != "." && $i != "..")
                            <li class="col-md-6 col-sm-6">
                                <img class='trabalhos-galeria' src="{{ URL::asset('img/manicure/'.$i) }}" alt="image 4">
                            </li>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>
    </section>
@endsection
