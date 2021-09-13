<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

use App\Guest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.home');
    }



    public function store(Request $request)
        {

            $data = $request->all();

            Guest::create($data);

           if($_POST['vac1']=="da" || isset( $_POST['vac2'])=="da"){

            session()->flash('notify', 'Please send us your vaccine certificate or whatever at test@gmail.com');

           }

            session()->flash('confirmation', 'Thank You for the Confirmation!');

            return view('layouts.confirmation');

        }



        public function gallery(){
            return view('layouts.gallery');
        }

}
