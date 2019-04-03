
@extends('layouts.app')

@section('content')

<div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
    <div class="card ">
        <div class="card-header bg-primary text-white h3">
            <i class="fas fa-building"></i>
            Companies
            <a class="btn btn-success float-right" href="/companies/create"><i class="fas fa-plus-circle"></i>  Create New</a>

        </div>
        <div class="card-body">

            <ul class="list-group">

                @if(empty($companies ->count() > 0))
                    <p class="h5 text-danger">You have no company yet !</p>
                @endif

                @foreach($companies as $company)



                    <a class="list-group-item btn btn-outline-info h5 mt-2" href="/companies/{{$company->id}}">{{$company->name}}</a>

                @endforeach


            </ul>


        </div>
    </div>
</div>

    @endsection