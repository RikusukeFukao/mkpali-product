@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result2.css') }}">
    </head>

    <body>
        <img src="./images/waterdrops.png" alt="fixedImage" id="froatButton1">
        <img src="./images/waterdrops2.png" alt="fixedImage" id="froatButton2">
        
        <div class="rikuzou">
            <img src="./images/syuuzou.gif" alt="りくぞう">
        </div>       
              
        <!--最初のコメント -->
        <div class="yokuyatta">
            人生そのものが１つの賭け事だ！<br>
            今しかできないことをしよう！
        </div>
        
        <!--指示書-->
        <div class="content">
            <p>指示書<p>
        </div>    
        
        <!--パチンコスロットの流れ-->
        <div id="wrap">
            <h3>パチンコ・スロットの流れ</h3>
                <p>①お金を入れる<br>
                ②プレイする<br>
                大当たりが出るまで①、②の繰り返し。
                </p>
        </div>
       
        
        <!--ビギナーへのすすめ-->
        <div id="beginner">
            <h3>ビギナーへの勧め</h3>
            <p>
                イヤホンをつけて入店することで、耳へのダメージをこと和らげることができるぞ。<br>
                若者の多い店の方が、客の民度は高い。田舎の僻地より、繁華街を攻めよう。<br>
                何かあればすぐに店員さんを呼ぼう。光の速さで来てくれるぞ。<br>
                自分の知っているアニメや漫画の台に座ると、より楽しめること間違いなし。<br>
                嫌な偏見を持つのはやめよう。パチンコ屋は「夢の国」だ！！！
            </p>
        </div>
        
        <div class="advantage">
            <h3>パチンコ屋の良いところ</h3>
            <p class=soukai>
                圧倒的爽快感
            </p>
            <p class="soukaicontents">
                技術の進歩に伴い、パチンコも日々進化しているんだ。<br>
                ド派手な演出と効果音、さらには金銭を投資しているリスクもあいまって、<br>
                大当たりした時にはあたかもクスリをキメたかのような爽快感を得ることができるぞ！
            </p>
            
            <p class= "positive">
                圧倒的ポジティブ思考
            </p>
            <p class="positivecontents">
                パチンコ屋には、覇気のない顔をした哀れな成人がはびこっている。<br>
                どんなに社会で辛いことがあっても、店で「ああ、こいつらよりはマシ」と考えることで<br>
                自信を取り戻すことができるぞ！
            </p>
        </div>
        
            <div id="recommendation">
                <h3>☆おすすめパチンコ☆</h3>
                <p class="shop">エスパス日拓溝の口店</p>
            </div>
            
            
        <div id="map" style="width:400px; height:300px"></div>

            <script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?..."></script>
            <script type="text/javascript">
            window.onload = function(){
            var ymap = new Y.Map("map");
            ymap.drawMap(new Y.LatLng(35.600638, 139.611358), 17, Y.LayerSetId.NORMAL);
};
            </script>
        </div>
    <body>
    
</html>
@endsection