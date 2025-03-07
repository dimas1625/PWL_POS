<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class LevelController extends Controller
{
    public function index() {
        DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?, ?)', [
            'CUs', 
            'Pelanggan', 
            now()
        ]);

        return 'Insert data baru berhasil';
    }
}
