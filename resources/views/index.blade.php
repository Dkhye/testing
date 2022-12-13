
@extends('layouts')
<!-- this line means extends the welcome -->

@section('body')

<div style= "color: black">
@include('jeevitha')
    hello world
</div>

<div>
    Hi, What is your name and how old are you? hhhh
<a href="{{ url('yj') }}" class="btn btn-primary">Apply answer
</div>

@endsection
<!-- question 2 -->

@section('js')
<script> 

</script>
@endsection
