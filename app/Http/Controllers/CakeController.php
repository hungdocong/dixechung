<?php

namespace App\Http\Controllers;

use App\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function searchByName(Request $request)
    {
        $keyword = $request->input('keyword');
        $cakes = Cake::select('name')->where('name', 'LIKE', "%$keyword%")->get();
        return response()->json($cakes);
    }
}

