@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/result5.css') }}">
</head>

<body>
    <div class="rikuzou">
        <img src="./images/yatta.png" alt="りくぞう">
    </div>       
          
    <!--最初のコメント -->
    <div class="declare">
        水たばこうめえ！
    </div>
        
        
    <div id="wrap">
        <div class="content">
            <p>指示書<p>
        </div>
                
        <div class="part1">
            <h3>シーシャって何？？？</h3>
            <p>
                地方上がりの卍が吸いたがる水たばこだ！<br>
                雰囲気がエモいBarとか行くと高確率でお目にかかれるぞ！<br>
                体にいいとか悪いとかは一旦置いといて、<br>
                誰かと語りたい時とかは映えるしchillだからおすすめだ！<br>
            </p>
        </div>
        
        <div class="part2">
            <p class="ellipse">そもそも、シーシャって作れるの？</p>
            
            <div class="shisha">
                <img src="./images/shishamake.png" alt="makeshisha">
            </div>
            
            <p>
                ・用意するもの→やる気、行動力、本気<br>
                ・作り方→Googleで検索したらすぐ出てくるぞ！<br>
            </p>
        </div>
        
        <div class="part3">
            <p class="ellipse">は？ふざけんな！作り方教えろや！</p>
            <p>
                と思っているあなたへ。<br>
                私たちはあなたに行動の「きっかけ」を与えることしかできません。<br>
                「あ、シーシャって自分でも作れるんだ。」<br>
                この製品は、そういった思考のきっかけを提示することで、<br>
                あなたが「日常」の枠から抜け出す<br>
                お手伝いをするためにリリースされました。<br>
                ここで作り方が気になっているあなたは、<br>
                もう「非日常」の入り口に立っています。<br>
                私たちがここで手取り足取り説明しなくても、<br>
                あなたの背中にある立派な「好奇心」の翼が、<br>
                あなたの行動を導いてくれるはずです。<br>
                さあ、お行きなさい。後悔しない選択を。Good Luck。
            </p>
        </div>
        
        <div class="part4">
            <h3>あなたへのおススメ</h3>
            <p class="margin-bottom">
                シーシャ専門店チルイン渋谷センター街店<br>
                何をどう考えても絶対に店で吸った方が<br>
                いろいろお得なんで、一応張っておくわ。
            </p>
        
        <div class="map">
        <img src="./images/shishamap.png" alt="map">
        </div>
        <div class="ittekoibtn">
            最後までほんとに読んだか？<br>
        <a href="ittekoi5" class="btn">》YES</a>
        </div>
    </div>
</body>
@endsection