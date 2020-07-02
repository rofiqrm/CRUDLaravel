<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JawabanModel extends Model
{
    public static function get_all() {
    	$items = DB::table('answers')->get();
    	return $items;
    }

    public static function save($data) {
    	$tambah = DB::table('answers')->insert($data);

    	return $tambah;
    }
}
