@extends('layouts.app')

@section('content')

<html>
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
    </head>

<body>
    <img src="./images/waterdrops.png" alt="fixedImage" id="froatButton1">
    <img src="./images/waterdrops2.png" alt="fixedImage" id="froatButton2">

    <div class="rikuzou">
        <img src="./images/syuuzou.gif" alt="りくぞう">
            
    </div>       
                
    <div class="yokuyatta">
        <header>
        <span style="transform: rotate(-10deg); display: inline-block;"><i><h1><span style= "color:#0066FF;">よ</span>くやった！<br><span style= "color:#0066FF;">きみ</span>は勇者だ！</h1></i></span>
        </header>
    </div>
    
    <div class="content">
        <h2>指示書</h2>
    </div>    
    
    <div style="line-height: 30pt;">
        <h3 style="margin-top:2em;">楽しむためのアドバイス</h3>
    
        <p style="margin-top:2em;">
        そう！一人カラオケでも常套手段となっている<br>
        「誰かを待っているフリ」を発動だ！<br>
        電話をかけるフリをしたり、やたら携帯や時計を気にしたり、<br>
        「この会社のプリクラはここまで進化したのか我が社もこのような機能を搭載しなければ」<br>
        とか言って会社の人アピールして周りから「すげー」って思われるように努力だ。<br>
        ただしその「すげー」は、メーカーの人なんだ！ということに対してなのか<br>
        一人でプリクラに来ている度胸に対してなのかは分からない。
        </p>
    
        <h3 style="margin-top:3em;">どこに行けば良いのか分からない！？グズグズするな！</h3>
        <p style="margin-top:2em;">とりあえずセンター街へ行くんだ。<br>
                ギャルに紛れてテンション上げよう！！！</p>
    </div>
  <font color="black">
    <div id="map" style="width:400px; height:300px"></div>

        <script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?appid=dj00aiZpPUVUWnNBcEZlcWxPOSZzPWNvbnN1bWVyc2VjcmV0Jng9ZDE-"></script>
        <script type="text/javascript">
        window.onload = function(){
        var ymap = new Y.Map("map");
        ymap.drawMap(new Y.LatLng(35.64997652994234,139.72116702175174), 17, Y.LayerSetId.NORMAL);
        var label = new Y.Label(new Y.LatLng(35.64997652994234,139.72116702175174), "死ね<br>溝の口");
        ymap.addFeature(label)
        }
        </script>
    </div>
  </font>    
<body>

@endsection