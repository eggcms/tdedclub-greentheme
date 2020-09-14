@extends('layouts.app')

@section('title')
ทีเด็ดเซียน ทีเด็ดฟุตบอล ฟันธงบอล โดยเซียนผู้คร่ำวอดในวงการฟุตบอล
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
        <div class="banner1">
            <div class="row">
                <div class="col">
                    <a href="https://www.mm88online.com" title="mm88online">
                        <img src="{{asset('images/mm88online.gif')}}" alt="mm88online">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <h1 class="textsubpage">ทีเด็ดเซียน</h1>
                <p class="borderglow"></p>
                <p class="titlepage">
                    <a href="{{url('/')}}"><i class="fas fa-home iconcolor"></i> <span>หน้าแรก</span></a>
                    <i class="fas fa-angle-right iconcolor"></i>
                    <span>ทีเด็ดเซียน</span>
                </p>
            </div>
            
            @foreach($news as $n)
            <div class="col-12 tdedbottomchage">
                <div class="tdedwin1">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <p class="bordetext">{{ thai($n['play_time'],'notshowtime') }}</p>
                        </div>
                        <div class="col-7 d-none d-lg-block">
                            <p class="bordetext">รายการแข่ง</p>
                        </div>
                        <div class="col-2 d-none d-lg-block">
                            <p class="border-right-0 bordetext">ผล</p>
                        </div>
                    </div>
                </div>


                <div class="tdedwin2">
                    <div class="row">
                        <div class="col-6 col-lg-3 order-2 order-lg-1">
                            <img src="{{asset('images/tded1.gif')}}" alt="" class="tded01">
                        </div>
                        <div class="col-12 col-lg-5 mobiletded order-1 order-lg-2">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs11'])}}" alt="{{$n['team11']}}" class="logoteam001">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded01">{{$n['team11']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @php $play_time2 = explode(' ',$n['play_time2']) @endphp
                                        
                                        <div class="col-4">
                                            <p class="vs">VS</p>
                                            <p class="timeinvs">{{ $play_time2[0] }}</p>
                                        </div>
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs12'])}}" alt="" class="logoteam002">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded02">{{$n['team12']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row textdown">
                                        <div class="col analysislink text-center">
                                        @if($n['link1'])
                                            <a href="{{url('/analyze/'.$n['link1'])}}" title="บทวิเคราะห์ {{$n['team11']}} vs {{$n['team12']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}">
                                                <p>บทวิเคราะห์ {{$n['team11']}} vs {{$n['team12']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p>
                                            </a>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                            <p class="p001">ฟันธง</p>
                            <p class="p002">{!! $n['vision1'] !!}</p>
                        </div>
                        @if($n['prevision1'] == 1)
                        <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                            <p class="font-weight-bold">W</p>
                        </div>
                        @elseif($n['prevision1'] == 2)
                        <div class="col-3 col-lg-2 lose order-4 order-lg-4">
                            <p class="font-weight-bold">L</p>
                        </div>
                        @else
                        <div class="col-3 col-lg-2 draw order-4 order-lg-4">
                            <p class="font-weight-bold">D</p> 
                        </div>
                        @endif
                    </div>
                </div>

                <div class="tdedwin2">
                    <div class="row">
                        <div class="col-6 col-lg-3 order-2 order-lg-1">
                            <img src="{{asset('images/tded2.gif')}}" alt="" class="tded01">
                        </div>
                        <div class="col-12 col-lg-5 mobiletded order-1 order-lg-2">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs21'])}}" alt="{{$n['team21']}}" class="logoteam001">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded01">{{$n['team21']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <p class="vs">VS</p>
                                            <p class="timeinvs">{{ $play_time2[1] ?? $play_time2[0] }}</p>
                                        </div>
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs22'])}}" alt="{{ $n['team22'] }}" class="logoteam002">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded02">{{$n['team22']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row textdown">
                                        <div class="col analysislink text-center">
                                        @if($n['link2'])
                                            <a href="{{ url('/analyze/'.$n['link2']) }}" title="บทวิเคราะห์ {{$n['team21']}} vs {{$n['team22']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}">
                                                <p>บทวิเคราะห์ {{$n['team21']}} vs {{$n['team22']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p>
                                            </a>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                            <p class="p001">ฟันธง</p>
                            <p class="p002">{!! $n['vision2'] !!}</p>
                        </div>
                        @if($n['prevision2'] == 1)
                        <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                            <p class="font-weight-bold">W</p>
                        </div>
                        @elseif($n['prevision2'] == 2)
                        <div class="col-3 col-lg-2 lose order-4 order-lg-4">
                            <p class="font-weight-bold">L</p>
                        </div>
                        @else
                        <div class="col-3 col-lg-2 draw order-4 order-lg-4">
                            <p class="font-weight-bold">D</p> 
                        </div>
                        @endif
                    </div>
                </div>

                <div class="tdedwin2">
                    <div class="row">
                        <div class="col-6 col-lg-3 order-2 order-lg-1">
                            <img src="{{asset('images/tded3.gif')}}" alt="" class="tded01">
                        </div>
                        <div class="col-12 col-lg-5 mobiletded order-1 order-lg-2">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs31'])}}" alt="{{ $n['team31'] }}" class="logoteam001">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded01">{{ $n['team31'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <p class="vs">VS</p>
                                            <p class="timeinvs">{{ $play_time2[2] ?? $play_time2[0] }}</p>
                                        </div>
                                        <div class="col-4 team001">
                                            <img src="{{ api_img($n['vs32'])}}" alt="{{ $n['team32'] }}" class="logoteam002">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="texttded02">{{ $n['team32'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row textdown">
                                        <div class="col analysislink text-center">
                                            @if($n['link3'])
                                                <a href="{{ url('/analyze/'.$n['link3']) }}" title="บทวิเคราะห์ {{$n['team31']}} vs {{$n['team32']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}">
                                                    <p class=" text-center">บทวิเคราะห์ {{$n['team31']}} vs {{$n['team32']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p>
                                                </a>
                                            @endif
                                        </div>       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                            <p class="p001">ฟันธง</p>
                            <p class="p002">{!! $n['vision3'] !!}</p>
                        </div>
                        @if($n['prevision3'] == 1)
                        <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                            <p class="font-weight-bold">W</p>
                        </div>
                        @elseif($n['prevision3'] == 2)
                        <div class="col-3 col-lg-2 lose order-4 order-lg-4">
                            <p class="font-weight-bold">L</p>
                        </div>
                        @else
                        <div class="col-3 col-lg-2 draw order-4 order-lg-4">
                            <p class="font-weight-bold">D</p> 
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        </div>     
    </div>
</main>

@include('home.inc.footer')


@endsection

