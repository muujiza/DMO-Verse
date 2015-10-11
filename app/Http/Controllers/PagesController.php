<?php

namespace DMOVerse\Http\Controllers;

use Session;
use DMOVerse\Http\Requests;
use DMOVerse\Http\Controllers\Controller;
use DMOVerse\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class PagesController extends Controller 
{   
    /**
     * Change the language for the user
     *
     * @return Response
     */
    public function languageSet($language)
    {   
        Session::put('language', $language);
        return back();
    }
}
