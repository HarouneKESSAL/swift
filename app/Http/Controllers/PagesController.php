<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')-> with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'services',
            'services'=>[
            'Ai','Pweb','Design'
            ],
        );
        return view('pages.services')-> with($data);;
    }
}
