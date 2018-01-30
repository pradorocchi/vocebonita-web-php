@extends('layouts.landing')

@section('content')
    <section id="precos">
        <div class="container">
            <div class="precos-thumb">
                <h1>{{ $page->title }}</h1>
                <br>
                <p><?php echo  $page->description ?></p>
                <br>

                <img src="{{ URL::asset('img/profissionais/equipe82.jpg') }}" alt="equipe" width="650px" height="450px">
                <br><br>

                @foreach($data as $profissional)
                    <br>
                    <hr>
                    <br>

                    <h2>{{ $profissional->name }}</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ URL::asset('img/profissionais/'.$profissional->id.'.jpg') }}" height="300" width="200">
                        </div>
                        <div class="col-md-9">
                            <p><?php echo $profissional->description ?></p>
                        </div>
                    </div>
                    <br>
                @endforeach

            </div>
        </div>
    </section>
@endsection