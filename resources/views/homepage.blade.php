@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body bg-white">
<form class = "m-auto" style="width: 70%">
  <div class="form-group">
    <label for="exampleInputEmail1">Id:</label>
    <input type="email" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Enter Id">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Assignee:</label>
    <input type="email" class="form-control" id="assignee" aria-describedby="emailHelp" placeholder="Assignee">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Status:</label>
    <select class="form-control">
  <option>Pending</option>
  <option>Completed</option>
  </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Created At:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Created At">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Updated At:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Updated At">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
</div>
</div>
@endsection