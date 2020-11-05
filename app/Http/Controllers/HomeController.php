<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;

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
        return view('home');
    }
     
   /* public function save(Request $request)
    {
        $r = $request->all();
        $url = $r['url'];
        $path = base_path();
        $nom = "cd " . $path . "\Modules ; git clone " . $url;
        echo $nom;
        $output = shell_exec('cd ..\\Modules && git clone ' . $url);
        echo "<pre> $output</pre>";
    }*/

    public function store(Request $request){

        $r = $request->all();
        $correo = $r['correo'];
        $path = base_path();
        mail::to($correo)->send(new MessageReceived);
        return 'mensaje enviado';
    }
}
