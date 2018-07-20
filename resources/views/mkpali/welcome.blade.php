@extends('layouts.app')

@section('content')

<head> <link rel="stylesheet" href="{{ secure_asset('css/welcome.css') }}" ></head>
            <div class="text-center span">
                <h1>この画面を見ているそこの君！<br>
                さぁ、「非日常」の世界に出発しよう！<br>
                <br>
                <br>
                進め方はとっても簡単！<br>
                ①出されたお題を読む<br>
                ②覚悟を決める<br>
                ③自分で実行する<br>
                <br>
                <br>
                出されたお題を実行するかどうかは<br>
                10秒以内で決めなければゲームオーバーだ！<br>
                出されたお題を変えることができるのは３回までだぞ！<br>
                <br>
                <br>
                最後に俺は君の背中を押すことしかできない！<br>
                実際に行動を起こすのは君自身だ！<br>
                すべては君にかかっている！！！<br>
                さぁ！！俺についてこい！！！</h1>
                <a href='show1' class="btn">
	            <i class="fa fa-power-off"></i>
                </a>
            </div>
@endsection
