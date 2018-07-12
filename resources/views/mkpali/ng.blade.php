@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" href="{{ secure_asset('css/ng.css') }}">  
</head>

<body>
    <h1>   
    いくじなし
    </h1>
   
    <div class="btn1">
            {!! link_to_route('show1.get', 'もう一回...', null, ['class' => 'btn btn-lg btn-default']) !!}
    </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="btn2">
            {!! link_to_route('welcome.get', '一刻も早く死にます', null, ['class' => 'btn btn-lg btn-primary']) !!}
    </div>
</body>

@endsection