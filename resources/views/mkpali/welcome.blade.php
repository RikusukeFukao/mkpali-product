@extends('layouts.app')

@section('content')

<head> <link rel="stylesheet" href="{{ secure_asset('css/welcome.css') }}" ></head>

<a href="show1" class="skipbtn appear2">》SKIP</a>

<div class="riku">
   <img src="../images/riku-welcome.jpg">
</div>

<div class="backboard">
    <div class="dismiss1"><p class="anim-typewriter-1">この画面を見ているそこの君！</p></div>
    <div class="dismiss2"><p class="anim-typewriter-2">さぁ、「非日常」の世界に出発しよう！</p></div>
    <div class="dismiss3"><p class="anim-typewriter-3">進め方は簡単だ！</p></div>
    <div class="dismiss4"><p class="anim-typewriter-4">１、出されたお題を読む！</p></div>
    <div class="dismiss5"><p class="anim-typewriter-5">２、覚悟を決める！</p></div>
    <div class="dismiss6"><p class="anim-typewriter-6">３、自分で実行する！</p></div>
    <div class="dismiss7"><p class="anim-typewriter-7">お題を実行するかは５秒で決めるんだ！</p></div>
    <div class="dismiss8"><p class="anim-typewriter-8">お題を変えられるのは３回までだぞ！</p></div>
    <div class="dismiss9"><p class="anim-typewriter-9">最後に</p></div>
    <div class="dismiss10"><p class="anim-typewriter-10">俺は君の背中を押すことしかできない！</p></div>
    <div class="dismiss11"><p class="anim-typewriter-11">実際に行動を起こすのは君自身だ！</p></div>
    <div class="dismiss12"><p class="anim-typewriter-12">すべては君にかかっている！！！</p></div>
    <div class="dismiss13"><p class="anim-typewriter-13">さぁ！！俺についてこい！！！</p></div>
</div>    
    <a href="show1" class="yesbtn appear">》START</a>
@endsection

