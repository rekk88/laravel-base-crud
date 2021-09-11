@extends('layouts.app')

@section('main')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fumetti as $fumetto) 
      <tr>
        <th scope="row">{{$fumetto->id}}</th>
        <td>{{$fumetto->title}} </td>
        <td>$ {{$fumetto->price}}</td>
        <td>
          <a href="" class="btn btn-primary">Show</a>
          <a href="" class="btn btn-success">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div>
  
</div>
@endsection 