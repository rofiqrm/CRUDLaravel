<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PertanyaanModel extends Model
{
    public static function get_all() {
    	$items = DB::table('questions')
		            ->leftJoin('users', 'questions.user_id', '=', 'users.id')
		            ->select('questions.id as id', 'name', 'judul', 'users.id as user_id')
		            ->orderBy('id', 'desc')
		            ->get();
		return $items;
    }

    public static function simpan($data) {
    	$tambah = DB::table('questions')->insert($data);

    	return $tambah;
    }

    public static function get_isi($pertanyaan) {
    	$isi = DB::table('questions')
		            ->leftJoin('users', 'questions.user_id', '=', 'users.id')
		            ->select('isi', 'name', 'questions.id as id')
		            ->where('questions.id', $pertanyaan)
		            ->get();
    	return $isi;
    }
}
