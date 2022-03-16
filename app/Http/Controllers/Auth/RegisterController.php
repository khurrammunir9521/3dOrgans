<?php

namespace App\Http\Controllers\Auth;

use App\Models\Logo;
use App\Models\Tech;
use App\Models\User;
use App\Models\AboutUs;
use App\Models\Medical;
use App\Models\SideLogo;
use App\Models\ContactUs;
use App\Models\ImageSlider;
use App\Models\PublicService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function homepage()
    {

        if (Auth::id() == null) {
            $about = AboutUs::first();
            $con = ContactUs::first();
            $tech = Tech::first();
            $profile = ImageSlider::first();
            $order = Medical::orderBy('id', 'DESC')->first();
            $public = PublicService::orderBy('id', 'DESC')->first();
            $side = SideLogo::first();
            $logos = Logo::first();
            $orders = [];
            $publics = [];
            return view('pages.user.index.index', compact('about', 'con', 'tech', 'profile', 'order', 'side', 'orders', 'logos', 'public', 'publics'));
        } elseif (auth()->user()->role == 'admin') {
            return view('pages.admin.dashboard.dashboard');
        } else {
            $about = AboutUs::first();
            $con = ContactUs::first();
            $tech = Tech::first();
            $profile = ImageSlider::first();
            $order = Medical::orderBy('id', 'DESC')->first();
            $public = PublicService::orderBy('id', 'DESC')->first();
            $side = SideLogo::first();
            $logos = Logo::first();
            $orders = Medical::where('user_id', Auth::id())->get();
            $publics = PublicService::where('user_id', Auth::id())->get();
            return view('pages.user.index.index', compact('about', 'con', 'tech', 'profile', 'order', 'side', 'orders', 'logos', 'public', 'publics'));
        }
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);
        if (isset($data['profile']) && !empty($data['profile'])) {
            $datas = Storage::disk('public')->put('upload/', $data['profile']);
        } else {
            $datas = null;
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);

        if (isset($data['profile']) && !empty($data['profile'])) {
            $datas = Storage::disk('public')->put('upload/', $data['profile']);
        } else {
            $datas = null;
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'field' => $data['field'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
            'profile' => $datas,
        ]);
    }
}
