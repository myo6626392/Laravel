@extends('layout.app')
@section('title','Todo Page')
@section('content')

<h1>Complete Todo</h1>
<ul>
    @foreach ($completeTodos as $todo )
    <li>
        {{ $todo->title }} - {{ $todo->completed? 'Completed' : 'Not Completed' }}
        <a href="{{ route('todos.edit',$todo->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('todos.destroy',$todo->id) }} " method='POST' style="display: inline";>
            @csrf
            @method('DELETE')
         {{-- hidden input field with method DELETE overwrite --}}
         <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
        </form>
    </li>

    @endforeach
</ul>

<h1>Uncomplete Todo</h1>
<ul>
    @foreach ($uncompletedTodos as $todo )
    <li>
        {{ $todo->title }} - {{ $todo->completed? 'Completed' : 'Not Completed' }}
        <a href="{{ route('todos.edit',$todo->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('todos.destroy',$todo->id) }} " method='POST' style="display: inline";>
            @csrf
            @method('DELETE')
         {{-- hidden input field with method DELETE overwrite --}}
         <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
        </form>
    </li>

    @endforeach
</ul>


@endsection

