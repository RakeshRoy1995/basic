<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
<ul>
	@foreach ($posts as $post)
	<li>
		{{ $post->email }}
	</li>
	@endforeach
</ul>
{{ $posts->links() }}
</div>

<div class="div alert alert-success">
	
</div>

</body>
</html>