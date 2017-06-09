<?php

namespace App\Http\Controllers;
use DB;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    {
        //$cards = DB::table('cards')->get();
        $cards = Card::all();
//        dd($cards);
        return view('cards.index',compact('cards'));
    }

    public function show(Card $card)
    {

        return view('cards.show', compact('card'));
//        $card = Card::find($id);
//        return view('cards.show', compact('card'));
    }
}
