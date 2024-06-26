<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleLogin extends Controller
{
    public function redirectToGoogle(): RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(): RedirectResponse
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('google_id', $user->id)->first();

        if ($existingUser) {
            // Log in the existing user.
            auth()->login($existingUser, true);
        } else {

            $fields = [
                'name' => $user->name,
                'google_id' => $user->id,
            ];

            if (!User::find($user->email)){
                $fields['password'] = bcrypt(Str::random(16));
            }

            $newUser = User::updateOrCreate(
                ['email' => $user->email],
            );

            // Log in the new user.
            auth()->login($newUser, true);
        }

         // Redirect to url as requested by user, if empty use /dashboard page as generated by Jetstream
        return redirect()->intended('/');
    }
}