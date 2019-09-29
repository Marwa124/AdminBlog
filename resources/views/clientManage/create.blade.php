@extends('layouts.app')

@section('title')
    CreateClient
@endsection

@section('content')

<div class="container mb-3">
    <div class="row">
        <div class="col-md-9 offset-md-1">

<h3 class="mt-3">Create a New Client</h3>
<hr>
            

<form action="../dash" method="POST">

@csrf

        <div class="form-group">
          <label for="Title">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('name')}}" id="Title">
        <div class="mt-1 pl-5" style="color:tomato;background-color:pink;border-radius:2px;">{{$errors->first('name')}}</div>
    </div>
        <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" name="description" value="{{old('description')}}" id="Description" rows="3"></textarea>
                <div class="mt-1 pl-5" style="color:tomato;background-color:pink;border-radius:2px;">{{$errors->first('description')}}</div>
            </div>
        <div class="form-group">
          <label for="Number">Contact Phone</label>
          <input type="number" class="form-control" name="phone" value="{{old('phone')}}" id="Number" placeholder="number">
          <div class="mt-1 pl-5" style="color:tomato;background-color:pink;border-radius:2px;">{{$errors->first('phone')}}</div>
        </div>
        <div class="form-group">
                <label for="Status">Status</label>
              <input type="text" class="form-control" name="status" value="{{old('status')}}" id="Status">
              <div class="mt-1 pl-5" style="color:tomato;background-color:pink;border-radius:2px;">{{$errors->first('status')}}</div>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                <label for="Created_at">Created_at</label>
              <input type="date" class="form-control" name="Startdate" value="{{old('Startdate')}}" id="Created_at">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
                <label for="Updated_at">Updated_at</label>
              <input type="date" class="form-control" name="Enddate" value="{{old('Enddate')}}" id="Updated_at">
          </div>
        </div>
    </div>
        
        <button type="submit" class="btn btn-primary px-4">Save</button>
    {{-- <button  class="btn btn-danger"><a style="text-decoration: none; color:#fff;" href="{{url()->previous()}}">Exit</a></button> --}}
    <a href="{{url()->previous()}}" class="btn btn-danger ml-3 px-4" role="button" aria-pressed="true">Exit</a>
  
      </form>



    </div>
</div>
</div>
@endsection