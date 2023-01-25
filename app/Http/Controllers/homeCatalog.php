<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curso;

class homeCatalog extends Controller
{
    public function index(){

        $cursos = curso::all();

        return view('main', ["cursos" => $cursos]);
    }
}
