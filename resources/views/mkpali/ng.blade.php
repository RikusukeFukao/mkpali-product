@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" href="{{ secure_asset('css/ng.css') }}">  
</head>

<body>
    <div class=aaa>   
    <span display: inline-block;"><span style= "color:black;">いくじ</span>なし</span>
    
    </div>
   
    <div class="btn1">
            {!! link_to_route('show1.get', 'もう一回...', null, ['class' => 'btn btn-sm btn-default']) !!}
    </div>
        
    <div class="btn2">
            {!! link_to_route('welcome.get', '一刻も早く死にます', null, ['class' => 'btn btn-sm btn-primary']) !!}
    </div>
</body>

@endsection