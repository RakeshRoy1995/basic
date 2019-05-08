@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<a href="{{url('/view')}}">View Data</a><br>
    	<a href="{{url('/paypal')}}">Paypal Data</a>
        <form action="{{url('/insert')}}" method="post">
        	{{csrf_field()}}
        	<input type="text" name="title" placeholder="title">
        	<input type="text" name="body" placeholder="body">
        	<button type="submit">add</button>
        </form>
    </div>
</div>
@endsection
