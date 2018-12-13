<!DOCTYPE html>
<html>
<head>
	<title>Create View Page</title>
</head>
<body>
	<h1>Create Projects View Page:</h1>
	<form method="post" action="/projects">
		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="Project Title">
		</div>

		<div>
			<textarea name="description" placeholder="Project Description"></textarea>
		</div>

		<div>
			<button type="submit">Create Project</button>
		</div>
	</form>
</body>
</html>