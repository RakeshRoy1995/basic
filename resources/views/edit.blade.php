@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<a href="{{url('/view')}}">View Data</a>
        <form class="form-login" action="{{ url('/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
        	{{csrf_field()}}
        	<input type="text" name="title" value="{{$data ->title}}">
        	<input type="text" name="body" value="{{$data ->body}}">
        	<button type="submit">Update Data</button>
        </form>
    </div>
</div>
@endsection
