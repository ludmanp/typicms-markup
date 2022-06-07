<?php

namespace TypiCMS\Modules\Markup\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index($string){
        return view('markup.'.$string)??'Page not found';
    }

}