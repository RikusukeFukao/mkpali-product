@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="{{ secure_asset('css/result3.css') }}">
</head>

<body>
    <div class="rikuzou">
        <img src="./images/teateru.png" alt="りくぞう">
    </div>       
          
    <!--最初のコメント -->
    <div class="real">
        リアルを感じろ！！<br>
        思想を深めろ！！！
    </div>
        
        
    <div id="wrap">
        <div class="content">
            <p>指示書<p>
        </div>
        
        <div class="part1">
                <p>
                裁判は事前に予約するもお金を払う必要もない。<br>
                裁判所へ行き、裁判が行われている法廷へ入って傍聴席に座る、<br>
                これだけ。<br>
                映画やドラマでは味わえないリアルを感じ、<br>
                様々な感情が出てきていろいろ考えさえられること間違いなし！<br>
                </p>
        </div>
                
        <div class="part2">
            <div class="enjoy">楽しみ方</div>
            
            <div class="hanmer">
            <img src="./images/courticon.jpg" alt="木槌" height="90">
            </div>
            
            <h3>*「地方刑事事件」の「新件」を選べ！</h3>
            <p>
                裁判所の入り口に開廷表がある。<br>
                開廷表にはその日どんな裁判があるのか書いてあるぞ。<br>
                なかでもわかりやすく面白いといわれているのは「地裁刑事」だ。<br>
                「地裁刑事」の冊子の中から聞きたいものを選ぼう！<br>
                中でも、「新件」は判決直前まで一通りの裁判の流れを見られる。<br>
                理解しやすいぞできること間違いなし！<br>
            </p>
        </div>
        
        <div class="part3">
            <h3>*被告人が女性の事件を選べ！</h3>
            <p>
                男性に比べ、女性の被告人は証言中よくしゃべり、<br>
                急に泣き出したり激昂したりと、感情表現が豊かな場合が多い。<br>
                『彼氏や夫に勧められるがまま犯行に手を染めた』など<br>
                『男がらみの事件』が多いので、<br>
                下世話な好奇心が刺激されるぞ！<br>
            </p>
        </div>
        
        <div class="part4">
            <h3>*お昼は裁判所内の食堂で取れ！</h3>
            <p>
                お昼時の裁判所内の食堂にはたくさんの裁判官や検察官や弁護人、<br>
                また保釈中の被告人やその家族など、たくさんの関係者がいる。<br>
                『超オフレコ』な危険すぎる会話を聞ける可能性も...<br>
            </p>
        </div>
            
        <div class="part5">
            <h3>さあ今、クリックして裁判傍聴に出発だ！！！</h3>
            <a href="http://www.courts.go.jp/map.html">》裁判所の場所を見る</a>
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