@extends('layouts.app')

@section('title')
ตารางบอลวันนี้ ราคาบอล บอลวันนี้ บอลคืนนี้ โปรแกรมบอล โปรแกรมฟุตบอล โปรแกรมกีฬา
@endsection
@section('description')
ตารางบอลวันนี้ โปรแกรมบอล โปรแกรมถ่ายทอดสดฟุตบอล ราคาบอลวันนี้ บอลคืนนี้ทุกลีกทั่วโลก วิเคราะห์ วิจารณ์​  โปรแกรมบอลกัลโช่ อิตาลี เจลีก บุนเดสลีกาเยอรมัน ลาลีกาสเปน ลีกเอิงฝรั่งเศล ไทยพรีเมียร์ลีก ไทยดิวิชั่น1 ไทยดิวิชั่น2 ดูผลฟุตบอลย้อนหลัง ราคาบอลคืนนี้ ราคาบอล
@endsection
@section('keywords')
ตารางบอล, ราคาบอล, บอลวันนี้, ตารางบอลวันนี้, โปรแกรมบอล, โปรแกรมบอลวันนี้, โปรแกรมบอลพรุ่งนี้, กีฬาวันนี้
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
                <h1 class="textsubpage">โปรแกรมบอล วันนี้ {{ thai(now(),'notshowtime') }}</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="#"><i class="fas fa-home iconcolor"></i></a>
                        <a href="{{url('/')}}"><span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>ตารางบอล</span>
                    </p>
                <div class="row">
                    <div class="col">
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
                    </div>
                    <div class="col-12">
                        <div style="width: 12px;height: 12px;background:#FF0000;display:inline-block;"></div>
                        <p style="display:inline-block">สีแดงคือทีมต่อ</p>
                        <div style="width: 12px;height: 12px;background:#000000;display:inline-block;"></div>
                        <p style="display:inline-block">สีดำคือทีมรอง</p>
                        <div style="width: 12px;height: 12px;background:#2a8b00;display:inline-block;"></div>
                        <p style="display:inline-block">สีเขียวคือราคาบอล</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 pr-lg-0">
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

