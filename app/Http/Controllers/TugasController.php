<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Booking;
use App\Models\Pesan; 

class TugasController extends Controller
{
    //
    public function about(){

        return view('about');
    }

    public function booking(){

        return view('booking');
    }

    public function show(){
        $pesans = Pesan::all();

        return view('index',['pesans'=>$pesans] );
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
        ]);

        Booking::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'tanggal'=>$request->tanggal,
            'jumlah_tamu'=>$request->jumlah_tamu,
            'pesan'=>$request->pesan,           
        ]);

        return view('booking');
    }
 
    public function store_pesan(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
        ]);

        Pesan::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'subjek'=>$request->subjek,
            'pesan'=>$request->pesan,           
        ]);

        return view('contact');
    }
 
    
    public function service(){

        return view('service');
    }


    public function contact(){

        return view('contact');
    }

    public function index(){
        $pesans = Pesan::All();
        $bookings = Booking::All();

        return view('index', ['pesans'=> $pesans,'bookings'=>$bookings]);
    }
    
    public function menu(){

        return view('menu');
    }
    public function team(){

        return view('team');
    }
    public function testimoni(){

        return view('testimoni');
    }




 
}
