<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    { 
        $data = Http::get('https://api-88online.com/api/index')->json();
        return view('home.index',[
            'active'=>'home',
            'hot_news'=>$data['hot_news'],
            'news'=>$data['news'],
            'analyzes'=>$data['analyzes'],
            'hls'=>$data['hls'],
            'yous'=>$data['yous'],
            'bts'=>$data['bts'],
            'bstep'=>$data['bstep'],
            'zft'=>$data['zft']
        ]);
    }

    public function newsItem(Request $request, $blogId) {
        $data = Http::get('https://api-88online.com/api/blogs/'.$blogId)->json();
        return view('home.news-item',[
            'active'=>'news',
            'news'=>$data['news']
        ]);
    }

    public function news(Request $request) {
        $data = Http::get('https://api-88online.com/api/news')->json();
        return view('home.news',[
            'active'=>'news',
            'news'=>$data['news']
        ]);
    }


    public function analyzeItem(Request $request, $blogId) {
        $data = Http::get('https://api-88online.com/api/blogs/'.$blogId)->json();
        return view('home.analyze-item',[
            'active'=>'analyzes',
            'news'=>$data['news']
        ]);
    }

    public function analyzes(Request $request) {
        $data = Http::get('https://api-88online.com/api/analyzes')->json();
        //$data['visit'] = ceil($data['visit']+1);
        return view('home.analyzes',[
            'active'=>'analyzes',
            'news'=>$data['news']
        ]);
    }

    public function tdz(Request $request) {    
        $data = Http::get('https://api-88online.com/api/tdz')->json();
        //dd($data['news']);
        return view('home.tdedmaster',[
            'active'=>'tdz',
            'news'=>$data['news']
        ]);
    }

    public function tds()
    { 
        $data = Http::get('https://api-88online.com/api/ballstep')->json();
        return view('home.tdedstep',[
            'active'=>'tds',
            'bstep'=>$data['bstep']
        ]);
    }

    public function hls()
    { 
        $data = Http::get('https://api-88online.com/api/hls')->json();
        //dd($data);
        return view('home.highlight',[
            'active'=>'hls',
            'hls'=>$data['hls']
        ]);
    }

    public function balltable()
    { 
        $data = Http::get('https://api-88online.com/api/balltable')->json();
        return view('home.balltable',[
            'active'=>'balltable',
            'bts'=>$data['bts']
        ]);
    }

}
