@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        Create New Project
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('projects.store') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="project-name">Name <span class="required">*</span></label>
                                <input placeholder="Enter Name"
                                       id="project-name"
                                       name="name"
                                       class="form-control"
                                       required
                                />
                                <input type="hidden" name="company_id" value="{{ $company_id }}"/>
                            </div>
                            <div class="form-group">
                                <label for="project-description">Description</label>
                                <textarea placeholder="Enter Description"
                                          id="project-description"
                                          name="description"
                                          class="form-control autosize-target text-left"
                                          rows="5"
                                          style="resize: vertical"
                                ></textarea>
                            </div>

                            @if( $companies != null)
                            <div class="form-group">
                                <label for="project-company">Select Company</label>
                                <select name="company_id" id="project-company" class="form-control">
                                    @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        @endforeach
                                </select>

                            </div>
                            @endif

                            <div class="form-group">

                                <input type="submit" class="btn btn-outline-primary" value="Submit">

                            </div>

                        </form>
                    </div>
                </div>

            </div><!--/.col-xs-12.col-sm-9-->

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        Action
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <a class="btn btn-outline-info mt-2" href="/projects">My Project</a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection