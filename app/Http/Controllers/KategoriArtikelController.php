<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    function index(){
        $KategoriArtikel=KategoriArtikel::all();
        return view('kategori_artikel.index',compact ('KategoriArtikel'));
    }

    public function show($id){
        $KategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show',compact('KategoriArtikel'));
    }

    public function create()
    {
    	return view( 'kategori_artikel.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	KategoriArtikel::create($input);

    	return redirect(route('kategori_artikel.index'));
    }
}

