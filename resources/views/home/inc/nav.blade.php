<!-- Navigation -->
<div class="page-header"></div>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand col-12 col-lg-4" href="{{url('/')}}"><img src="{{asset('images/logotdedclub.png')}}" alt="logo"></a>
    <div class="navbar-collapse navbarnone">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item @if($active == 'home') active @endif">
        <a class="nav-link hoverable" href="{{url('/')}}">หน้าแรก<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item @if($active == 'live') active @endif">
        <a class="nav-link hoverable" href="{{url('/')}}">ดูบอลสด</a>
        </li>
        <li class="nav-item @if($active == 'tdz') active @endif">
            <a class="nav-link hoverable" href="{{url('/tdedmaster')}}">ทีเด็ดเซียน</a>
        </li>
        <li class="nav-item @if($active == 'tds') active @endif">
            <a class="nav-link hoverable" href="{{url('/tds')}}">ทีเด็ดสเต็ป</a>
        </li>
        <li class="nav-item @if($active == 'analyzes') active @endif">
            <a class="nav-link hoverable" href="{{url('/analyzes')}}">วิเคราะห์บอล</a>
        </li>
        <li class="nav-item @if($active == 'balltable') active @endif">
            <a class="nav-link hoverable" href="{{url('/balltable')}}">โปรแกรมบอล</a>
        </li>
        <li class="nav-item @if($active == 'news') active @endif">
            <a class="nav-link hoverable" href="{{url('/news')}}">ข่าวบอล</a>
        </li>
    </ul>
    </div>
        <div class="col-3 d-block d-lg-none menumobile"><a href="{{url('/')}}"><p>หน้าแรก</p></a></div>
        <div class="col-3 d-block d-lg-none menumobile"><a href="{{url('/live')}}"><p>ดูบอลสด</p></a></div>
        <div class="col-3 d-block d-lg-none menumobile"><a href="{{url('/tdz')}}"><p>ทีเด็ดเซียน</p></a></div>
        <div class="col-3 d-block d-lg-none menumobile"><a href="{{url('/tds')}}"><p>ทีเด็ดสเต็ป</p></a></div>
        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="{{url('/analyze')}}"><p>วิเคราะห์บอล</p></a></div>
        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="{{url('/balltable')}}"><p>โปรแกรมบอล</p></a></div>
        <div class="col-4 col-sm-3 d-block d-lg-none menumobile"><a href="news"><p>ข่าวบอล</p></a></div>
        <div class="col-xs-4 d-none col-sm-3 d-sm-block d-lg-none menumobile"><a href="hl"><p>ไฮไลท์ฟุตบอล</p></a></div>
</nav>