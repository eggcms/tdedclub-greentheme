@extends('layouts.app')

@section('title')
{{ $news['title'] }}
@endsection
@section('description')
{{ str_replace('"','',$news['sub_title']) }}
@endsection
@section('keywords')
{{ str_replace([' ','"'],[', ',''],$news['sub_title']) }} ฟุตบอล, ราคาบอล, บอลวันนี้, ตารางบอลวันนี้
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
            <div class="col-md-8 pr-md-0">
                <h1 class="textsubpage">ข่าวบอลประจำวัน</h1>
                <p class="borderglow"></p>
                <p class="titlepage mb-3">
                    <a href="{{url('/')}}"><i class="fas fa-home iconcolor"></i></a>
                    <i class="fas fa-angle-right iconcolor"></i>
                    <a href="{{ url('/'.$active) }}"><span>ข่าวบอลประจำวัน</span></a>
                    <i class="fas fa-angle-right iconcolor"></i>
                    <span>{{$news['title']}}</span>
                </p>
                <div class="p-0 mb-4">
                    <img src="{{ asset('images/mm88online.gif') }}" alt="" width="100%">
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pb-5">
                            <h1 style="color:#1beb00;font-weight: bold">{{$news['title']}}</h1>
                            <i class="fas fa-edit text-warning"></i> <i class="small">โพส์ตเมื่อ {{ thai($news['created_at']) }}</i>
                            <div class="py-3">
                                <img src="{{ api_img($news['image']) }}" alt="{{$news['title']}}" width="100%" />
                            </div>
                            <p style="color:#eeff00">{!! $news['sub_title'] !!}</p>
                            {!! $news['content'] !!}
                        </div>
                    </div>
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

