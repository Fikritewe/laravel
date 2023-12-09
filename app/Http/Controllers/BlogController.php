<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequests;

class BlogController extends Controller
{
    public function store(PostRequests $request)
    {
        echo 'Nama: ' . $request->nama . '<br>';
     return back()->with('success','Data Added Successfully');

    }

    public function home(){
        return view('home');
    }

    public function tentang(){
        return view('tentang');
    }

    public function kontak(){
        return view('kontak');
    }

    public function sbmtkntk(PostRequests $request){
        // return view('hasil');
    }

    public function pesan(){
        return view('pesan');
    }

   

}