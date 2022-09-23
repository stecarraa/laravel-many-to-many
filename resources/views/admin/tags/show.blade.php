@extends('layouts.app')
@section('title', 'tag')


@section('content')


<div class="container d-flex p-5 text-center">
    <div class="row justify-content-center w-100">
        <div class="col-6">
            <div class="card">
               
                <div class="card-body text-center">
                  <h5 class="card-title">SELECTED TAG: {{$tag->name}}</h5>
                  <a href="{{route('admin.tags.index')}}" class="btn btn-primary btn-sm w-50">Back to Index</a>
                  </div>
                </div>
              
              </div>
        </div>
    </div>
</div>
@endsection
