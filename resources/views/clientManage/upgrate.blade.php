@extends('layouts.app')

@section('title')
    ModifyClient
@endsection

@section('content')

<div id="content-wrapper">

        <div class="container-fluid">

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
                      <th></th>
                      <th>Title</th>
                      <th>Edit</th>
                      <th>Delete</th>

                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach ($clients as $client)
                    <tr>
                      <div class="row">
                      <td>{{$client->id}}</td>
                        <td>{{$client->title}}</td>
                    <td><a href="{{url('dash/' . $client->id . '/edit')}}" role="button" class="btn btn-warning">Edit</a></td>
                    <td>
                    <form action="{{route('dash.destroy', ['id' => $client->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>

                  </div>
                  <!--End of Row-->
                  </tr>
                    @endforeach
                  </tbody>
                </table>
          
              </div>
            </div>
  
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

@endsection