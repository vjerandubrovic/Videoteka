<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**** koristi napravljeni model Film php artisan make:model Film ****/
use App\Film;

/**** koristi napravljeni model Film php artisan make:model Zanr ****/
use App\Zanr;

class FilmsController extends Controller
{
    public function __construct()
    {

    }

    public function home()
    {
        /* Tu izvlačimo podatke iz baze te ih slažemo po naslovu orderBy() i nakraju get() da uzme podatke  */
        $films = Film::orderBy('naslov')->get();

        /* vrati ovo gore u welcome i izvuci filmove compact() */
        return view('welcome', compact('films'));
    }

    /**** Funkcija index ****/
    public function index()
    {
        /* Ovo predstavljaposlano iz welcome.blade.php u hrefu pod ,$send */
        $get = $_GET;

        /* Ovo predstavlja poslano je array pa da dobimo podatke koristimo foreach */
        foreach ($get as $key) 
        {
        
        /* Tu izvlacimo podatke iz baze na tablicu films i onda query upit u where() i nakraju funkcija get() da uzme podatke */
        $films = Film::where('naslov','like',$key.'%')->get();

        }
        /* vrati ovo gore u rutu films.show(pogledaj Routes) i izvuci filmove compact() */
        return view('films.show', compact('films')); 

    }

    /**** Funkcija create ****/
    public function create()
    {
        /* Tu izvlačimo podatke iz baze Films te ih slažemo po naslovu orderBy() i nakraju get() da uzme podatke  */
        $films = Film::orderBy('naslov')->get();

        /* Tu izvlačimo podatke iz baze Zanrs te ih uzimamo sve*/
        $zanrs = Zanr::all();

        /* vrati ovo gore u rutu films.create(pogledaj Routes) i izvuci filmove compact() i izvuci zanrove compact() */
        return view('films.create', compact('films'), compact('zanrs'));
    }

    /**** Funkcija store prima Request $request poslan iz forme s method=POST ****/
    public function store(Request $request)
    {
        /* Provjera naslov,zanr,year,duration mora biti upisan a file može biti prazan ali mora biti image ako se stavi  */
        $request->validate([
            'naslov' => 'required',
            'zanr' => 'required',
            'year' => 'required',
            'duration' => 'required',
            'file' => 'nullable|image'
        ]);

        //dd($request);

        /* ako imamo image varijabla $file je iz request-a file pod nazivom file */
        if($file = $request->file('file'))
        {
            /* varijabla $name je iz $file-a orginalno ime */
            $name = $file->getClientOriginalName();
            //$image->move_uploaded_file()
            
            /* ako je file onda prebaci u folder images i uzmi ime*/
            if($file->move('images',$name))
            {
                /* napravi novi film i ubaci u tablicu films $film gdje je $film->slika = ime slike($name),$film->naslov = iz poslanog requesta $request['naslov'].... i spremi novi film $film->save(); */
                $film = new Film();
                $film->slika = $name;
                $film->naslov = $request['naslov'];
                $film->zanr_id = $request['zanr'];
                $film->godina = $request['year'];
                $film->trajanje = $request['duration'];
                $film->save();

                /* napravi ovo gore i preusmjeri na rutu films.create i izbaci FlashMessage(sadržaj poruke)*/
                return redirect()->route('films.create')->withFlashMessage("Film $film->naslov je uspješno dodan.");

            }
        }
        /* inače napravi ovo */
        else
        {
             /* napravi novi film i ubaci u tablicu films $film gdje je $film->naslov = iz poslanog requesta $request['naslov'], $film->zanr_id = iz poslanog requesta $request['zanr'].... i spremi novi film $film->save(); */
            $film = new Film();
            $film->naslov = $request['naslov'];
            $film->zanr_id = $request['zanr'];
            $film->godina = $request['year'];
            $film->trajanje = $request['duration'];
            $film->save();
            
             /* napravi ovo gore i preusmjeri na rutu films.create i izbaci FlashMessage(sadržaj poruke)*/
            return redirect()->route('films.create')->withFlashMessage("Film $film->naslov je uspješno dodan.");
        }
        
    }

    /**** Funkcija destroy veze se na tablicu films i prima film $film s svim njegovim podacima id,naslov,... ****/
    public function destroy(Film $film)
    {
        /* izbriši film */
        $film->delete();

        /* napravi ovo gore i preusmjeri na rutu films.create i izbaci FlashMessage(sadržaj poruke)*/
        return redirect()->route('films.create')->withFlashMessage("Film $film->naslov je izbrisan.");
    }
   
}
