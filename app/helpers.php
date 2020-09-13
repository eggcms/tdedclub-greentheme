<?php
function helpers() {
    return 'helper test auto run! OK';
}

function api_img($img)
{
    return 'https://api-88online.com/imgs/'.$img;
}

function thai($date,$tme='') {
    $d = explode('-',str_replace(' ','-',$date));
    $mn = ['01','02','03','04','05','06','07','08','09','10','11','12'];
    $mth = [' ม.ค.', 'ก.พ.', 'มี.ค', 'เม.ย', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'];
    $d[1] = str_replace($mn,$mth,$d[1]);
    $d[0] = ceil($d[0] + 543);
    if ($tme == '') {
        $t = explode(':',$d[3]);
        return $d[2].' '.$d[1].' '.$d[0].' | ' .$t[0].':'.$t[1];
    }
    else {
        return $d[2].' '.$d[1].' '.$d[0];
    }
}


function uploadImage($image, $path) {
    if ($image) {
        $filanemaWithExt = $image->getClientOriginalName();
        $filename = pathinfo($filanemaWithExt, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        // $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $fileNameToStore = time().'.'.$extension;
        $cover_path = str_replace('/','\\',public_path($path).'/');
        $image->move(public_path().'/'.$path,$fileNameToStore);
    }
    else { $fileNameToStore = 'noimg.jpg'; }
    return $fileNameToStore;
}

function Slug($title, $separator = '-', $language = 'Th') {
    $flip = $separator === '-' ? '_' : '-';
    $title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);
    $title = str_replace(['@','&',"'"],[ $separator.'at'.$separator, $separator.'and'.$separator,''], $title);
    $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);
    $title = mb_strtolower($title, 'UTF-8');
    return trim($title);
}

function getSix($num) {
    $num = preg_replace('/[^0-9]/','',$num);
    $x='';
    for($i=0;$num!='';$i++) {
       $c=substr($num,0,6);
       $x = ($x!=''?$x.' '.$c:$c);
       $num=str_replace($c,'',$num);
    }
    return $x;
}

function getCut($num,$cut) {
    $num = preg_replace('/[^0-9]/','',$num);
    $x='';
    for($i=0;$num!='';$i++) {
       $c=substr($num,0,$cut);
       $x = ($x!=''?$x.' '.$c:$c);
       $num=str_replace($c,'',$num);
    }
    return $x;
}