<?php

namespace TypiCMS\Modules\Markup\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index($string){
        if (view()->exists('markup.'.$string)) {
            return view('markup.' . $string);
        }
        abort(404);
    }

}