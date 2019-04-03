@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">

            <div class="jumbotron">
                <h1>{{ $company->name }}</h1>
                <p class="lead">{{ $company->description }}</p>
                {{--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>--}}
            </div>


            <div class="row bg-white">

                @foreach($company->projects as $project)

                    <div class="col-lg-4 border-right p-2">
                        <h2>{{ $project->name }}</h2>
                        <p class="text-danger">{{ $project->description }}</p>

                        <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project &raquo;</a></p>
                    </div>

                @endforeach

            </div>

{{--            Show Section--}}
            @include('partials.comment')
{{--            Comment Form--}}
            <div class="container-fluid bg-white">

                <form method="post" action="{{ route('comments.store') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="commentable_type" value="App\Company">
                    <input type="hidden" name="commentable_id" value="{{$company->id}}">


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

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="card ">
                <div class="card-header bg-primary text-white">
                    Action
                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <a class="btn btn-outline-secondary mt-2" href="/companies/{{ $company->id }}/edit"><i class="far fa-edit"></i>  Edit</a>

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

                        <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                            method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}
                        </form>


                        <a class="btn btn-outline-success mt-2" href="/projects/create/{{$company->id}}"><i class="fas fa-briefcase"></i>  Add Project</a>
                        <a class="btn btn-outline-info mt-2" href="/companies"><i class="fas fa-building"></i>  My Company</a>

                    </ul>
                </div>
            </div>
            <div class="list-group mt-4">
                <li class="list-group-item active">Member</li>
                <a href="#" class="list-group-item btn btn-link">Edit</a>
                <a href="#" class="list-group-item btn btn-link"><i class="fas fa-trash-alt"></i>  Delete</a>
                <a href="#" class="list-group-item btn btn-link">Add Member</a>

            </div>
        </div>
    </div>
</div>

    @endsection