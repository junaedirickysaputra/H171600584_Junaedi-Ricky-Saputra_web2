<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    function index(){
        $Berita=Berita::all();
        return view('Berita.index',compact ('Berita'));
    }
}