<!DOCTYPE html>
<html>
<head>
	<title>Index Title</title>
</head>
<body>
	<h1>Projects Main Page:</h1>

	<ul>
	@foreach ($projects as $project)
		<li>
			<a href="/projects/{{ $project->id }}">
				{{ $project->title }}
			</a>
		</li>
	@endforeach
	</ul>
</body>
</html>
