<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;

class TestController extends Controller
{
    function index() {
      if (!session('npm')) return redirect('login');

      return view('welcome');
    }
}
