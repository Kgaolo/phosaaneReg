<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'          => ['required', 'string', 'max:255'],
            'surname'       => ['required', 'string', 'max:255'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'         => ['required', 'string', 'max:20'],
            'province'      => ['required', 'string', 'max:255'],
            'age_group'     => ['required', 'string', 'max:50'],
            'gender'        => ['required', 'string', 'max:50'],
            'school_name'   => ['required', 'string', 'max:255'],
            'qualification' => ['required', 'string', 'max:255'],
            'career'        => ['required', 'string', 'max:255'],
            'interested_in' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     */
    protected function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $user = User::create([
                'name'     => $data['name'],
                'email'    => $data['email'],
                // 'password' => Hash::make($data['password']),
            ]);

            $user->profile()->create([
                'surname'       => $data['surname'],
                'phone'         => $data['phone'],
                'province'      => $data['province'],
                'qualification' => $data['qualification'],
                'gender'        => $data['gender'],
                'school_name'   => $data['school_name'],
                'age_group'     => $data['age_group'],
                'career'        => $data['career'],
                'interested_in' => $data['interested_in'],
            ]);

            return $user;
        });
    }

    /**
     * Override what happens after user registers.
     */
    protected function registered($request, $user)
    {
        // Prevent auto-login after registration
        auth()->logout();

        // Redirect back to register page with success message
        return redirect('/register')->with('success', 'Registration successful!');
    }
}
