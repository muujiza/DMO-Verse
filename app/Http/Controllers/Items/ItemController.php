<?php

namespace DMOVerse\Http\Controllers\Items;

use Storage;
use Session;
use DMOVerse\Models\Items\Item;
use DMOVerse\Http\Requests;
use DMOVerse\Http\Controllers\Controller;
use DMOVerse\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ItemController extends Controller 
{   
    /**
     * View all items
     *
     * @return Response
     */
    public function view()
    {   
        $items = Item::all();
        return $items;
    }
    /**
     * Display the add new item form
     *
     * @return Response
     */
    public function add()
    {   
        return view('items.add');
    }

    /**
     * Store new item to database
     *
     * @return Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'name' => 'required|unique:items',
            'description' => 'required',
            'category' => 'required',
            'icon' => 'required|image'
        ]);

        $icon_path = public_path().'/assets/img/items';
        $icon_name = str_random(10).'-'.$request->file('icon')->getClientOriginalName();

        $request->file('icon')->move($icon_path, $icon_name);

        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->type = $request->category;
        $item->icon = '/assets/img/items/'.$icon_name;
        $item->save();

        return redirect()->route('itemView');
    }
}
