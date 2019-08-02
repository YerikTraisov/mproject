@extends('layout')

@section('styles')
    <style>
        .projects {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            list-style-type: decimal;
            padding-top: 50px;
        }
    </style>
@endsection

@section('content')

<ul class="projects">
    @foreach($projects as $project)
    <li class='project_item'>
        <a href="{{action('ProjectController@show', $project->id)}}">{{$project->name}}</a>
    </li>
    @endforeach
</ul>

@endsection
