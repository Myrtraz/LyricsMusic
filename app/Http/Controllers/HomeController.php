<?php

namespace App\Http\Controllers;

use App\Music;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //
    }

    public function show()
    {
        $user= User::get()->first();
        return view('home', compact('user'));
    }

    public function search(Request $request) {
        $name = $request->get('title');

        $music = Music::where('title', 'like', "%$name%")->first();

        if (is_null($music)) {
            return redirect()->to('/home');
        }

        return view('home', compact('music'));
    }

    public function settings()
    {
        return view('auth.settings');
    }
}
