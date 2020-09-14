@extends('layouts.app')

@section('title')
ข่าวกีฬา อัพเดทข่าวกีฬา ตารางบอล ผลบอลวันนี้ วิเคราะห์บอล ผลกีฬาทุกประเภท
@endsection

ิ@section('description')
ข่าวกีฬา ฟุตบอล พรีเมียร์ลีก บอลไทย เช็คผลบอล โปรแกรมการแข่งขัน ทั้งไทยและต่างประเทศ ข่าวมวย ผลการแข่งขัน 
@endsection

@section('keywords')
ผลบอล, sport, วิเคราะห์บอล, ข่าวกีฬา, ผลมวย
@endsection

@section('content')
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('home.inc.nav')
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container bg-con">
        <div class="row">
            <div class="col-md-8 pr-lg-0">
                <h1 class="textsubpage">ข่าวบอลประจำวัน</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="{{ url('/') }}"><i class="fas fa-home iconcolor"></i> <span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>ข่าวบอลประจำวัน</span>
                    </p>
                <div class="row">
                    @foreach($news as $n)
                        <div class="col-12 col-lg-6 allnews">
                            <a href="{{url('/news/'.$n['id'])}}" title="{{ $n['title'] }}">
                                <img src="{{api_img($n['image'])}}" alt="{{ $n['title'] }}">
                                <p class="titlepagenews">{{ $n['title'] }}</p>
                            </a>
                            <p class="borderglow"></p>
                            <div class="iconborder">
                                <span class="small">
                                    <i class="far fa-clock"></i>
                                    {{ thai($n['updated_at']) }}
                                </span>
                                <span class="pagenewsview small">
                                    <i class="far fa-eye"></i>
                                    {{ $n['visit'] }} views
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4 pr-lg-0">
                <div id="sidear-scroll">
                    <div class="col-12">
                        <a href="https://line.me/R/ti/p/%40792ftxvk" target="_blank"><img src="{{asset('images/pro.jpg')}}" alt="banner" class="bannerloginnews"></a>
                    </div>
                    <div class="balllogin">
                        <div class="col-form" id="formballtor">
                            <div class="col box1">
                                @include('home.inc.register')
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="https://www.mm88online.com" target="_blank"><img src="{{asset('images/pro1.jpg')}}" alt="banner" class="bannerloginnews"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('home.inc.footer')
@endsection

