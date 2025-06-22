<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AccountController extends Controller
{
    public function dashboard()
    {
        // Для гостей
        if (!Auth::check()) {
            return view('account.guest');
        }

        // Для авторизованных
        return view('account.dashboard', [
            'businesses' => Auth::user()->businesses
        ]);
    }
}