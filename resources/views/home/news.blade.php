@extends('layouts.app')

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
                <h1 class="textsubpage">ข่าวบอลประจำวัน</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="#"><i class="fas fa-home iconcolor"></i></a>
                        <a href="#"><span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>ข่าวบอลประจำวัน</span>
                    </p>

                <div class="row">
                    @foreach($news as $n)
                        <div class="col-12 col-lg-6 allnews">
                        <a href="{{url('/news/'.$n['id'])}}"><img src="{{api_img($n['image'])}}" alt="{{ $n['title'] }}">
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

