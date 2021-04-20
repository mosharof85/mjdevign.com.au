<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialController extends Controller
{
  public function redirect($provider)
  {
    $redirectAfterLogin = request()->headers->get('referer');
    session(['redirectAfterLogin' => $redirectAfterLogin]);
    return Socialite::driver($provider)->redirect();
  }

  public function callback($provider)
  {
    $getInfo = Socialite::driver($provider)->stateless()->user();
    $user = $this->createUser($getInfo, $provider);
    auth()->login($user);
    if ($user->country != "")
    {
        if (session()->has('redirectAfterLogin')) {
            $url = session('redirectAfterLogin');
            session()->forget('redirectAfterLogin');
            return redirect($url);
        } 
          return redirect()->to('/home');
          
    }
    else 
    {
        if (session()->has('redirectAfterLogin')) {
            $url = session('redirectAfterLogin');
            session()->forget('redirectAfterLogin');
            return redirect($url)->with( ['company' => "ask"] );
        }
      return redirect()->to('/home')->with( ['company' => "ask"] );
    }
  }
  public function registerSocial()
  {
    return view('auth.registerS');
  }

  public function completeSocial()
  {
    $user = Auth::user();
    $user->country = request()->input('country');
    $user->city =  request()->input('city');
    $user->save();
    return redirect()->to('/home');
  }


  function createUser($getInfo, $provider)
  {
    $user = User::where('provider_id', $getInfo->id)->first();
    if (!$user) {
      $user = User::create([
        'name'     => $getInfo->name,
        'email'    => $getInfo->email,
        'provider' => $provider,
        'provider_id' => $getInfo->id
      ]);
    }
    return $user;
  }
}
