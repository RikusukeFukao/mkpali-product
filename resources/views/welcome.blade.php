@extends('layouts.app')

@section('content')
        <div class="text-center">
                <h1 class="example">君ならできる！</h1>
                {!! link_to_route('show1.get', '始める', null, ['class' => 'btn btn-lg btn-danger']) !!}
            </div>
            <div class="rikuzou">
                  <a href="welcome.blade.php"><img src="images/rikuzo.jpg" alt="rikuzo"></a>
            </div>
@endsection
