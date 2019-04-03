
@extends('layouts.app')

@section('content')

    <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <div class="card ">
            <div class="card-header bg-primary text-white h3">
                <i class="fas fa-building"></i>
                Projects
                <a class="btn btn-success float-right" href="/projects/create"><i class="fas fa-plus-circle"></i>  Create New</a>

            </div>
            <div class="card-body">

                <ul class="list-group">

                    @if(empty($projects ->count() > 0))
                        <p class="h5 text-danger">You have no project yet !</p>
                    @endif

                    @foreach($projects as $project)



                        <a class="list-group-item btn btn-outline-info h5 mt-2" href="/companies/{{$projects->id}}">{{$project->name}}</a>

                    @endforeach


                </ul>


            </div>
        </div>
    </div>

@endsection