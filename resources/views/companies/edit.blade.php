@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        Edit Company
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('companies.update',[$company->id]) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="company-name">Name <span class="required">*</span></label>
                                <input placeholder="Enter Name"
                                       id="company-name"
                                       name="name"
                                       class="form-control"
                                       value="{{ $company->name }}"
                                       required

                                />
                            </div>
                            <div class="form-group">
                                <label for="company-description">Description</label>
                                <textarea placeholder="Enter Description"
                                          id="company-description"
                                          name="description"
                                          class="form-control autosize-target text-left"
                                          rows="5"
                                          style="resize: vertical"
                                >{{ $company->description }}</textarea>
                            </div>
                            <div class="form-group">

                                <input type="submit" class="btn btn-outline-primary" value="Update">

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

                            <a class="btn btn-outline-info mt-2" href="/compnanies/{{ $company->id }}/show">View compnanies</a>
                            <a class="btn btn-outline-info mt-2" href="/compnanies">All Company</a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection