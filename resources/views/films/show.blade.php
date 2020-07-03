@extends('layout.master')

@section('content')
    
    <section>

        <h3 id="title2">Popis filmova:</h3>

        <div class="table1 clearfix">
        
            <h4>Slika</h4>
        
            <h4>Naslov filma</h4>

            <h4>Godina</h4>

            <h4>Trajanje</h4>

        </div>

        <div class="table1 clearfix">

            @FOREACH($films as $film)

            <img src="/images/{{ $film->slika }}" alt="{{$film->naslov}}">

            <h5>{{$film->naslov}}</h5>

            <p>{{$film->godina}}.</p>

            <p>{{$film->trajanje}} min</p>

            @ENDFOREACH

        </div>

    </section>

    
@endsection