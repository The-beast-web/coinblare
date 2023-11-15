<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Notifications\Admin\NewUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::VERIFY;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->seo()->setTitle('Register');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'promo_code' => ['nullable', function ($field, $value, $fail) {
                if (!is_null($value)) {
                    $promo = User::where('promo_code', $value)->first();
                    if (!$promo) {
                        $fail('Invalid Promocode');
                    }
                }
            }]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'balance' => 0,
            'withdrawalable' => 0,
            'promo_code' => Str::random(7),
            'ex_code' => $data['promo_code'],
            'language' => app()->getLocale(),
            'status' => 'active',
        ]);
    }

    protected function registered(Request $request, $user)
    {
        Notification::send(User::find(6), new NewUser($user));

        if (!is_null($user->ex_code)) {
            $rec = User::where('promo_code', $user->ex_code)->first();
            $rec->withdrawalable = $rec->withdrawalable + 50;
            $rec->save();
        }
    }
}
