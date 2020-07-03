<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('isi.pertanyaan', compact('pertanyaan'));
    }

    public function create() {
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('isi.tambahpertanyaan', compact('pertanyaan'));
    }

    public function store(Request $request) {
    	$judul = $request["judul"];
    	$isi = $request["isi"];
    	$user_id = $request["nama"];
    	$data = array('judul'=>$judul, 'isi'=>$isi, 'user_id'=>$user_id);
    	
    	$simpan = PertanyaanModel::simpan($data);

    	return redirect('/pertanyaan');
    }
}
