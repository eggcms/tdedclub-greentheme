<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="Keywords" content="@yield('keywords')">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}?{{ time() }}" rel="stylesheet">

        <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />
        <link href="{{asset('css/vision_step.css')}}" rel="stylesheet"> 
        <script type="text/javascript" src="{{asset('ztvapi/libary/acvdy2a8io.js')}}"></script>
        <script type="text/javascript" src="{{asset('jwplayer/jwplayer.js')}}"></script>
        <script type="text/javascript" src="{{asset('ztvapi/libary/mpvyui3xe.js')}}"></script>
    </head>
    <body>
        <div id="app">
            @yield('nav')
            @yield('content')
            @yield('footer')
        </div>
        {{-- <script>
            createPlayer("truesport2", "livePlayer", "true", "100%", "{{url('images/logo-chnnal.png')}}", "top-right");
        </script>  --}}
        <script>
            createPlayer("truesport2", "mPlayer", "true", "100%", "{{url('images/logo-chnnal.png')}}", "top-right");
        </script> 
    </body>
</html>



