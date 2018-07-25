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
            </p>
            
            <h2>
                街を歩けば誰もが振り返る！<br>
                そんな自分になりたくないか！？  
            </h2>
            
            <p id="recommendation">そんな君におすすめの美容院は...</p><br>
            
            <div class='yajirushi'>
                  <img src="./images/yajirushi.png" alt="yajirushi">
            </div>
            
            <div class="scissors">
                <img src="./images/scissors.png" alt="scissors">
            </div>
                    
            <div class="block">
                <h3>最強の特殊ヘアを実現！CLIPJOINTGOD！！</h3>    
                <p>できる髪型...<span id="thick">レインボー、スイカ</span>など<br></p>
                
                <div class="pic1">   
                    <img src="./images/ahuroo.png" alt="りくぞう">
                    <img src="./images/suika copy.png" alt="りくぞう">
                </div>
                    
                   
                <div class="map1"><img src="./images/salonmap.png" alt="map"></div>
                <p class="explanation">・ＪＲ山手線巣鴨駅徒歩4分<br>・都営三田線巣鴨駅徒歩2分</p>
            </div>
            
            
            
            <div class="comb">
                <img src="./images/comb.png" alt="comb">
            </div>
            
            <div class="block">
                <h3>ポップでキュートな美容室！VIVA☆CUTE CANDY！！</h3>
                <p>できる髪型...<span id="thick">レオパード柄、あほ毛ハート</span>など<br></p>
    
                <div class="pic2">
                     <img src="./images/hyou.png" alt="りくぞう">
                     <img src="./images/ha-to.png" alt="りくぞう">
                </div>   
                       
                <div class='map2'><img src="./images/cute candy.png" alt="candy"></div>
                <p class="explanation">・下北沢駅徒歩３０秒</p>
            </div>
            
            
            <h2 id="money">
                ここまできたなら、<br>
                自分が変わるのにいくらかとかは大した問題ではない。<br>
                もはやメニューに価値はない!
            </h2>    
            
            
            <div class="drier">
                <img src="./images/drier.png" alt="drier">
            </div>
            
            <div class="block">
                <h3>90日間メンテナンスいらず！EQ by HolisticHaircut！！</h3>
                    <p id="price1">
                        カット:<span id="thick">70,000円</span><br>
                        銀座1丁目駅徒歩１分<br>
                    </p>
            </div>        
                <div class='map3'>
                      <img src="./images/EQ.png" alt="EQ">
                </div>
            
            
            
            <div class="chair">
                <img src="./images/chair.png" alt="chair">
            </div>
            
            <div class="block">
                <h3>ヘアケア専門特化集団！LILY！！</h3>
                    <p id="price2">
                        １日３名限定メニュー:<span id="thick">162,000円</span><br>
                        表参道から徒歩5分<br>
                    </p>
            </div>        
                <div class='map4'>
                      <img src="./images/lily.png" alt="lily">
                </div>
            
        <h2 id="letsgo">さあ、行ってこい！！</h2>    
            
        <div class="ittekoibtn">
            最後までほんとに読んだか？<br>
            <a href="ittekoi7" class="btn">》YES</a>
        </div>    
                
        </div>   
        
        
    </div>
</body>
@endsection