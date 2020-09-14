@extends('layouts.app')

@section('content')
<header>
    <div class="page-header"></div>
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
                <h1 class="textsubpage">ไฮไลท์ฟุตบอล</h1>
                <p class="borderglow"></p>
                <p class="titlepage">
                    <a href="{{ url('/') }}"><i class="fas fa-home iconcolor"></i> <span>หน้าแรก</span></a>
                    <i class="fas fa-angle-right iconcolor"></i>
                    <span>ไฮไลท์ฟุตบอล</span>
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


            <div class="col-12 col-md-4 pr-md-0">
                @include('home.inc.sidebar')
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container-fluid bg-g">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <img src="{{asset('images/logotdedclub.png')}}" alt="logo tdedclub" class="logotdedclubfooter">
                    <div class="col-12 socialfooter">
                        <p>เป็นเว็ปไซต์ที่ให้ข้อมูลข่าวสารทางด้านกีฬา อันดับ 1 เว็บไซต์รายงาน ข่าวฟุตบอล อัพเดททุกวันตลอด 24 ชั่วโมง ตารางบอล ดูบอลสด พร้อมกับ ทีเด็ดบอล เรายังมีบทสรุปวิเคราะห์บอล ให้ ทีเด็ดบอล เป็นคลิปวิดีโอที่ช่องยูทูป ทำให้ทุกท่านสะดวกสบาย และมีเวลามากยิ่งขึ้น เพราะเหล่าเซียนบอลของเราได้รวบรวมบทสรุปไว้ให้ท่านทั้งหมดแล้วที่นี่
                            <a href="#"><img src="{{asset('images/facebook.png')}}" alt="facebook"></a>
                            <a href="#"><img src="{{asset('images/line.png')}}" alt="line"></a>
                            <a href="#"><img src="{{asset('images/youtube.png')}}" alt="youtube"></a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4"style="text-align: center;">
                    <iframe class="facebookfooter" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftdedclub8%2F&tabs=timeline%2Cmessages&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="280" style="border:none;overflow:hidden;border: 2px solid #00ff01;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-b">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="textfooter">© 2020 TDEDCLUB All Rights Reserved. Copyright by tdedclub.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>


@endsection

