@extends('welcome')

@section('body')
<div>
        Hi, What is your name and how old are you? hhhh
        <a href="{{ url('yj') }}" class="btn btn-primary">Apply answer</a>
        <div>
            @include('firas')
            <div class="text-center"><a href="{{ url('firas') }}" class="btn btn-primary">The Asnwer</a></div>
        </div>

</div>


@endsection