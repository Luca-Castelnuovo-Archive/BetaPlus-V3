<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function login() {
        return view('pages.auth.login');
    }

    public function register() {
        return view('pages.auth.register');
    }

    public function reset() {
        return view('pages.auth.reset');
    }
}
