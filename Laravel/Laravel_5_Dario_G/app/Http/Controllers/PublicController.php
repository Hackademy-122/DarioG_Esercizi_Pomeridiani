<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {
        return view("welcome");
    }

    public function store()
    {
        $arrayProdotti = [
            ['id' => '1', 'type' => 'All Mountain', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 399.99],
            ['id' => '2', 'type' => 'Freestyle', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 349.99],
            ['id' => '3', 'type' => 'Jibbing', 'where' => 'Rail e street session in neve fresca', 'consigli' => 'Misura più corta della media', 'img' => '', 'price' => 299.99],
            ['id' => '4', 'type' => 'Powder', 'where' => 'Neve profonda e fresca', 'consigli' => 'Misura più lunga', 'img' => '', 'price' => 449.99],
            ['id' => '5', 'type' => 'Alpine', 'where' => 'Piste veloci e carving', 'consigli' => 'Misura lunga e rigida', 'img' => '', 'price' => 499.99],
            ['id' => '6', 'type' => 'Splitboard', 'where' => 'Backcountry e fuoripista', 'consigli' => 'Divisibile per scialpinismo', 'img' => '', 'price' => 599.99],
            ['id' => '7', 'type' => 'Big Mountain', 'where' => 'Terreni accidentati e fuoripista estremo', 'consigli' => 'Misura lunga e rigida', 'img' => '', 'price' => 549.99],
            ['id' => '8', 'type' => 'Halfpipe', 'where' => 'Halfpipe e snowpark', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 379.99],
            ['id' => '9', 'type' => 'Carving', 'where' => 'Curve veloci su piste ben battute', 'consigli' => 'Misura intermedia', 'img' => '', 'price' => 419.99],
            ['id' => '10', 'type' => 'Backcountry', 'where' => 'Fuoripista e avventure nella natura', 'consigli' => 'Misura lunga e adatta ad attacchi da scialpinismo', 'img' => '', 'price' => 499.99],
        ];
        
        return view("store", ['prodotti'=>$arrayProdotti]);
    }

    public function dettagli($a)
    {
        $arrayProdotti = [
            ['id' => '1', 'type' => 'All Mountain', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 399.99],
            ['id' => '2', 'type' => 'Freestyle', 'where' => 'Pista, brevi uscite in fresca e qualche giro in park', 'consigli' => 'Misura intermedia', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 349.99],
            ['id' => '3', 'type' => 'Jibbing', 'where' => 'Rail e street session in neve fresca', 'consigli' => 'Misura più corta della media', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 299.99],
            ['id' => '4', 'type' => 'Powder', 'where' => 'Neve profonda e fresca', 'consigli' => 'Misura più lunga', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 449.99],
            ['id' => '5', 'type' => 'Alpine', 'where' => 'Piste veloci e carving', 'consigli' => 'Misura lunga e rigida', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 499.99],
            ['id' => '6', 'type' => 'Splitboard', 'where' => 'Backcountry e fuoripista', 'consigli' => 'Divisibile per scialpinismo', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 599.99],
            ['id' => '7', 'type' => 'Big Mountain', 'where' => 'Terreni accidentati e fuoripista estremo', 'consigli' => 'Misura lunga e rigida', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 549.99],
            ['id' => '8', 'type' => 'Halfpipe', 'where' => 'Halfpipe e snowpark', 'consigli' => 'Misura intermedia', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 379.99],
            ['id' => '9', 'type' => 'Carving', 'where' => 'Curve veloci su piste ben battute', 'consigli' => 'Misura intermedia', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 419.99],
            ['id' => '10', 'type' => 'Backcountry', 'where' => 'Fuoripista e avventure nella natura', 'consigli' => 'Misura lunga e adatta ad attacchi da scialpinismo', 'img' => 'https://www.burton.com/static/product/W24/10688110960_1.png?impolicy=bglt&imwidth=580', 'price' => 499.99],
        ];  

        foreach ($arrayProdotti as $elementoArray) {
            if ($a == $elementoArray['id']) {
                return view('dettagli', ['dettaglioRichiesto' => $elementoArray]);
            }
        }
    }

    public function contattaci()
    {
        return view('contattaci');
    }

    public function messaggioinviato(Request $contattaci)
    {   
        $email = $contattaci->input ('email');
        $name = $contattaci->input ('name');
        $message = $contattaci->input ('message');

        Mail::to($email)->send(new ContactMail($email, $name));
        

        return view('messaggioInviato', ['nome'=>$name]);
    }
    
}
