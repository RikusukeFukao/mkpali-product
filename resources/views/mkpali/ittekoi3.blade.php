@extends('layouts.app')

@section('content')

<head> <link rel="stylesheet" href="{{ secure_asset('css/ittekoi.css') }}" ></head>


<div class="riku">
   <img src="../images/riku-smile.jpg">
</div>

<div class="backboard">
    <div class="dismiss1"><p class="anim-typewriter-1">参加を恐れるな！</p></div>
    <div class="dismiss2"><p class="anim-typewriter-2">壮大なヒューマンドラマを見届けろ！!</p></div>
    <div class="dismiss3"><p class="anim-typewriter-3">さあ、行ってこい！！！</p></div>
</div>    
    <a href="/" class="yesbtn appear">》TOPに戻る</a>


@endsection