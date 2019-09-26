<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    function index(){
        $KategoriGaleri=KategoriGaleri::all();
        return view('kategori_galeri.index',compact ('KategoriGaleri'));
    }
}
