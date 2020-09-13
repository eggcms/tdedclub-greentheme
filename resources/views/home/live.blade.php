@extends('layouts.app')

@section('content')
<header>
    <div class="page-header"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand col-12 col-lg-4" href="#"><img src="{{asset('images/logotdedclub.png')}}" alt="logo"></a>
                    <div class="navbar-collapse navbarnone">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link hoverable" href="#">หน้าแรก<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link hoverable" href="#">ดูบอลสด</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hoverable" href="#">ทีเด็ดเซียน</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hoverable" href="#">ทีเด็ดสเต็ป</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hoverable" href="#">วิเคราะห์บอล</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hoverable" href="#">โปรแกรมบอล</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link hoverable" href="#">ข่าวบอล</a>
                          </li>
                      </ul>
                    </div>
                        <div class="col-3 d-block d-lg-none menumobile"><a href="#"><p>หน้าแรก</p></a></div>
                        <div class="col-3 d-block d-lg-none menumobile"><a href="#"><p>ดูบอลสด</p></a></div>
                        <div class="col-3 d-block d-lg-none menumobile"><a href="#"><p>ทีเด็ดเซียน</p></a></div>
                        <div class="col-3 d-block d-lg-none menumobile"><a href="#"><p>ทีเด็ดสเต็ป</p></a></div>
                        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="#"><p>วิเคราะห์บอล</p></a></div>
                        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="#"><p>โปรแกรมบอล</p></a></div>
                        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="#"><p>ข่าวบอล</p></a></div>
                        <div class="col-xs-4 d-none col-sm-3 d-sm-block d-lg-none menumobile"><a href="#"><p>ไฮไลท์ฟุตบอล</p></a></div>
                  </nav>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container bg-con">
            <div class="row">
            <div class="col-12">
                <h1 class="textsubpage">ดูบอลออนไลน์ฟรี</h1>
                <p class="borderglow"></p>
                <p class="titlepage">
                    <a href="#"><i class="fas fa-home iconcolor"></i></a>
                    <a href="#"><span>หน้าแรก</span></a>
                    <i class="fas fa-angle-right iconcolor"></i>
                    <span>ดูบอลออนไลน์ฟรี</span>
                </p>
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

