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

    public function hlItem(Request $request, $blogId) {
        $data = Http::get('https://api-88online.com/api/hl/'.$blogId)->json();
        return view('home.highlight-item',[
            'active'=>'hls',
            'news'=>$data['hl']
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


    public function lineNotify(Request $request) {
        $message="\n".'ชื่อ '.$request->fullname."\n".'เบอร์โทรศัพท์: '.$request->phone."\n".'LineID: '.$request->lineid;
        $token = 'E85WI8wJ3xDUBlxLR0xGl9zOeep3TseAQMmyKA4kJw0';
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $ch );
        curl_close( $ch );
        return view('home.info',[
            'active' => 'home',
            'title' => 'ระบบลงทะเบียน',
            'message' => '<h1 class="text-center text-warning mb-5">ท่านได้ลงทะเบียนเรียบร้อย</h1>
            <p class="text-center">ทางทีมงานได้รับข้อมูลการลงทะเบียนสมาชิกจากท่านแล้ว</p>
            <p class="text-info text-center">กรุณารอสักครู่... ทางทีมงานจะติดต่อกลับ ให้เร็วที่สุด ขอบคุณค่ะ</p>
            <br />
            <p class="text-center text-danger"><i>ทีมงานทีเด็ดคลับ ดอท ดอม</i></p>
            <p class="text-center"><a href="/">กลับไปหน้าแรก</a></p>
            <br />
            '
        ]);
    }
}
