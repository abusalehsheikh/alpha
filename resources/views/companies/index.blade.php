
@extends('layouts.app')

@section('content')

<div class="col-3 offset-4">
    <div class="card ">
        <div class="card-header bg-primary text-white h3">
            <i class="fas fa-building"></i>  Companies <a class="btn btn-success float-right" href="/companies/create"><i class="fas fa-plus-circle"></i>  Create New</a>
        </div>
        <div class="card-body">
            <ul class="list-group">

                @foreach($companies as $company)

                    <a class="list-group-item btn btn-outline-info h5 mt-2" href="/companies/{{$company->id}}">{{$company->name}}</a>

                @endforeach

            </ul>

        </div>
    </div>
</div>

    @endsection