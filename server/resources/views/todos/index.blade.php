@extends('layouts.app')

@section('title')
    Todo List
@endsection

@section('content')
<h1 class="text-center my-5">TODOS PAGE</h1>
<div class="justify-content-center row">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todos
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{ $todo->name }}
                            @if(!$todo->completed)
                                <a href= "/todos/{{ $todo->id }}/completed" class="btn btn-info float-right btn-sm">Completed</a>
                            @endif
                            <a href= "/todos/{{ $todo->id }}" class="btn btn-primary float-right mr-2 btn-sm">View</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
