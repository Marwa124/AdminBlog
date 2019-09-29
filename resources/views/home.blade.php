@extends('layouts.app')

@section('title')
    DashBoard
@endsection

@section('content')

<div id="content-wrapper">

    <div class="container-fluid">
  @include('includes.message')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
      </ol>
  
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Add a New Client</div>
            </div>
          <a class="card-footer text-white clearfix small z-1" href="{{url('dash/create')}}">
              <span class="float-left">Create</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">Modify or Delete an Existent Client</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="{{url('edit')}}">
                <span class="float-left">Edit & Delete</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Up Coming!
                <p style="font-size:12px; ">Social Services Management</p>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Up Coming!</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        
      </div>
  
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Client Attributes</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>PhoneNumber</th>
                  <th>Start date</th>
                  <th>End date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>PhoneNumber</th>
                    <th>Start date</th>
                    <th>End date</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($clients as $client)
                <tr>
                    <td>{{$client->title}}</td>
                    <td>{{$client->description}}</td>
                    <td>{{$client->status}}</td>
                    <td>{{$client->phone}}</td>
                    <td>{{$client->created_at}}</td>
                    <td>{{$client->updated_at}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at {{$lastUpdate->updated_at}}</div>
      </div>
  
    </div>
    <!-- /.container-fluid -->
  
    
    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright © Your Website 2019</span>
        </div>
      </div>
    </footer>
  
  </div>
  <!-- /.content-wrapper -->

@endsection
