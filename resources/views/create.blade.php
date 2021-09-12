@extends('layouts.app')

@section('main')

<form class="row g-3" action="{{route('home.store')}}" method="post">
  @csrf
  <!-- title -->
  <div class="col-md-6">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title">
  </div>
  <!-- thumb -->
  <div class="col-md-6">
    <label for="image" class="form-label">Thumb</label>
    <input type="text" class="form-control" name="thumb" id="image">
  </div>
  <!-- price -->
  <div class="col-12">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" id="price">
  </div>
  <!-- series -->
  <div class="col-12">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" name="series" id="series">
  </div>
  <!-- sale date -->
  <div class="col-md-6">
    <label for="sale_date" class="form-label">Sale Date</label>
    <input type="text" class="form-control" name="sale_date" id="sale_date">
  </div>
   <!-- description -->
   <div class="col-md-6">
    <label for="description" class="form-label">Description</label>
    <textarea type="text-area" class="form-control" name="description" id="description"></textarea>
  </div>
  <!-- type -->
  <div class="col-md-4">
    <label for="type" class="form-label">Type</label>
    <select id="type" name="type" class="form-select">
      <option value="comic book">comic book</option>
      <option value="graphic novel">graphic novel</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
@endsection