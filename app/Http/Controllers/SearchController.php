<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function getDistrito(Request $request){
        if (!$request->ajax()) abort(403);

        $distrito = \App\Distrito::where('ID_PROVINCIA', $request->input('provincia'));
        return ($distrito->get(['ID_DISTRITO', 'DESCRIPCION']));
    }

    public function getCorregimiento(Request $request){
        if (!$request->ajax()) abort(403);

        $distrito = \App\Corregimiento::where('ID_DISTRITO', $request->input('distrito'));
        return ($distrito->get(['ID_CORREGIMIENTO', 'DESCRIPCION']));
    }
}
