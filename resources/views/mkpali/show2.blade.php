@extends('layouts.app')

@section('content')
      <div class="show"> 
        <div class="text-center">
          <?php
          $r = rand(0, 8);
          if ($r == 0) { ?>
            
          <h1>一人でプリクラ、撮ってこい！</h1>
          <a href="result1" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 1){ ?>
          
          <h1>今すぐパチンコ、打ってこい！</h1>
          <a href="result2" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 2){ ?>
          
          <h1>裁判傍聴してこいや！</h1>
          <a href="result3" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 3){ ?>
          
          <h1>ダーツの旅、行ってこいや！！</h1>
          <a href="result4" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 4){ ?>
          
          <h1>シーシャ家で作ってみろや！</h1>
          <a href="result5" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 5){ ?>
          
          <h1>ナンパ行け！ナンパ！</h1>
          <a href="result6" class="yesbtn">俺がやる!</a>
          
          
          
          
          <?php }elseif ($r == 7){ ?>
          
          <h1>自画像描いて、みませんか？</h1>
          <a href="result8" class="yesbtn">俺がやる!</a>
          
          
          <?php }elseif ($r == 6){ ?>
          
          <h1>デモ、参加してみろや！</h1>
          <a href="result9" class="yesbtn">俺がやる!</a>
          
          
          <?php } ?>
          
          <a href="show3" class="nobtn">仕方ねえ、譲るわ…!</a>
        </div>
        
        <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js" charset="UTF-8"></script>
        <script type="text/javascript">
        
        function countdown($call, $count) {
          $('#count').text($count);
            if($count) {
              setTimeout(function() {
                $count = $count-1;
                countdown($call, $count);
              }, 1000);
            }else {
              $('body').append($('<scr'+'ipt>'+$call+';<\/scr'+'ipt>'));
          }
        }// end function
        $(function() {
          countdown('window.location.replace("ng")', 7);
        });
        
        </script>
        
          <link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
        </head>
        
        <body>
          <div class="countdown">
            <span id="count"></span>
          </div>
        </body>
        
      </div>
@endsection