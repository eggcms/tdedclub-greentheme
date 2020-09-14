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
            <div class="col-md-8 pr-lg-0">
                <h1 class="textsubpage">ทีเด็ดสเต็ป</h1>
                    <p class="borderglow"></p>
                    <p class="titlepage">
                        <a href="#"><i class="fas fa-home iconcolor"></i></a>
                        <a href="#"><span>หน้าแรก</span></a>
                        <i class="fas fa-angle-right iconcolor"></i>
                        <span>ทีเด็ดสเต็ป</span>
                    </p>

                <div class="row">
                    <div class="col-12 tdedsteptime">
                        <p class="bordertdedstep"></p>
                        <span>ทีเด็ดบอลสเต็ปประจำวันที่ {{thai(now(),'notShowTime')}}</span>
                    </div>

                    {{-- ######################################################################################## --}}
                    <div class="col-12 col-lg-6 pr-lg-2">
                        <div class="col tdedstep">
                            <p class="step">สเต็ปชุดที่ 1</p>
                            <a href=""><img class="img-fluid" src="{{asset('images/step-1.gif')}}" alt=""></a>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team11'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price11'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team12'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price12'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team13'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price13'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-2">
                        <div class="col tdedstep1">
                            <p class="step">สเต็ปชุดที่ 2</p>
                            <a href=""><img class="img-fluid" src="{{asset('images/step-2.gif')}}" alt=""></a>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team21'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price21'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team22'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price22'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team23'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price23'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pr-lg-2">
                        <div class="col tdedstep">
                            <p class="step">สเต็ปชุดที่ 3</p>
                            <a href=""><img class="img-fluid" src="{{asset('images/step-3.gif')}}" alt=""></a>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team31'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price31'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team32'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price32'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team33'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price33'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-2">
                        <div class="col tdedstep1">
                            <p class="step">สเต็ปชุดที่ 4</p>
                            <a href=""><img class="img-fluid" src="{{asset('images/step-4.gif')}}" alt=""></a>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team41'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price41'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team42'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price42'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>

                            <div class="texttdedstepwow">
                                <p class="step01">{{ $bstep['team43'] ?? 'ไม่มีข้อมูล...' }}</p>
                                <p class="borderglow2"></p>
                                <p class="step02">{{ $bstep['price43'] ?? 'ไม่มีข้อมูล...' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 pr-lg-0">
                <div id="sidear-scroll">
                    <div class="col-12">
                        <a href="#"><img src="{{asset('images/pro1.jpg')}}" alt="banner" class="bannerloginnews"></a>
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
                        <a href="#"><img src="{{asset('images/pro2.jpg')}}" alt="banner" class="bannerloginnews"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@include('home.inc.footer')


@endsection

