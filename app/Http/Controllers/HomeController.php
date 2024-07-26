<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

       

        $users = User::query()->get();


        return view('welcome', [
            'users' => $users
        ]);
    }
}
