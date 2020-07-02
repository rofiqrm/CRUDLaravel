<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PertanyaanModel extends Model
{
    public static function get_all() {
    	$items = DB::table('questions')->get();
    	return $items;
    }

    public static function save($data) {
    	$tambah = DB::table('questions')->insert($data);

    	return $tambah;
    }
}
