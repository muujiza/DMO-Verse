<?php

namespace DMOVerse\Http\Controllers\Market;

use Storage;
use DMOVerse\Models\Items\Item;
use DMOVerse\Models\Market\Market;
use DMOVerse\Models\Market\MarketItem;
use DMOVerse\Http\Requests;
use DMOVerse\Http\Controllers\Controller;
use DMOVerse\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class MarketController extends Controller 
{   
    /**
     * View all items
     *
     * @return Response
     */
    public function view()
    {   
        $market = Market::all();
        return view('market.list', compact('market'));
    }

    /**
     * View all items
     *
     * @return Response
     */
    public function create()
    {   
        $market = Market::all();
        return view('market.create', compact('market'));
    }

    /**
     * View all items
     *
     * @return Response
     */
    public function make()
    {   
        $market = Market::all();
        return view('market.list', compact('market'));
    }

    
}
