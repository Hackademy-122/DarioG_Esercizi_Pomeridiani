<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {   
        return view("welcome");
    }

    public function prodotti()
{
    $arrayProdotti = 
        [
            ['id' => '1', 'type' => 'All Mountain', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => ''],
            ['id' => '2', 'type' => 'Freestyle', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => ''],
            ['id' => '3', 'type' => 'Jibbing', 'where' => 'Rail e street session', 'consigli' => 'Misura più corta della media', 'img' => ''],
        ];

    $trademarks = "Burton";
    return view("prodotti", ["prodotti" => $arrayProdotti, "tradeMarks" => $trademarks]);
}

}
