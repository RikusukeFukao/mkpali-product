@extends('layouts.app')

@section('content')
        <div class="center jumbotron">
            <div class="text-center">
                <?php
	            $r = rand(0, 2);
	            if ($r == 0) {
                ?>
                
                <p>指示内容.result1</p>
                {!! link_to_route('result1.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}

                <?php }elseif ($r == 1){ ?>
                <p>指示内容.result2</p>
                {!! link_to_route('result2.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        
                <?php }elseif ($r == 2){ ?>
                <p>指示内容.result3</p>
                {!! link_to_route('result3.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}


                <?php } ?>

                {!! link_to_route('show2.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
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
          countdown('window.location.replace("http://ef28ed522306466db86cf242e950c098.vfs.cloud9.us-east-2.amazonaws.com/ng?")', 5);
        });
        
        </script>
        </head>
        
        <body>
            あと<span id="count"></span>秒しかねえぞ！ 
        </body>
        
@endsection