<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Register new user
     *
     * Handle an incoming registration request.
     *
     * @bodyParam name string required
     * @bodyParam email email required
     * @bodyParam nomor_telpon numeric required
     * @bodyParam fcm_token number required token fcm
     * @bodyParam user_roles array example [3,4]. 4 = pengguna, 3 = kontributor
     * @bodyParam foto file user's photo profile
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(UserRequest $request)
    {
        $user=$request->createNewUser();


        if(!$request->wantsJson()) {
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }else{
            return $user;

        }
    }
}
