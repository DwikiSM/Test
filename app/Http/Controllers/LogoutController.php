<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;
use Illuminate\Support\Facades\URL;

class LogoutController extends Controller
{
    function index() {
      SSO::logout(URL::to('/'));
    }
}
