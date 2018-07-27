@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/result9.css') }}">
</head>

<body>
    <div class="rikuzou">
        <img src="./images/syuuzou.gif" alt="りくぞう">
    </div>       
          
    <!--最初のコメント -->
    <div class="declare1">
        スケールのでかいことをしよう！
    </div>
    
    <div class="declare2">
        それが世界を変える第一歩だ！
    </div>
        
    <div id="wrap">
        <div class="content">
            <p>指示書<p>
        </div>
        
        <div class="demomarch">
            <img src="./images/demomarch.png" alt="demomarch">
        </div>        
        <p id="advantage">
            怖くない！偏見はよくない！<br>
            誰でもいつでも参加できる！（マガジン９でググってみよう！）<br>
            ドタ参、ドタキャンに寛容なので、リスケも簡単にできるぞ！
        </p>
        
        
        <div class="trend">
            <img src="./images/trend.png" alt="trend">
        </div>
        
        <div class="inline">
            <h1 id="number1">
                1
            </h1>    
            <div class="block">
                <h2 id="genre">
                    政治関連
                </h2>
                <p>
                    憲法とか法律とか色々な主張があるけれど、<br>
                    最終的には首相が各方面の団体から<br>
                    やめろと言われているものが大半だ！
                </p>
            </div>
        </div>
        
        <div class="inline">
            <h1 id="number2">
                2
            </h1>
            <div class="block">
                <h2 id="genre">
                    環境関連
                </h2>
                <p>
                    原発や各種基地に反対しているものをこうジャンル分けした。<br>
                    みんなの本気が世界を変えるんだ！
                </p>
            </div>
        </div>
        
        <div class="inline">
            <h1 id="number3">
                3
            </h1>
            <div class="block">
                <h2 id="genre">
                    地方自治体関連
                </h2>
                <p>
                    基本的には２と同じだが、相手がよりローカルになっているぞ。<br>
                    参加している人たちと交流してみよう！
                </p>
            </div>
        </div>
        
        <div class="experience">
            <img src="./images/experience.png" alt="experience">
        </div>
        <p id="comment">
            思っていたよりも若者が多く、<br>
            参加しやすい雰囲気があった。
        </p>
        <p id="comment">
            他の参加者の言葉選びのセンスが良く、<br>
            気持ちよく自身の思いを伝えられた。
        </p>
        <p id="comment">
            普段はがやがやした交差点を堂々と通るという、<br>
            貴重な体験ができた。
        </p>
        
        
        <div class="start">
            <img src="./images/start.png" alt="start">
        </div>
        <p id="temptation">
            君にも何か叫びたいことってあるだろ？？<br>
            「日本を変えたい！」みたいな大きなことでも、<br>
            「酢豚に入ってるパイナップルはクソ」とか、<br>
            そんな身近なことでいい。その一歩を踏み出せるかどうかはキミシダイだ！
        </p>
        <div class="emphasize">
            <img src="./images/emphasize.png" alt="emphasize">
        </div>
        
        
        <div class="recommend">
            <h3>
                玉川警察署 二子玉川交番
            </h3>
            <p>
               お巡りさんはデモのスペシャリスト。一度話を聞いてみよう！ 
            </p>
            
            <h3>
                渋谷 スクランブル交差点
            </h3>
            <p>
               ここで自分の思いを叫ぶのはさぞかし気持ちいいだろう！！ 
            </p>
            
            <h3>
                国会議事堂前
            </h3>
            <p>
               ここでの過激な行動は捕まる恐れがあるので気を付けて！！ 
            </p>
        </div>
        
        <div class="zorozoro">
            <img src="./images/zorozoro.png" alt="zorozoro">
        </div>
        
        <div class="ittekoibtn">
              最後までほんとに読んだか？<br>
        <a href="ittekoi2" class="btn">》YES</a>
        </div>
    </div>    
</body>
@endsection