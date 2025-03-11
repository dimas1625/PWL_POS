<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $manager = UserModel::firstOrCreate(
            [
            'username' => 'manager22',
            'nama'     => 'Manager Duas Dua',
            'password' => Hash::make('12345'),
            'level_id' => 2
            ]
        );

        // Kirim data ke view
        return view('user', ['data' => $manager]);
    }   
}
