@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="{{url('home')}}">Add Data</a>
        <table class="test-center" border="1">
        	<tr>
        		<th>Title</th>
        		<th>Body</th>
        		<th>Edit</th>
        		<th>Delete</th>
        	</tr>
        	@foreach($data as $key)
        	<tr>
        		<td>{{$key ->title}}</td>
        		<td>{{$key ->body}}</td>
        		<td><a href="{{url('/edit/'.$key->id) }}">Edit</a></td>
        		<td><a href="{{url('/del/'.$key->id) }}">Delete</a></td>
        	</tr>
        	@endforeach
        </table>
    </div>
</div>
@endsection
