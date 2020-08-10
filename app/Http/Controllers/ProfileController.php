<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
  public function __construct()
  {
    $this->middleware('log');
  }
  public function show(User $user)
  {
    return view(
      'profiles.show',
      [
        'user' => $user,
        'followeds' => $user->follows,
        'tweets' => $user->tweets()->paginate(3),
        'profile'=>$user->profile
      ]
    );
  }
  public function edit(User $user)
  {
    $profile = $user->profile;
    $this->authorize('update', $profile);
    return view('profiles.edit', [
      'user' => $user,
      'profile'=>$user->profile,
      'followeds' => $user->follows,
    ]);
  }

  public function update(Request $request, Profile $profile)
  {
   $this->authorize('update', $profile);
   $userAttributes = $request->validate( [
      'username' => ['required', 'string', 'max:255','alpha_dash',Rule::unique('users')->ignore($profile->user)],
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($profile->user)],
      
  ]);
  $profileAttributes = $request->validate([
    'avatar'=>['file'],
    'body' => ['required','max:500'],
  ]);
  if($request->exists('avatar')){
    $profileAttributes['avatar'] = request('avatar')->store('avatars');
  }
  if($request->__isset('password')){
    $password = $request->validate(['password' => ['string', 'min:8', 'confirmed']]);
    $userAttributes['password']= Hash::make($password);
  }
  $profile->user()->update($userAttributes);
  $profile->update($profileAttributes);
  return redirect(route('home'));
  }
}
