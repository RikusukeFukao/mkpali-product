@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" href="{{ secure_asset('css/ng.css') }}">  
</head>

<body>
    <div class=ikujinashi>
    <span>い</span><span>く</span><span>じ</span><span>な</span><span>し</span>
    </div>
    
    
    <div class="bottom">
      <div class="btn1">
        {!! link_to_route('show1.get', 'もう一回...', null, ['class' => 'btn btn-sm btn-default']) !!}
      </div>
          
      <div class="btn2">
        {!! link_to_route('welcome.get', 'TOPに戻る', null, ['class' => 'btn btn-sm btn-primary']) !!}
      </div>
    </div>
</body>

@endsection