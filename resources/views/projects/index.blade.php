
@extends('layouts.app')

@section('content')

<div class="col-3 offset-4">
    <div class="card ">
        <div class="card-header bg-primary text-white h3">
            <i class="fas fa-briefcase"></i>  Projects <a class="btn btn-success float-right" href="/projects/create"><i class="fas fa-plus-circle"></i>  Create New</a>
        </div>
        <div class="card-body">
            <ul class="list-group">

                @foreach($projects as $project)

                    <a class="list-group-item btn btn-outline-info h5 mt-2" href="/projects/{{$project->id}}">{{$project->name}}</a>

                @endforeach

            </ul>

        </div>
    </div>
</div>

@endsection