@extends('layouts.app')

@section('content')
      <div class="show">  
        <div class="text-center">
          <?php
          $r = rand(0, 2);
          if ($r == 0) {
          ?>
            
          <h1>一人でプリクラ、とってこい！</h1>
          <h2>レベル<br>★★★☆☆</h2>  
          <div class="yesbtn">
          {!! link_to_route('result1.get', '》俺がやる!', null, ['class' => 'btn btn-lg btn-primary']) !!}
          </div>
          
          <?php }elseif ($r == 1){ ?>
          
          <h1>一人でプリクラ、とってこい!</h1>
          <h2>レベル<br>★★★☆☆</h2>  
          <div class="yesbtn">
          {!! link_to_route('result2.get', '》俺がやる!', null, ['class' => 'btn btn-lg btn-primary']) !!}
          </div>
          
          <?php }elseif ($r == 2){ ?>
          
          <h1>一人でプリクラ、とってこい!</h1>
          <h2>レベル<br>★★★☆☆</h2>  
          <div class="yesbtn">
          {!! link_to_route('result3.get', '》俺がやる!', null, ['class' => 'btn btn-lg btn-primary']) !!}
          </div>
  
          <?php } ?>
          
          <div class="nobtn">
          {!! link_to_route('ng.get', '》仕方ねえ、譲るわ…!', null, ['class' => 'btn btn-lg btn-default']) !!}
          </div>  
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
          countdown('window.location.replace("https://mkpali-product.herokuapp.com/ng")', 100);
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