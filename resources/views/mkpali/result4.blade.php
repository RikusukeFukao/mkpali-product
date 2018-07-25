@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result4.css') }}">
    </head>

    <body>
        <!--<img src="./images/waterdrops.png" alt="fixedImage" id="froatButton1">-->
        <!--<img src="./images/waterdrops2.png" alt="fixedImage" id="froatButton2">-->
        
        <div class="rikuzou">
            <img src="./images/syuuzou.gif" alt="りくぞう">
        </div>       
              
        <!--最初のコメント -->
        <div class="yokuyatta">
            よくやった！！<br>
            さあ、人生の旅に出発だ！！！
        </div>
        
        
    <div id="wrap">
        <!--指示書-->
        <div class="content">
            <p>指示書<p>
        </div>   
    
    <!--やり方はシンプル        -->
    <div class="yarikata">
        やり方はいたってシンプル。<br>
        日本地図を的にダーツを投げ、当たった地域に旅に行く。<br>
        これだけ。
    </div>
    
    <div class="nami"> <img src="../images/map-nami.jpg" alt="nami"  /></div>
    
    <div class="introduction">
        <p>
            「やってみたい」と思う気持ちと不安は同時に発生する。<br>
            好きな人への告白、初めてのデート、アルバイト、海外旅行、プレゼン、起業...<br>
            これらを不安に感じてしまうのは、思い描いている理想的な世界とは裏腹に<br>
            「もしかしたら失敗してしまうかも」<br>
            とネガティブに考えてしまっているからだ。<br>
            不安なのはやる前だけで、一度経験すれば大抵は「こんなもんだったのか」<br>
            と思うようになるはずだ！<br>
            さあ、ダーツを投げ気ままに旅へ出かけようぜ！！
        </p>
    </div>

    <div class="nami"> <img src="../images/map-nami.jpg" alt="nami"  /></div>
    
   
        <div class="merit">
            ダーツの旅のメリット
        </div> 
    
     <section>
        <div class="merit1">
            <p>1. 独立心・チャレンジ精神が養われる</p>        
        </div>
        
        <div class="merit1content">
            <p>
                ダーツの旅では未知の場所に足を運ぶ危険を冒すことになる。<br>
                「どこに泊まるのか？」「移動手段は？」<br>
                すべてを自分の頭で考え判断し、行動に移さなければいけない。<br>
                それと同時に「荷物が盗まれるかも」「悪い人に絡まれるかも」といった<br>
                リスクにも対応することが求められるぞ。<br>
                道に迷う、宿が見つからない、電車を乗り間違える<br>
                といったことも自然と発生してしまうかもしれない。<br>
                その時対処が求められ、想定外の連続の中で問題解決力を高めることができるぞ！
            </p>            
        </div>
    </section>
    
    <section>
        <div class="merit2">
            <p>2. 新しい出会いがある</p  >        
        </div>
        
        <div class="merit2content">
            <p>
                見知らぬ土地では自分を知っている人はおらず、<br>
                好きなように話しかけ長々と話し情報を聞きだすことも可能だ。<br>
                さらに、楽しい旅にするためにも「コミュニケーションをとろう」と思うようになり、<br>
                新しい出会いが期待できるぞ！新しい出会いに乾杯！！！
            </p>            
        </div>
    </section>
    
    <div class="ittekoibtn">
              最後までほんとに読んだか？<br>
    <a href="ittekoi4" class="btn btn-lg animated-button thar-three">YES</a>
          <!--{!! link_to_route('ittekoi2.get', '》YES', null, ['class' => 'btn btn-lg btn-d']) !!}-->
    </div>
        
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection