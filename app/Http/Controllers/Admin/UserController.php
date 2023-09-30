<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * لیست کاربران
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.list', [
            'users' => User::all()
        ]);
    }
}
