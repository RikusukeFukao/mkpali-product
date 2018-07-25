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
                <h3>つかみ</h3>
                <p>
                    昔は他の人1人紹介しよかー思たらよーけ時間かけて一枚一枚絵描きよったんに、<br>
                    今じゃカメラでパシャっとやってもう終わり。<br>
                    えらい便利な世の中やでほんま。<br>
                    でもな、たまには原点回帰してな、自分で自分の絵描いてみんのもええと思うねん。<br>
                    ちゃうやん、時間あるけど何も予定ないとか、<br>
                    何かしたいけど何も思いつかへんみたいな、そういう日あるやろ。<br>
                    そん時に自分の絵でも描いてみたらなんか人生変わるかもしれへんやん。知らんけど。<br>
                    え？お前誰やって？<br>
                    やかましいわ。気にしたら負けや。
                </p>
            </div> 
            
            <div class="part2">
                <h3>自画像のメリット</h3>
                
                <h3 class="point">部屋のおしゃれなレイアウトに！</h3>
                <p class="point-content">
                    友達の部屋に入って家主の自画像おいてる家見たことあるか？<br>
                    ちょっと怖がられるかもしれないけど、<br>
                    それが君のアイデンティティになるぞ！
                </p>
                
                <h3 class="point">自分の新しい魅力の再発見</h3>
                <p class="point-content">
                    自画像を描くためには、当然ながら自分の��を一日中見ている必要がある。<br>
                    えくぼがプリティーとか、奥二重が素敵とか、新しい発見があるかも！

                </p>
                
                <h3 class="point">SNSの投稿のネタに！</h3>
                    <p>
                    できた作品をSNSにあげれば、いろいろな人から奇異の目で見られ、<br>
                    承認欲求が満たされること間違いなしだ！
                    </p>
            </div>        
        

            <div class="part3">
                <h3>自画像を描くオススメスポット</h3>
                
                    <h3 class="point">家</h3>
                        <p>
                        自画像を描く時の一番スタンダードな場所だ！<br>
                        周りの目を気にすることなく絵に集中することができるぞ！
                        </p>
                        
                    <h3 class="point">玉川沿い</h3>
                        <p>
                        まさか君が自分の顔面を描いているなんて誰も思わない！<br>
                        空気もきれいだし天気が良ければおすすめだ！
                        </p>
                        
                    <h3 class="point">カフェ</h3>
                        <p>
                        気も散るし周りの目線も気になるし絵を描く難易度としては最高峰だ！<br>
                        これを乗り越えれば新しい自分になれるぞ！
                        </p>
            </div>
            
            
            <div class="part４">
                <h3>おすすめスポット</h3>
                
                    <h3 class="point">コクヨ　芝山工場</h3>
                        <p>
                        出来立ての文房具を工場までもらいに行こう！
                        </p>
                        
                    <h3 class="point">ホルベイン工業　小阪工場</h3>
                        <p>
                        出来立ての水彩絵の具を工場までもらいに行こう！
                        </p>
                        
                    <h3 class="point">王子製紙　苫小牧工場</h3>
                        <p>
                        出来立ての画用紙を工場までもらいに行こう！
                        </p>
            </div>
            
     <!--fontのdiv       -->
     </div>          
    <!--wrapのdiv-->
    </div>
    </body>
    
</html>
@endsection