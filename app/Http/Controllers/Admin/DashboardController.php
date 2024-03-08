<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
//        $dataFeed = new DataFeed();
        $users = User::all();
//        dd($users);
        return view('pages/admin/dashboard', ['users' => $users]);
    }
}
