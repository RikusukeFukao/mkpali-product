@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result8.css') }}">
    </head>

    <body>
        <div class="rikuzou">
            <img src="./images/syuuzou.gif" alt="りくぞう">
        </div>       
              
        <!--最初のコメント -->
        <div class="yokuyatta">
            テンション上げろ！<br>  
            いぇーい！卍！！
        </div>
        
        
        <div id="wrap">
            
            <!--指示書-->
            <div class="content">
                <p>指示書</p>
            </div>
            
            <div class="part1">
                <p>
                    他人の目が気になるって？
                    そんなの気にしてちゃーしょうがない。<br>
                    だが気になってしまう時もあるだろう。<br>
                    そんな時は「誰かを待っているフリ作戦」発動だ！！<br>
                    電話をかけるふりをしたり、<br>
                    やたら携帯や時計を気にしてみよう。<br>
                    さらに「この会社のプリクラ機は新たにこんな機能を搭載したのか」とか言って<br>
                    メモするフリをして、「これは仕事ですよ」アピール！<br>
                    周りから「すげー」って思われるように努力するんだ。<br>
                    ただしその「すげー」は、メーカーの人ということに対してなのか、<br>
                    一人でプリクラに来ているその度胸に対してなのかは永遠の謎である。
                </p>
            </div> 
            
            <div class="part2">
                <h3>どこに行けばいいかわからねぇ！？グズグズするな！</h3>
                <p>
                    とりあえず渋谷のセンター街へ行くんだ。<br>
                    卍に紛れてテンションあげろ！！！
                </p>
            </div>        
        
            <div class="part3">
                <h3>どんなポーズをとればいいかわからねぇ？！</h3>
                <p>
                    盛れるポーズを紹介！！
                </p>
            </div>
            
            
            <div class="pose1">
                
                <img src="./images/pose3.jpg" alt="pose1" width=200 height=200></div>
            
                <p class="pose">
                    まずは片手であごをつまんでみるんだ！<br>
                    顔をシャープに見せてくれ、小顔効果抜群だ！
                </p>
            </div>
            
            
            <div class="pose2">
                <img src="./images/pose3.jpg" alt="pose2" width=200 height=200></div>
               
                <p class="pose">
                    お次は両手で虫歯ポーズ！もはや王道！<br>
                    フェイスラインを完全に隠しずるい盛りテク！
                </p>
            </div>
            
            
            <div class="pose3">
                    <img src="./images/pose3.jpg" alt="pose3" width=200 height=200></div>
                
                <p class="pose">
                    最後に進化系、顔の上下をピースで挟んじゃえ！<br>
                    顔の立て幅がギュッと縮まって見えるぞ！
                </p>
            </div>
                    
        
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection