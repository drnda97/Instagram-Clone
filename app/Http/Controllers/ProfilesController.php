<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function profile(User $user)
    {
      return view('profiles/profile', [
        'user' => $user,
      ]);
    }

    public function edit(User $user)
    {

      return view('profiles/edit', [
        'user' => $user,
      ]);
    }
}
