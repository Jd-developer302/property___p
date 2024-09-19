<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class LocaleController extends Controller
{
    public function change($locale)
    {  dd("done");
        if (! in_array($locale, ['en', 'es', 'fr','zh','ru'])) {
            abort(400);
        }
       
        App::setLocale($locale);
        return Redirect::back();  
    }
}
