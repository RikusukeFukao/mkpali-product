@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result2.css') }}">
    </head>

    <body>
        <!--<img src="./images/waterdrops.png" alt="fixedImage" id="froatButton1">-->
        <!--<img src="./images/waterdrops2.png" alt="fixedImage" id="froatButton2">-->
        
        <div class="rikuzou">
            <img src="./images/yatta.png" alt="りくぞう">
        </div>       
              
        <!--最初のコメント -->
        <div class="yokuyatta">
            人生そのものが一つの賭け事だ！<br>
            今しかできないことをしよう！
        </div>
        
        
    <div id="wrap">

        <!--指示書-->
        <!--<div class="content">-->
        <!--    <p>指示書<p>-->
        <!--</div> -->
        
    <!--Instructionのエフェクトかけてみたコード-->
            <svg viewBox="0 0 960 300">
            <symbol id="s-text">
            <text text-anchor="middle" x="50%" y="80%">Instruction</text>
            </symbol>
            
            <g class = "g-ants">
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            <use xlink:href="#s-text" class="text-copy"></use>
            </g>
            </svg>
    
    

        
        
        
        
        
        <!--パチンコスロットの流れ-->
        <div id="introduction">
            <h3>パチンコ・スロットの流れ</h3>
            <div class=pachinkoicon>
                <img src="../images/iconpachinko.jpg" alt="pachi" height="180" width="180" />
            </div>
                <p>
                ①お金を入れる<br>
                ②プレイする<br>
                大当たりが出るまで①、②の繰り返し。<br>
                超EASY！
                </p>
        </div>
       
        
        <!--ビギナーへのすすめ-->
        <div id="beginner">
            <div class=beginicon>
            <img src="../images/beginner.jpg" alt="beginner" height="180" width="180" />
            </div>
            
            <p>
                ✍　イヤホンをつけて入店することで、耳へのダメージをこと和らげることができるぞ。<br>
                ✍　若者の多い店の方が、客の民度は高い。田舎の僻地より、繁華街を攻めよう。<br>
                ✍　何かあればすぐに店員さんを呼ぼう。光の速さで来てくれるぞ。<br>
                ✍　自分の知っているアニメや漫画の台に座ると、より楽しめること間違いなし。<br>
                ✍　嫌な偏見を持つのはやめよう。パチンコ屋は「夢の国」だ！！！
            </p>
        </div>
        
        <div class= "advantage">
            パチンコ屋の良いところ
        </div>
        
        <secrtion>
            <div class=rikuzosoukai>
            <img src="../images/gattu.png" alt="soukai" class="soukai-img" />
            </div>
        
            <div class=soukai>
               ① 圧倒的爽快感
            </div>
            
            <div class="soukaicontents">
                <p>
                技術の進歩に伴いパチンコも日々進化しているんだ。<br>
                ド派手な演出と効果音、さらには金銭を投資しているリスクも相まって、
                大当たりした時にはあたかもクスリをキメたかのような爽快感を得ることができるぞ！
                </p>
            </div>
        </section>
            
            
        <section>
            <div class=rikuzopositive>
                <img src="../images/banzai.png" alt="positive" class="positive-img" />
            </div>
            
            <div class= "positive">
                ②圧倒的ポジティブ思考
            </div>
            
            <div class="positivecontents">
                <p>
                パチンコ屋には、覇気のない顔をした哀れな成人がはびこっている。
                どんなに社会で辛いことがあっても、店で「ああ、こいつらよりはマシ」と考えることで
                自信を取り戻すことができるぞ！
                </p>
            </div>
        </section>
        
        <section>
            <div class=rikuzolucky>
                <img src="../images/nayami.png" alt="positive" class="lucky-img" />

            </div>
            
            <div class= "lucky">
                ③圧倒的運試し
            </div>
            
            <div class="luckycontents">
                <p>
                全てのパチンコにおいて、絶対に当たるという保証はどこにもない。
                すべては時の運ってことだ！時には大勝ちする日もあれば、逆もまた然り。<br>
                レッツギャンブル！！！
                </p>
            </div>
        </section>
        
        
        
        
        <div class= "recommendation">
            ☆おすすめパチンコ☆
        </div>
        
        
        <div class="shop">
           ✍エスパス日拓溝の口店
        </div>  
        
         
        <div class= "map1">    
                <img src="./images/pachi-map-mizo.jpg" alt="溝の口"  >
        </div>  
        
        <div class="shopinfo">
            個人的に相性がいいお店だ！Aタイプのスロットがおすすめ！
        </div>
        
        
        
        <!--エスパス日拓新大久保ライト館-->
        <div class="shop">
            ✍エスパス日拓新大久保ライト館
        </div>
        
        <div class= "map2">    
                <img src="./images/map2.png" alt="新大久保" >
        </div>
        
        
        
        <div class="shopinfo">
            東京では珍しい低貸専門店だ！長く遊びたいならここ！
        </div>
        
        
        <!--ビーム大塚-->
        <div class="shop">
            ✍ビーム大塚
        </div>
        
        <div class= "map3">    
                <img src="./images/map3.png" alt="新大久保"  >
        </div>
        
        
        
        <div class="shopinfo">
            私が人生最大の一撃3万5千発を出したホールだ！リングがおすすめ！<br>
            
            <br>
            <br>            
            <br>
            <br>
            <br>
            
          <div class="ittekoibtn">
              最後までほんとに読んだか？<br>
          <a href="ittekoi2" class="btn">》YES</a>
          </div>



  <body>
        
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection