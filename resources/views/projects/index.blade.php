<!DOCTYPE html>
<html>
<head>
	<title>Index Title</title>
</head>
<body>
	<h1>Projects Main Page:</h1>

	<ul>
	@foreach ($projects as $project)
		<li>{{ $project->title }}</li>
	@endforeach
	</ul>
</body>
</html>