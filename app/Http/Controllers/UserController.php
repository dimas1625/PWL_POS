<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $manager = UserModel::firstOrCreate(
            ['username' => 'manager'],
            ['nama'     => 'Manager',]
        );

        // Kirim data ke view
        return view('user', ['data' => $manager]);
    }   
}
