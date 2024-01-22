<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use League\CommonMark\Node\Block\Document;

class PublicController extends Controller
{
    public function home()
    {   
        $success = 'Richiesta inviata. Grazie.';
        return view("welcome", ['success'=>$success]);
    }

public function prodotti()
    {   
    $arrayProdotti = [
        ['id' => '1', 'type' => 'All Mountain', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 399.99],
        ['id' => '2', 'type' => 'Freestyle', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 349.99],
        ['id' => '3', 'type' => 'Jibbing', 'where' => 'Rail e street session', 'consigli' => 'Misura più corta della media', 'img' => '', 'price' => 299.99],
        ['id' => '4', 'type' => 'Powder', 'where' => 'Neve profonda e fresca', 'consigli' => 'Misura più lunga', 'img' => '', 'price' => 449.99],
        ['id' => '5', 'type' => 'Alpine', 'where' => 'Piste veloci e carving', 'consigli' => 'Misura lunga e rigida', 'img' => '', 'price' => 499.99],
        ['id' => '6', 'type' => 'Splitboard', 'where' => 'Backcountry e fuoripista', 'consigli' => 'Divisibile per scialpinismo', 'img' => '', 'price' => 599.99],
        ['id' => '7', 'type' => 'Big Mountain', 'where' => 'Terreni accidentati e fuoripista estremo', 'consigli' => 'Misura lunga e rigida', 'img' => '', 'price' => 549.99],
        ['id' => '8', 'type' => 'Halfpipe', 'where' => 'Halfpipe e snowpark', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 379.99],
        ['id' => '9', 'type' => 'Carving', 'where' => 'Curve veloci su piste ben battute', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 419.99],
        ['id' => '10', 'type' => 'Backcountry', 'where' => 'Fuoripista e avventure nella natura', 'consigli' => 'Misura lunga e adatta ad attacchi da scialpinismo', 'img' => '', 'price' => 499.99],
    ];
    

        $trademarks = "Burton";
        

    return view("prodotti", ["prodotti" => $arrayProdotti, "tradeMarks" => $trademarks]);
    }


public function dettagli($ab)
{
    $arrayProdotti = [
        ['id' => '1', 'type' => 'All Mountain', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 399.99],
        ['id' => '2', 'type' => 'Freestyle', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 349.99],
        ['id' => '3', 'type' => 'Jibbing', 'where' => 'Rail e street session', 'consigli' => 'Misura più corta della media', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 299.99],
        ['id' => '4', 'type' => 'Powder', 'where' => 'Neve profonda e fresca', 'consigli' => 'Misura più lunga', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 449.99],
        ['id' => '5', 'type' => 'Alpine', 'where' => 'Piste veloci e carving', 'consigli' => 'Misura lunga e rigida', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 499.99],
        ['id' => '6', 'type' => 'Splitboard', 'where' => 'Backcountry e fuoripista', 'consigli' => 'Divisibile per scialpinismo', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 599.99],
        ['id' => '7', 'type' => 'Big Mountain', 'where' => 'Terreni accidentati e fuoripista estremo', 'consigli' => 'Misura lunga e rigida', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 549.99],
        ['id' => '8', 'type' => 'Halfpipe', 'where' => 'Halfpipe e snowpark', 'consigli' => 'Misura intermedia', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 379.99],
        ['id' => '9', 'type' => 'Carving', 'where' => 'Curve veloci su piste ben battute', 'consigli' => 'Misura intermedia', 'img' => 'https://m.media-amazon.com/images/I/71NEBGxg-qL._AC_SX679_.jpg', 'price' => 379.99],
    ];
    

        foreach ($arrayProdotti as $elementoArray) {
            if  ($ab == $elementoArray['id']) {
                return view('dettagli', ['dettaglioRichiesto' => $elementoArray]);
            }
}
}

public function contattaci()
    {
        return view('contactUs');
    }

    public function contattaciSubmit(Request $pippo) 
    {   
        $email = $pippo->input('email');
        $nome = $pippo->input('nome');
        $messaggio = $pippo->input('messaggio');

        Mail::to($email)->send(new ContactMail($email, $nome, $messaggio));


        return view('success');

        }

        public function success()
    {
        return view('success');
    }

}
