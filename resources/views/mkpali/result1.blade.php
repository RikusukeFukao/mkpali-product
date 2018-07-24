@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result1.css') }}">
    </head>

    <body>
        <div class="rikuzou">
            <img src="./images/puri-top.jpg" alt="りくぞう">
        </div>       
        
        <div class="font">      
        <!--最初のコメント -->
        <div class="yokuyatta">
            <span>テンション上げろ！<br>  
            いぇーい！卍！！</span>
        </div>
        
        
        <div id="wrap">
            
            <!--指示書-->
            <div class="content">
                <p>指示書</p>
            </div>
            
            <div class="part1">
                <p>
                    他人の目が気になるって？
                    そんなの気にしてちゃー<span style= "color:blue;">しょうがない</span>。<br>
                    だが気になってしまう時もあるだろう。<br>
                    そんな時は<span style= "color:orange;">「誰かを待っているフリ作戦」</span>発動だ！！<br>
                    電話をかけるふりをしたり、<br>
                    やたら携帯や時計を気にしてみよう。<br>
                    さらに<span style= "color:green;">「この会社のプリクラ機は新たにこんな機能を搭載したのか」</span>とか言って<br>
                    メモするフリをして、「これは仕事ですよ」アピール！<br>
                    周りから<span style= "color:red;">「すげー」</span>って思われるように努力するんだ。<br>
                    ただしその<span style= "color:red;">「すげー」</span>は、メーカーの人ということに対してなのか、<br>
                    一人でプリクラに来ているその度胸に対してなのかは<span style= "color:purple;">永遠の謎である</span>。
                </p>
            </div> 
            
            <div class="part2">
                <h3>どこに行けばいいかわからねぇ！？<br>グズグズするな！</h3>
                <p>
                    とりあえず渋谷のセンター街へ行くんだ。<br>
                    卍に紛れて<span style= "color:#FF66CC;">テンションあげろ！！！</span>
                </p>
            </div>        
        
            <div class="part3">
                <h3>どんなポーズをとればいいかわからねぇ？！</h3>
                <p>
                    盛れるポーズを紹介するぞ！！
                </p>
            </div>
            
            
            <div class="part4">
                
                <img src="./images/pose1.jpg" alt="pose1" width=400 height=400>
                
                <div class="fukidashi">
                    <img src="./images/fukidashi.jpg" alt="fukidashi" width=500 height=200>
                </div>
                
                <p class="pose1">
                    まずは片手であごをつまんでみるんだ！<br>
                    顔をシャープに見せてくれ、<span style= "color:green;">小顔効果抜群</span>だ！
                </p>
                
                <img src="./images/pose2.jpg" alt="pose2" width=450 height=350>
                
                <div class="fukidashi">
                    <img src="./images/fukidashi.jpg" alt="fukidashi">
                </div>
               
                <p class="pose2">
                    お次は両手で虫歯ポーズ！もはや<span style= "color:blue;">王道！</span><br>
                    フェイスラインを完全に隠しずるい<span style= "color:red;">盛りテク！</span>
                </p>

                    <img src="./images/pose3.jpg" alt="pose3" width=300 height=350>
                    
                    <div class="fukidashi">
                    <img src="./images/fukidashi.jpg" alt="fukidashi" width=500 height=200>
                </div>
                
                <p class="pose3">
                    最後に進化系、顔の上下をピースで挟んじゃえ！<br>
                    顔の立て幅が<span style= "color:orange;">ギュッ</span>と縮まって見えるぞ！
                </p>
            </div>
            
            <div class-"images">
                <img src="./images/puri-1.jpg" alt="fukidashi" width=100 height=80 class="puri-1">
                <img src="./images/puri-2.jpg" alt="fukidashi" width=80 height=80 class="puri-2">
                <img src="./images/puri-3.jpg" alt="fukidashi" width=80 height=80 class="puri-3">
                <img src="./images/puri-4.jpg" alt="fukidashi" width=80 height=80 class="puri-4">
                <img src="./images/puri-5.jpg" alt="fukidashi" width=80 height=80 class="puri-5">
                <img src="./images/puri-6.jpg" alt="fukidashi" width=80 height=80 class="puri-6">
                <img src="./images/puri-7.jpg" alt="fukidashi" width=80 height=80 class="puri-7">
                <img src="./images/puri-5.jpg" alt="fukidashi" width=80 height=80 class="puri-8">
                <img src="./images/puri-2.jpg" alt="fukidashi" width=80 height=80 class="puri-9">
            </div>
                
                
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection