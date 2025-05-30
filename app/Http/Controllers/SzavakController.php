<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index(){
        return Szavak::all();
    }
    public function szavakTema(){
        $query =DB::select('
        SELECT sz.id, t.temanev, sz.angol, sz.magyar
        FROM szavaks sz
        INNER JOIN temas t on sz.temaId=t.id
        ');
        return response()->json($query);
    }
   
}
