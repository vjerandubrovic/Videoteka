@extends('layout.master')

@section('content')

    <section>
        <h3 id="title">Dodaj film:</h3>

        <form id="form" action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data" class="clearfix">

            @csrf

            <div class="parts clearfix">

                <div class="label">
                    
                    <label for="naslov">Naziv:</label>
                
                </div>

                <div class="input">
                
                    <input type="text" id="naslov" name="naslov">
                
                </div>
        
            </div>

            <div class="parts clearfix">
                
                <div class="label">
                
                    <label for="zanr">Žanr:</label>

                </div>

                <div class="input">

                    <select name="zanr" id="zanr">

                        @FOREACH($zanrs as $zanr)

                            <option value="{{ $zanr->id }}">{{ $zanr->naziv }}</option>

                        @ENDFOREACH
                    
                    </select>
                
                </div>

            </div>

            <div class="parts clearfix">

                <div class="label">

                    <label for="">Godina:</label>

                </div>
            
                <div class="input">

                    <select name="year" id="year">

                    @FOR($godina = 1900; $godina < 2020; $godina++)
                    
                        
                        <option value="{{ $godina }}">{{ $godina }} </option>
                    
                    @ENDFOR
                    
                    </select>
                
                </div>

            </div>
            
            <div class="parts clearfix">

                <div class="label">

                    <label for="duration">Trajanje:</label>

                </div>

                <div class="input">

                    <input type="number" name="duration" id="duration" >

                </div>

            </div>
            
            <div class="parts clearfix">

                <div class="label">

                    <label for="">Slika:</label>

                </div>  

                <div class="input">

                    <input type="file" name="file" id="file">
                    
                </div>

            </div>

            <div class="submit">

                <input type="submit" name="upload" value="Unesi">

            </div>

            <div class="reset">

                <input type="reset" value="Resetiraj">

            </div>

        </form>
        
    </section>
    
    <section>

        <h3 id="title2">Popis filmova:</h3>

        <div class="table clearfix">
        
            <h4>Slika</h4>
        
            <h4>Naslov filma</h4>

            <h4>Godina</h4>

            <h4>Trajanje</h4>

            <h4>Akcija</h4>

        </div>


        <div class="table clearfix">

            

            @FOREACH($films as $film)

            

            <img src="/images/{{ $film->slika }}" alt="{{$film->naslov}}">

            <h5>{{$film->naslov}}</h5>

            <p>{{$film->godina}}.</p>

            <p>{{$film->trajanje}} min</p>

            <div>
                <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                    
                    @method('DELETE')
                    @csrf

                    <button class="delete">Obriši</button>

                </form>
            </div>

            @ENDFOREACH

        </div>

        

    </section>

    
@endsection