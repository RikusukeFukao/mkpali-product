@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" href="{{ secure_asset('css/logo.css') }}">

    <div class="ore">
          <a href=logo.blade.php><img src="../images/ore.png"></a>
    </div>
    <div class="rikuzo">
        <a href=logo.blade.php><img src="../images/smile.png"></a>
    </div>

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
    countdown('window.location.replace("welcome")', 3);
  });
  
  </script>
  
  <div class="reflection"></div>
  
</head>
@endsection