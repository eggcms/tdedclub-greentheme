@extends('layouts.app')

@section('title')
วิเคราะห์บอล ทีเด็ดฟุตบอล ฟันธงบอล โดยเซียนผู้คร่ำวอดในวงการฟุตบอล
@endsection
@section('description')
วิเคราะห์บอล ทีเด็ดฟุตบอล ฟันธงบอล โดยเซียนผู้คร่ำวอดในวงการฟุตบอล ทีเด็ดบอล ทรรศนะบอล เซียนสเต็ป ทีเด็ดบอลวันนี้ ทีเด็ดบอลชุด ทีเด็ดบอลเต็ง
@endsection
@section('keywords')
วิเคราะห์บอล, ทีเด็ดฟุตบอล, ทีเด็ดบอล, ทรรศนะบอล, เซียนสเต็ป, ทีเด็ดบอลวันนี้, ทีเด็ดบอลชุด, ทีเด็ดบอลเต็ง, ตารางบอล, ราคาบอล, บอลวันนี้, ตารางบอลวันนี้, โปรแกรมบอล, โปรแกรมบอลวันนี้, โปรแกรมบอลพรุ่งนี้, กีฬาวันนี้
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
                <h1 class="textsubpage">วิเคราะห์บอลบอล</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="{{ url('/') }}"><i class="fas fa-home iconcolor"></i> <span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>วิเคราะห์บอลบอล</span>
                    </p>

                <div class="row">
                    @foreach($news as $n)
                        <div class="col-12 col-lg-6 allnews">
                            <a href="{{url('/analyze/'.$n['id'])}}" title="{{ $n['title'] }}">
                                <img src="{{api_img($n['image'])}}" alt="{{ $n['title'] }}">
                                <p class="titlepagenews">{{ $n['title'] }}</p></a>
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

            <div class="col-12 col-lg-4 pr-md-0">
                @include('home.inc.sidebar')
            </div>
        </div>

    </div>
</main>

@include('home.inc.footer')


@endsection

