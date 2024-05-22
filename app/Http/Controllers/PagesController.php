<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to My Project';
        return view('pages.index') ->with('title',$title);
    }

    public function about(){
        $title = 'About';
        return view('pages.index') ->with('title',$title);
    }

    public function service(){
        $data = array(
            'title' => 'Services',
            'service' => ['Web Design', 'Programming', 'SEO']
        );
        
        return view('pages.index', $data);
        
 
    }
   


}
