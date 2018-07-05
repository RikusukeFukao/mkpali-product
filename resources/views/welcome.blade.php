@extends('layouts.app')

@section('content')
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to Mkpali</h1>
                {!! link_to_route('show1.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
@endsection
