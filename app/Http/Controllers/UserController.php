<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        // Ambil jumlah user dengan level_id = 2
        $userCount = UserModel::where('level_id', 2)->count();

        // Kirim data ke view
        return view('user', ['data' => $userCount]);
    }   
}
