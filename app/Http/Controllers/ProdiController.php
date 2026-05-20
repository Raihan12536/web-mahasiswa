<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::paginate(10);
        return view('prodi.prodi', compact('prodis'));
    }
}