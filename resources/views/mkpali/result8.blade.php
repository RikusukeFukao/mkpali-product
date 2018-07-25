@extends('layouts.app')

@section('content')

<html>
    
    <head>
        <link rel="stylesheet" href="{{ secure_asset('css/result8.css') }}">
    </head>

    <body>
        
        <div class="rikuzou">
            <img src="./images/gaka.png" alt="りくぞう">
        </div>       
              
        <!--最初のコメント -->
        <div class="yokuyatta">
            耳描くんむずい！<br>  
            ゴッホが削ぎ落すんも<br>
            わかるわ！
        </div>
        
        <div class="font">

        
        <div class="sample sample02">
            
        <!--指示書-->
            <div class="content">
                <p>指示書</p>
            </div>
            
                <img src="./images/jiga-hand.png" alt="りくぞう" class="hand">
            

            
            <div class="part1">
                <p>
                    昔は他の人1人紹介しよかー思たら<br>
                    よーけ時間かけて一枚一枚絵描きよったんに、<br>
                    今じゃカメラでパシャっとやってもう終わり。<br>
                    えらい便利な世の中やでほんま。<br>
                    でもな、たまには原点回帰してな、<br>
                    自分で自分の絵描いてみんのもええと思うねん。<br>
                    ちゃうやん、時間あるけど何も予定ないとか、<br>
                    何かしたいけど何も思いつかへんみたいな、<br>
                    そういう日あるやろ。<br>
                    そん時に自分の絵でも描いてみたら<br>
                    なんか人生変わるかもしれへんやん。知らんけど。<br>
                    え？お前誰やって？<br>
                    やかましいわ。気にしたら負けや。
                </p>
            </div> 
            
            <div class="part2">
                <h3>自画像のメリット</h3>
                
                <h4 class="point">👆部屋のおしゃれなレイアウトに！</h4>
                <div class="point-content">
                    友達の部屋に入って<br>
                    家主の自画像おいてる家見たことあるか？<br>
                    ちょっと怖がられるかもしれないけど、<br>
                    それが君のアイデンティティになるぞ！
                </div>
                
                <h4 class="point">👆自分の新しい魅力の再発見</h4>
                <div class="point-content">
                    自画像を描くためには、<br>
                    当然ながら自分の顔を一日中見ている必要がある。<br>
                    えくぼがプリティーとか、奥二重が素敵とか、<br>
                    新しい発見があるかも！

                </div>
                
                <h4 class="point">👆SNSの投稿のネタに！</h4>
                    <div class="point-content">
                    できた作品をSNSにあげれば、<br>
                    いろいろな人から奇異の目で見られ、<br>
                    承認欲求が満たされること間違いなしだ！
                    </div>
            </div>        
        

            <div class="part3">
                <h3>自画像を描くオススメスポット</h3>
                
                    <h4 class="point">☕家</h4>
                        <div class="point-content">
                        自画像を描く時の一番スタンダードな場所だ！<br>
                        周りの目を気にすることなく絵に集中することができるぞ！
                        </div>
                        
                    <h4 class="point">☕玉川沿い</h4>
                       <div class="point-content">
                        まさか君が自分の顔面を描いているなんて誰も思わない！<br>
                        空気もきれいだし天気が良ければおすすめだ！
                        </div>
                        
                    <h4 class="point">☕カフェ</h4>
                        <div class="point-content">
                        気も散るし周りの目線も気になるし<br>
                        絵を描く難易度としては最高峰だ！<br>
                        これを乗り越えれば新しい自分になれるぞ！
                        </div>
            </div>
            
            
            <div class="part4">
                <h3>おすすめスポット</h3>
                
                    <h4 class="point">✐コクヨ　芝山工場</h4>
                        <div class="point-content">
                        出来立ての文房具を工場までもらいに行こう！
                        </div>
                        
                    <h4 class="point">✐ホルベイン工業　小阪工場</h4>
                        <div class="point-content">
                        出来立ての水彩絵の具を工場までもらいに行こう！
                        </div>
                        
                    <h4 class="point">✐王子製紙　苫小牧工場</h4>
                        <div class="point-content">
                        出来立ての画用紙を工場までもらいに行こう！
                        </div>
            </div>
            
            
       <div class="ittekoibtn">
              最後までほんとに読んだか？<br>
    <a href="ittekoi8" class="btn">》YES</a>
    </div>
        
        
     <!--fontのdiv       -->
     </div>          
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection