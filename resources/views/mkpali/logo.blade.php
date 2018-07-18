@extends('layouts.app')

@section('content')
<head><link rel="stylesheet" href="{{ secure_asset('css/logo.css') }}"></head>

            <div class=aaa>
              俺についてこい！
            </div>

            <div class="ore">
                  <a href=logo.blade.php><img src="../images/ore.png" alt="俺についてこい"></a>
            </div>
            <div class="rikuzo">
                <a href=logo.blade.php><img src="../images/shuzo.png" alt="りくぞう"></a>
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
          countdown('window.location.replace("http://205d1e128d2a4089b7ee32569afc569f.vfs.cloud9.us-east-2.amazonaws.com/welcome?")', 30);
        });
        
        </script>
        </head>
@endsection