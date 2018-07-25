@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/result7.css') }}">
</head>

<body>
    <div class="rikuzou">
        <img src="./images/gattu.png" alt="りくぞう">
    </div>       
          
    <!--最初のコメント -->
    <div class="declare1">
        やったな！！
    </div>
    
    <div class="declare2">
        新しい君の始まりだ！！！
    </div>
        
    <div class="barber">    
        <div id="wrap">
            <div class="man">
                <img src="./images/man.png" alt="man">
            </div>
            <div class="content">
                <p>指示書<p>
            </div>
            <div class="woman">
                <img src="./images/woman.png" alt="woman">
            </div>
                    
            <p>
                新しい自分に出会おうぜ！！<br>
                まずは髪型を変え新たな自分を発見しよう！<br>
                <br>
                ただ、「変えたい」と思ってもなかなか行動に移せず、<br>
                ”無難な”髪型で済ませてしまいがちじゃないか？<br>
                それは美容院との信頼関係が確立していないからだ！<br>
                信頼がないと、思い切ったことなんてなかなかできない。<br>
                そして“無難”になっていく…。<br>
                これって<span>MOTTAINAI!!!</span><br>
                
                <p id="recommendation">そんな君におすすめの美容院は...</p><br>
            </p>
            
            <div class='yubisasi'>
                  <img src="./images/yajirushi.png" alt="yubisasi">
            </div>
            
            
            <p>
                ココだ！
            </p>
            
            <h2>
                街を歩けば誰もが振り返る！<br>
                そんな自分になりたくないか！？  
            </h2>    
            
            
            <div class="scissors">
                <img src="./images/scissors.png" alt="scissors">
            </div>
            <h3>最強の特殊ヘアを実現！CLIPJOINTGOD！！</h3>
                <p>
                    できる髪型...<span id="thick">レインボー、スイカ</span>など<br>

                 

                 <div class="niji">   
                   <img src="./images/ahuroo.png" alt="りくぞう"><img src="./images/suika copy.png" alt="りくぞう">
                </div>
          

                    ＪＲ山手線巣鴨駅徒歩4分<br>
                    都営三田線巣鴨駅徒歩2分<br>
                </p>
            <div id="map" style="width:400px; height:300px; color:black"/></div>
        
                <script type="text/javascript" charset="utf-8" src="https://map.yahooapis.jp/js/V1/jsapi?appid=dj00aiZpPUVUWnNBcEZlcWxPOSZzPWNvbnN1bWVyc2VjcmV0Jng9ZDE-"></script>
                <script type="text/javascript">
                window.onload = function(){
                var ymap = new Y.Map("map");
                ymap.drawMap(new Y.LatLng(35.661300, 139.697927), 17, Y.LayerSetId.NORMAL);
                var label = new Y.Label(new Y.LatLng(35.661300, 139.697927), "CLIPJOINTGOD<br>03-6427-0826");
                ymap.addFeature(label);
        };
                </script>
            
            <br><br><br>
            
            
            <div class="comb">
                <img src="./images/comb.png" alt="comb">
            </div>
            <h3>ポップでキュートな美容室！VIVA☆CUTE CANDY！！</h3>
                <p>
                    できる髪型...<span id="thick">レオパード柄、あほ毛ハート</span>など<br>


                 <div class="hyou">
                     <img src="./images/hyou.png" alt="りくぞう"><img src="./images/ha-to.png" alt="りくぞう">
                </div>   
                   

                    下北沢駅徒歩３０秒<br>
                </p>
            
            
            <div class='candymap'>
                  <img src="./images/cute candy.png" alt="candy">
            </div>
               
            <br><br><br><br><br><br>
            <h2>
                自分が変わるのにいくらかとかは大した問題ではない。<br>
                もはやメニューに価値はない!
            </h2>    
            
            
            <div class="drier">
                <img src="./images/drier.png" alt="drier">
            </div>
            <h3>90日間メンテナンスいらず！EQ by HolisticHaircut！！</h3>
                <p>
                    カット：<span id="thick">70,000円</span><br>
                    銀座1丁目駅徒歩１分<br>
                </p>
                
            <div class='EQymap'>
                  <img src="./images/EQ.png" alt="EQ">
            </div>
            
            
            
            <div class="chair">
                <img src="./images/chair.png" alt="chair">
            </div>
            
            <br><br><br>
            
            <h3>ヘアケア専門特化集団！LILY！！</h3>
                <p>
                    １日３名限定メニュー：<span id="thick">162,000円</span><br>
                    表参道から徒歩5分<br>
                </p>
                
            <div class='lilymap'>
                  <img src="./images/lily.png" alt="lily">
            </div>
                
                
        </div>   
        <br>
            <br>            
            <br>
            <br>
            <br>
          <div class="ittekoibtn">
              最後までほんとに読んだか？<br>
          <a href="ittekoi2" class="btn btn-lg animated-button thar-three">YES</a>
          <!--{!! link_to_route('ittekoi2.get', '》YES', null, ['class' => 'btn btn-lg btn-d']) !!}-->
          </div>
        
    </div>
</body>
@endsection