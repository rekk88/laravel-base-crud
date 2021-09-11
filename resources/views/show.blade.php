@extends('layouts.app')

@section('main')

<div class="container">
  <div class="row">
    <div class="col">
      <h1>{{$f->title}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img src="{{$f->thumb}}" alt="{{$f->title}}">
    </div>

    <div class="col-md-6">
      <p>{{$f->description}}</p>
    </div>
  </div>
</div>


@endsection