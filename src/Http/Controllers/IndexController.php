<?php

namespace TypiCMS\Modules\Markup\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    function pages($string){
        if (view()->exists('markup.'.$string)) {
            return view('markup.' . $string);
        }
        abort(404);
    }

    function index()
    {
        try {
            $templateDir = 'markup';
            $viewPath = app()['view']->getFinder()->getPaths()[0];
            $directory = rtrim($viewPath.DIRECTORY_SEPARATOR.$templateDir, DIRECTORY_SEPARATOR);
            $files = File::files($directory);
        } catch (Exception $e) {
            $files = File::files(base_path('resources/views/markup'));
        }
        $pages = [];
        foreach ($files as $file) {
            $filename = File::name($file);
            $name = str_replace('.blade', '', $filename);
            if ($name[0] != '_' && !in_array($name, ['layout', 'master'])) {
                $pages[$name] = ucfirst($name);
            }
        }

        return view('markup._list', ['pages' => $pages]);

    }

}
