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
            <div class="col-md-8">
                <h1 class="textsubpage">ทีเด็ดเซียน</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="#"><i class="fas fa-home iconcolor"></i></a>
                        <a href="#"><span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>ทีเด็ดเซียน</span>
                    </p>
                    <div class="row">
                        <div class="col-12 texttoop">
                            <p>วิธีการดู</p>
                            <p style="color: #37ff00;">W</p>
                            <p>คือฟันธงชนะ</p>
                            <p style="color: #ff0000">L</p>
                            <p>คือฟันธงแพ้</p>
                            <p style="color: #ffeb00">D</p>
                            <p>คือเสมอ</p>
                        </div>

                        @foreach($news as $n)
                        {{-- ######################################################################### --}}
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
                        {{-- #########################################################################             --}}
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
                                                    <img src="{{ api_img($n['vs11'])}}" alt="" class="logoteam001">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="texttded01">{{$n['team11']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class="vs">VS</p>
                                                    <p class="timeinvs">{{ $n['play_time2'] }}</p>
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
                                                        <a href="{{url('/analyze/'.$n['link1'])}}"><p>บทวิเคราะห์ {{$n['team11']}} vs {{$n['team12']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p></a>
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
                                                    <img src="{{ api_img($n['vs21'])}}" alt="" class="logoteam001">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="texttded01">{{ $n['team21'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class="vs">VS</p>
                                                    <p class="timeinvs">{{ $n['play_time2'] }}</p>
                                                </div>
                                                <div class="col-4 team001">
                                                    <img src="{{ api_img($n['vs22'])}}" alt="{{ $n['team22'] }}" class="logoteam002">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="texttded02">{{ $n['team22'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row textdown">
                                                <div class="col analysislink">
                                                @if($n['link2'])
                                                    <a href="{{url('/analyze/'.$n['link2'])}}"><p>บทวิเคราะห์ {{$n['team21']}} vs {{$n['team22']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p></a>
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
                                                    <img src="{{ api_img($n['vs31'])}}" alt="" class="logoteam001">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="texttded01">{{ $n['team31'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class="vs">VS</p>
                                                    <p class="timeinvs">{{ $n['play_time2'] }}</p>
                                                </div>
                                                <div class="col-4 team001">
                                                    <img src="{{ api_img($n['vs32'])}}" alt="" class="logoteam002">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="texttded02">{{ $n['team32'] }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row textdown">
                                                <div class="col analysislink">
                                                    @if($n['link3'])
                                                    <a href="{{url('/analyze/'.$n['link3'])}}"><p>บทวิเคราะห์ {{$n['team31']}} vs {{$n['team32']}} วันที่ {{ thai($n['play_time'],'notshowtime') }}</p></a>
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
                        @endforeach

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div id="sidear-scroll">
                        <div class="col-12">
                            <a href="#"><img src="{{asset('images/pro.jpg')}}" alt="banner" class="bannerloginnews"></a>
                        </div>

                        <div class="balllogin">
                            <div class="col-form" id="formballtor">
                                <div class="col box1">
                                    <form name="line-notify" action="#" method="post">
                                        <div class="inline-form">
                                            <a href="#">
                                                <img src="{{asset('images/logo88online.png')}}" alt="88online">
                                            </a>
                                            <div class="input_fullname" style="width:100%;"><i class="fas fa-user-edit"></i>
                                                <input name="fullname" id="fullname" class="registerballtor" placeholder="ชื่อ - นามสกุล" required="" type="text">
                                            </div>
                                            <div class="input_mobile" style="width:100%;"><i class="fas fa-mobile"></i>
                                                <input name="phone" id="phone" class="registerballtor" placeholder="เบอร์โทรศัพท์" maxlength="10" required="" type="text">
                                            </div>
                                            <div class="input_lineid" style="width:100%;"><i class="fab fa-line"></i>
                                                <input name="lineid" id="lineid" class="registerballtor" placeholder="Line ID" required="" type="text">
                                            </div>
                                            <div class="submit">
                                                <button class="btn btn-register" name="submit" type="submit">ส่งข้อมูลการสมัคร</button>
                                            </div>
                                            <div class="linepoto">
                                                <a href="#">
                                                    <img src="{{asset('images/88online.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="col-12">
                        <a href="#"><img src="{{asset('images/pro1.jpg')}}" alt="banner" class="bannerloginnews"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include('home.inc.footer')


@endsection

