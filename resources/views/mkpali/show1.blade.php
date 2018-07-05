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
@endsection