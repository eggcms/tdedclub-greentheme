<form name="line-notify" action="line-notify" method="post" autocomplete="off">
    @csrf
    <div class="inline-form">
        <a href="#">
            <img src="{{asset('images/logo88online.png')}}" alt="88online">
        </a>
        <div class="input_fullname" style="width:100%;"><i class="fas fa-user-edit"></i>
            <input name="fullname" id="fullname" class="registerballtor" placeholder="ชื่อ - นามสกุล" required type="text">
        </div>
        <div class="input_mobile" style="width:100%;"><i class="fas fa-mobile"></i>
            <input name="phone" id="phone" class="registerballtor" placeholder="เบอร์โทรศัพท์" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required type="text">
        </div>
        <div class="input_lineid" style="width:100%;"><i class="fab fa-line"></i>
            <input name="lineid" id="lineid" class="registerballtor" placeholder="Line ID" required type="text">
        </div>
        <div class="submit">
            <button class="btn btn-register" name="submit" type="submit">ส่งข้อมูลการสมัคร</button>
        </div>
        <div class="linepoto">
            <a href="https://line.me/R/ti/p/%40792ftxvk" target="_blank">
                <img src="{{asset('images/88online.png')}}" alt="">
            </a>
        </div>
    </div>
</form>