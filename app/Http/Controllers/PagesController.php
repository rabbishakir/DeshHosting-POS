<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to New App";
        return view('welcome')->with('title', $title);
    }
    public function about(){
        $title="About";
        return view('about')->with('title', $title);
    }
    public function services(){
        $title="Services";
        $services = [
            ['name' => 'Web Design', 'price' => 550],
            ['name' => 'Web Hosting', 'price' => 250],
            ['name' => 'Mobile App Development', 'price' => 150],
        ];
        return view('services', ['servicesList'=>$services])->with('title', $title);
       
    }

}
