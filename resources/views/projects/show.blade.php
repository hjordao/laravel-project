@extends('layout')

@section('content')
	<h1 class="title">{{ $project->title }}</h1>
	<div class="content">{{ $project->description }}</div>
	@if ($project->tasks->count())
		<div class="box">
			@foreach ($project->tasks as $task)
				<div>
					<form method="POST" action="/tasks/{{ $task->id }}">
						@method('PATCH')
						@csrf
						<label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed" >
							<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
							{{ $task->description }}
						</label>
					</form>
				</div>
			@endforeach
		</div>
	@endif
	
	<form class="box" method="POST" action="/projects/{{ $project->id }}/tasks">
		@csrf
		
		<div class="field">
			<label class="label" for="description">New Task</label>
			<div class="control">
				<input type="text" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="New Task" required value="{{ old('description') }}">
			</div>
		</div>
		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Add Task</button>
			</div>
		</div>
		@include('errors')
	</form>
	
	<div class="field">
		<a class="is-link" href="/projects/{{ $project->id }}/edit">Edit</a>
	</div>
@endsection
