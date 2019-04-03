@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <div class="card ">
                    <div class="card-header bg-primary text-white">
                        Add Compnany
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('companies.store') }}">
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="compnany-name">Name <span class="required">*</span></label>
                                <input placeholder="Enter Name"
                                       id="compnany-name"
                                       name="name"
                                       class="form-control"
                                       required

                                />
                            </div>
                            <div class="form-group">
                                <label for="compnany-description">Description</label>
                                <textarea placeholder="Enter Description"
                                          id="compnany-description"
                                          name="description"
                                          class="form-control autosize-target text-left"
                                          rows="5"
                                          style="resize: vertical"
                                ></textarea>
                            </div>
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
                            <a class="btn btn-outline-info mt-2" href="/companies"><i class="fas fa-building"></i>  My Company</a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection