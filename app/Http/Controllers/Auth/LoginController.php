<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
  public function __invoke(LoginRequest $request)
  {
    // $user = User::where('email', $request->email)->first();
    // if(!$user || !Hash::check($request->password, $user->password)){
    //   throw ValidationException::withMessages([
    //     'email' => ['The credential you entered is incorrect!']
    //   ]);
    // }
    if(!auth()->attempt($request->only(['email', 'password']))){
      throw ValidationException::withMessages([
        'email' => ['The credential you entered is incorrect!']
      ]);
    }
  }
}
