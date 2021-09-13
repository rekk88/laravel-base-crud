@extends('layouts.app')

@section('main')

<table class="table table-dark m-0 p-0">
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
        <td> {{$fumetto->price}}</td>
        <td>
          <!-- nei ref devo mettere la route name che vedo in console con
               php artisan route list-->
          <a href="{{ route('comic.show' , [$fumetto->id]) }}" class="btn btn-primary">Show</a>
          <a href="{{ route('comic.edit' , [$fumetto->id]) }}" class="btn btn-success">Edit</a>
          <form method="POST" action="{{ route('comic.destroy' , [$fumetto->id]) }}" class="d-inline-block">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class="btn btn-danger">
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div>
  
</div>
@endsection 