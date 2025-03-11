<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        $user = UserModel::findOrFail(1); //berfungsi untuk mencari data pada tabel yang terkait dengan model UserModel berdasarkan primary key, dalam hal ini dengan nilai 1

        return view('user', ['data' => $user]);
    }   
}
