@extends('layouts.app')

@section('title')
tdedclub: ทีเด็ดคลับดอทคอม ศูนย์รวมทีเด็ดบอลสเต็ป ตารางราคาบอลเดี่ยว บอลสเต็ป ข่าวสารวงการกีฬา ฟุตบอล ผลบอล ฟุตบอลวันนี้ ผลฟุตบอลทั่วโลก พร้อมทั้งวิเคราะห์บอล โดยบรรดากูรู ระดับเซียนในวงการลูกหนัง
@endsection
@section('description')
ทีเด็ดคลับ เว็บไซต์กีฬาระดับต้นๆของเมืองไทย ทีเด็ดบอลสเต็ป ตารางราคาบอลเดี่ยว ตารางราคาบอลสเต็ป ข่าวสารวงการกีฬา ฟุตบอล ผลบอล ฟุตบอลวันนี้ ผลฟุตบอลทั่วโลก พรีเมียร์ลีก บุนเดสลีก้า ไทยลีก เจลีก ฟุตบอลโลก ยูโร 2020 ยูฟ่าแชมเปี้ยนส์ลีก
พร้อมทั้งวิเคราะห์บอล ฟันธง โดยบรรดากูรู ระดับเซียนในวงการลูกหนัง
@endsection
@section('keywords')
ราคาบอล, ราคาบอลเดี่ยว, ราคาบอลสเต็ป, ข่าวกีฬา, ฟุตบอล, ข่าวบอล, ผลบอล, ผลบอลสด, ผลการแข่งขัน, ผลฟุตบอล, วิเคราะห์บอล, ผลบอลพรีเมียร์ลีก, ผลบอลไทยลีก, หนังสือพิมพ์กีฬา, ผลบอลล่าสุด, พรีเมียร์ลีก, กัลโช่, บุนเดสลีกา, ลา ลีกา, ยูฟ่า แชมเปี้ยนส์ ลีก, ยูโรปา ลีก, เทนนิส, กอล์ฟ, มวย, ไฮไลท์ฟุตบอล, ไทยลีก, ดิวิชั่น1, ลีกภูมิภาค, ไทยคม เอฟเอคัพ, โตโยต้าลีกคัพ
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
                    <a href="https://www.mm88online.com" title="mm88online" target="_blank"><img src="{{asset('images/mm88online.gif')}}" alt="mm88online"></a>
                </div>
            </div>
        </div>

        <div class="live">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <div class="titleBar clearfix">
                                <h1>ดูบอลออนไลน์ฟรี</h1>
                                <a href="#">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ball">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div>
                                <div id="mPlayer" class="bg-light"></div>
                            </div>

                            {{-- <div><img src="{{asset('images/livetest.jpg')}}" alt=""></div> --}}
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="col-form" id="formballtor">
                                <div class="col box1">
                                    @include('home.inc.register')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="youtubeplay">
            <div class="container p-2 bg-con">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            @php
                            $i = 0;
                            foreach ($yous as $you) {
                                $i++;
                                preg_match('/src="([^"]+)"/', $you['content'], $match);
                                if ($i == 1) $you1 = $match[1];
                                else $you2 = $match[1];
                            }
                            @endphp
                            <div class="col-12 col-lg-4 youtube001">
                                <div class="embed-responsive embed-responsive-16by9 youtube01">
                                    <iframe class="embed-responsive-item" src="{{ $you1 }}" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 youtube001">
                                <div class="embed-responsive embed-responsive-16by9 youtube02">
                                    <iframe class="embed-responsive-item" src="{{ $you2 }}" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 banner2">
                                <a href="https://line.me/R/ti/p/%40792ftxvk" title="line mm88online" target="_blank"><img src="{{asset('images/bender3.jpg')}}" alt="banner2"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <div class="titleBar clearfix">
                                <h1>ข่าวบอลประจำวัน</h1>
                                <a href="{{url('/news')}}" title="ข่าวบอลประจำวัน">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newslayout">
            <div class="row">
                <div class="col">
                    <div class="row">

                        @if(isset($hot_news))
                            <div class="col-12 col-lg-6">
                                <div class="new1">
                                    <a href="{{url('/news/'.$hot_news['id'])}}" title="{{ $hot_news['title'] }}">
                                        <img src="{{api_img($hot_news['image'])}}" alt="{{ $hot_news['title'] }}">
                                        <p>{{ $hot_news['title'] }}</p>
                                    </a>
                                </div>
                            </div>
                        @endif

                        <div class="col-12 col-lg-6 mobilenews">
                            <div class="row">
                                @foreach($news as $n)
                                    <div class="col-6 pl-lg-0 new2">
                                        <a href="{{url('/news/'.$n['id'])}}" title="{{ $n['title'] }}">
                                            <img src="{{ api_img($n['image']) }}" alt="{{ $n['title'] }}">
                                            <p>{{ $n['title'] }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 bender01">
                    <a href="https://www.mm88online.com" title="mm88online">
                        <img src="{{asset('images/bender01.gif')}}" alt="m88online">
                    </a>
                </div>
            </div>
        </div>

        <div class="tded">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <div class="titleBar clearfix">
                                <h1>ทีเด็ดเซียน</h1>
                                <a href="{{url('/tdedmaster')}}" title="ทีเด็ดเซียน">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 texttoop small">
            <p>วิธีการดู</p>
            <p style="color: #37ff00;">W</p>
            <p>คือฟันธงชนะ</p>
            <p style="color: #ff0000">L</p>
            <p>คือฟันธงแพ้</p>
            <p style="color: #ffeb00">D</p>
            <p>คือเสมอ</p>
        </div>

        <div class="tdedwin1">
            <div class="row">
                <div class="col-12 col-lg-3">
                <p class="bordetext">{{ thai($zft['play_time'],'notshowtime') }}</p>
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
                                    <img src="{{ api_img($zft['vs11'])}}" alt="" class="logoteam001">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded01">{{$zft['team11']}}</p>
                                        </div>
                                    </div>
                                </div>
                                @php $play_time2 = explode(' ',$zft['play_time2']) @endphp
                                <div class="col-4">
                                    <p class="vs">VS</p>
                                    <p class="timeinvs">{{ $play_time2[0] }}</p>
                                </div>
                                <div class="col-4 team001">
                                    <img src="{{ api_img($zft['vs12'])}}" alt="" class="logoteam002">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded02">{{$zft['team12']}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row textdown">
                                <div class="col analysislink text-center">
                                    @if($zft['link1'])
                                        <a href="{{url('/analyze/'.$zft['link1'])}}" title="บทวิเคราะห์ {{$zft['team11']}} vs {{$zft['team12']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}">
                                            <p>บทวิเคราะห์ {{$zft['team11']}} vs {{$zft['team12']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}</p>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                    <p class="p001">ฟันธง</p>
                    <p class="p002">{!! $zft['vision1'] !!}</p>
                </div>
                
                @if($zft['prevision1'] == 1)
                <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                    <p class="font-weight-bold">W</p>
                </div>
                @elseif($zft['prevision1'] == 2)
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
                                    <img src="{{ api_img($zft['vs21'])}}" alt="" class="logoteam001">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded01">{{ $zft['team21'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p class="vs">VS</p>
                                    <p class="timeinvs">{{ $play_time2[1] ?? $play_time2[0] }}</p>
                                </div>
                                <div class="col-4 team001">
                                    <img src="{{ api_img($zft['vs22'])}}" alt="" class="logoteam002">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded02">{{ $zft['team22'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row textdown">
                                <div class="col analysislink text-center">
                                    @if($zft['link2'])
                                    <a href="{{url('/analyze/'.$zft['link2'])}}" title="บทวิเคราะห์ {{$zft['team21']}} vs {{$zft['team22']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}">
                                        <p>บทวิเคราะห์ {{$zft['team21']}} vs {{$zft['team22']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}</p>
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                    <p class="p001">ฟันธง</p>
                    <p class="p002">{!! $zft['vision2'] !!}</p>
                </div>
                @if($zft['prevision2'] == 1)
                <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                    <p class="font-weight-bold">W</p>
                </div>
                @elseif($zft['prevision2'] == 2)
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
                    <img src="{{asset('images/tded3.gif')}}" class="tded01">
                </div>
                <div class="col-12 col-lg-5 mobiletded order-1 order-lg-2">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-4 team001">
                                    <img src="{{ api_img($zft['vs31']) }}" class="logoteam001">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded01">{{ $zft['team31'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <p class="vs">VS</p>
                                    <p class="timeinvs">{{ $play_time2[2] ?? $play_time2[0] }}</p>
                                </div>
                                <div class="col-4 team001">
                                    <img src="{{ api_img($zft['vs32'])}}" alt="" class="logoteam002">
                                    <div class="row">
                                        <div class="col">
                                            <p class="texttded02">{{ $zft['team32'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row textdown">
                                <div class="col analysislink text-center">
                                    @if($zft['link3'])
                                    <a href="{{url('/analyze/'.$zft['link3'])}}" title="บทวิเคราะห์ {{$zft['team31']}} vs {{$zft['team32']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}">
                                        <p>บทวิเคราะห์ {{$zft['team31']}} vs {{$zft['team32']}} วันที่ {{ thai($zft['play_time'],'notshowtime') }}</p>
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-2 vision order-3 order-lg-3">
                    <p class="p001">ฟันธง</p>
                    <p class="p002">{!! $zft['vision3'] !!}</p>
                </div>
                @if($zft['prevision3'] == 1)
                <div class="col-3 col-lg-2 winpo order-4 order-lg-4">
                    <p class="font-weight-bold">W</p>
                </div>
                @elseif($zft['prevision3'] == 2)
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

        <div class="tded">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="titleBar clearfix">
                                <h1>วิเคราะห์บอล</h1>
                                <a href="{{ url('/analyzes') }}" title="วิเคราะห์บอล">ดูทั้งหมด</a>
                            </div>
                            <div class="row tdedanalysis">
                                @if ($analyzes)
                                    @foreach($analyzes as $an)
                                        <div class="col-12 col-lg-6">
                                            <a href="{{ url('/analyze/'.$an['id']) }}" title="{{$an['title']}}">
                                                <img src="{{api_img($an['image'])}}" alt="{{$an['title']}}">
                                                <p>{{$an['title']}}</p>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col pl-lg-0">
                            <div class="col-12 col-lg-12 bghighlights">
                                <div class="titleBarhighlights clearfix">
                                    <h1>ไฮไลท์ฟุตบอล</h1>
                                </div>
                                <div class="row highlights">
                                    @foreach($hls as $hl)
                                    <div class="col-12">
                                        <a href="{{ url('/highlight/'.$hl['id']) }}" title="ไฮไลท์ฟุตบอล: {{ $hl['title'] }}">
                                            <img src="{{ api_img($hl['image']) }}" alt="{{ $hl['title'] }}">
                                        </a>
                                    </div>                                
                                    @endforeach
                                    <div class="col-12">
                                        <div class="titleBar2 clearfix">
                                            <a href="{{url('/highlights/')}}" title="ไฮไลท์ฟุตบอล">ดูทั้งหมด</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col p-0">
                <div class="titleBar clearfix">
                    <h1>ราคาบอล วันนี้ {{ thai(now(),'notshowtime') }}</h1>
                </div>
                <div class="px-0 pb-3 pb-4 table-responsive">
                    <table class="balltable table-striped rouned" width="100%" style="background-color:#cfcfcf">
                        <thead>
                            <tr>
                                <th scope="col-1" class="p-3" >เวลา</th>
                                <th scope="col-3" class="p-3" >เจ้าบ้าน</th>
                                <th scope="col-1" class="p-3" >ราคาบอล</th>
                                <th scope="col-3" class="p-3" >ทีมเยือน</th>
                                <th scope="col-4" class="p-3" >ทรรศนะบอล</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $league = '';   
                            @endphp
                            @foreach($bts as $bt)
                                @php
                                if ($league != $bt['league']) {
                                    $league = $bt['league'];
                                    echo '<tr style="background-color:#001d00"><th colspan="5" scope="row" class="p-3">'.$bt['league'].'</th></tr>';
                                }
                            @endphp
                            <tr>
                                <th style="color:#8d7300" scope="row" class="p-3">{{$bt['play_time']}}</th>
                                @php
                                $hs1='';
                                $hs2='';
                                if ($bt['home_status'] == 1) $hs1 = 'text-danger';
                                elseif ($bt['home_status'] == 2) $hs2 = 'text-danger';
                                @endphp
                                <td style="color:#0f0f0f;font-weight: bold"  class="p-3"><span class="@if($hs1) {{ $hs1 }} @endif">{{$bt['home_team']}}</span></td>
                                <td style="color:#2a8b00" class="p-3">{{$bt['price']}}</td>
                                <td style="color:#0f0f0f;font-weight: bold" class="p-3"><span class="@if($hs2) {{ $hs2 }} @endif">{{$bt['home_team']}}</span></td>
                                <td style="color:#995c01" class="p-3">{{$bt['vision']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 small">
                    <div style="width: 12px;height: 12px;background:#FF0000;display:inline-block;"></div>
                    <p style="display:inline-block">สีแดงคือทีมต่อ </p>
                    <div style="width: 12px;height: 12px;background:#000000;display:inline-block;"></div>
                    <p style="display:inline-block">สีดำคือทีมรอง </p>
                    <div style="width: 12px;height: 12px;background:#2a8b00;display:inline-block;"></div>
                    <p style="display:inline-block">สีเขียวคือราคาบอล </p>
                </div>
            </div>
        </div>
    </div>
</main>

@include('home.inc.footer')
    {{-- <script type='text/javascript'>document.ondragstart = function () { return false; }; </script> --}}
@endsection

