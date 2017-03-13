<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;

use App\Pengguna as User;

class LoginController extends Controller
{
    function index() {
      SSO::authenticate();

      if (SSO::check()) {
        $user = SSO::getUser();

        $dbuser = User::where('npm', $user->npm)->first();
        // query user di database
        if (!$dbuser) {
          // query insert user to database
          $newuser = new User();
          $newuser->npm = $user->npm;
          $newuser->name = $user->name;
          $newuser->role = 0;
          $newuser->save();
          $dbuser = $newuser;
        }

        // Asumsikan user udah dapet dari database
        session([
          'npm' => $dbuser->npm,
          'role' => $dbuser->role
        ]);

        return redirect('test');

      }
    }
}
