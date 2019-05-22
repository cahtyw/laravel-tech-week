<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChampolasLimpas;

class ChampolasController extends Controller
{
    public function index(Request $request) {
        $payload = ChampolasLimpas::all();


        return view('champolas', compact('payload'));
    }
}
