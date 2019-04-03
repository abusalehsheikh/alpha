@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">

            <div class="card card-body bg-light">
                <h1>{{ $project->name }}</h1>
                <p class="lead">{{ $project->description }}</p>
            </div>


            {{--            Show Section--}}
            @include('partials.comment')
            {{--            Comment Form--}}
            <div class="container-fluid bg-white">

                <form method="post" action="{{ route('comments.store') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="commentable_type" value="App\Project">
                    <input type="hidden" name="commentable_id" value="{{$project->id}}">


                    <div class="form-group pt-3">
                        <label for="comment-content"><i class="fas fa-comments"></i>  Comment</label>
                        <textarea placeholder="Enter Comment"
                                  id="comment-content"
                                  name="body"
                                  class="form-control autosize-target text-left"
                                  rows="3"
                                  style="resize: vertical"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comment-url">Url</label>
                        <textarea placeholder="Enter URl"
                                  id="comment-url"
                                  name="url"
                                  class="form-control autosize-target text-left"
                                  rows="1"
                                  style="resize: vertical"
                        ></textarea>
                    </div>
                    <div class="form-group">

                        <input type="submit" class="btn btn-outline-primary" value="Submit">

                    </div>

                </form>
            </div>

        </div>


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    Action
                </div>
                <div class="card-body">

                    @if($project->user_id == Auth::user()->id)

                    <ul class="list-group">

                        <a class="btn btn-outline-secondary mt-2" href="/companies/{{ $project->id }}/edit"><i class="far fa-edit"></i>  Edit</a>

                        <a   class="btn btn-outline-danger mt-2"
                        href="#"
                            onclick="
                            var result = confirm('Are you sure you wish to delete this Company?');
                                if( result ){
                                        event.preventDefault();
                                        document.getElementById('delete-form').submit();
                                }
                                    "
                                    >
                            <i class="fas fa-trash-alt"></i>  Delete</a>

                        <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}"
                            method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}
                        </form>


                        <a class="btn btn-outline-success mt-2" href="/projects/create"><i class="fas fa-plus-circle"></i>  Create New Project</a>
                        <a class="btn btn-outline-info mt-2" href="/projects"><i class="fas fa-briefcase"></i>  My Projects</a>

                    </ul>
                        @endif
                </div>
            </div>
            <div class="list-group mt-4">
                <div class="h4">Add Member</div>

                <form id="add-user" action="{{ route('projects.adduser') }}"
                      method="POST">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input name="project_id" type="hidden" class="form-control" value="{{ $project->id }}">
                        <input name="email" type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Add</button>
                        </div>

                    </div>
                </form>

            </div>

            <div class="list-group mt-4">
                <div class="h4">Team Member</div>

                @foreach($project->users as $user)
                    <a href="#" class="lead" style="text-decoration: none;">{{$user->name}}</a>
                @endforeach


            </div>
        </div>
    </div>
</div>

    @endsection