<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {   
        $owner = "Dario";
        return view("welcome", ["segnaposto"=> $owner]);
        // segnaposto da richiamare nella pagina html con {{$segnaposto}}
    
    }

    public function chisiamo()
    {   
        $utenti=[
                    ['id'=>'1','name'=>'Luigi','surname'=>'Rossi','age'=>'21', 'img'=>'/img/Alessandro_leo.png'],
                    ['id'=>'2','name'=>'Antonio','surname'=>'Arsale','age'=>'18', 'img'=>'/img/andrea-mininni.png'],
                    ['id'=>'3','name'=>'Francesco','surname'=>'Verdi','age'=>'16', 'img'=>'/img/Angela-Aruanno.png'],
                    ['id'=>'4','name'=>'Giovanni','surname'=>'Rana','age'=>'47', 'img'=>'/img/Davide-Cariola.png'],
                    ['id'=>'5','name'=>'Davide','surname'=>'Golia','age'=>'25', 'img'=>'/img/donato_bitetto.png']
                ];
        
        
        return view('chisiamo', ['singoloUtente'=>$utenti]);
        //al richiamo della pagina chisiamo, scatterà la funzione omonima, che oltre a ritornare la pagina stessa, prenderà ogni "singoloUtente" (che è un parametro), di $utenti
    }
    
    public function dettagli($identificatore)
    {
        $utenti = [['id'=>'1','name'=>'Luigi','surname'=>'Rossi','age'=>'21', 'img'=>'/img/Alessandro_leo.png'],
                    ['id'=>'2','name'=>'Antonio','surname'=>'Arsale','age'=>'18', 'img'=>'/img/andrea-mininni.png'],
                    ['id'=>'3','name'=>'Francesco','surname'=>'Verdi','age'=>'16', 'img'=>'/img/Angela-Aruanno.png'],
                    ['id'=>'4','name'=>'Giovanni','surname'=>'Rana','age'=>'47', 'img'=>'/img/Davide-Cariola.png'],
                    ['id'=>'5','name'=>'Davide','surname'=>'Golia','age'=>'25', 'img'=>'/img/donato_bitetto.png']];

        foreach($utenti as $elementoArray)
            {
                if($identificatore == $elementoArray['id'])
                    {
                        return view('details', ['segnaposto' => $elementoArray]);
                    }
                
            }
    }

    public function servizi()
    {   
        
        return view("servizi");
        
    }



    }





