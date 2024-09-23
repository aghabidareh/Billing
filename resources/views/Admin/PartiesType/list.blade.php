@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties Type</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              @include('message')
              <div class="row">
                <div class="col-md-12">

                  <div class="card">
                    <div class="card-header">
                      <h1 class="card-title">Search Party Type</h1>
                    </div>
                    <form action="" method="GET">
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-2">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ Request()->id }}" placeholder="ID">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="parties_type_name">Party Type Name</label>
                            <input type="text" name="parties_type_name" id="parties_type_name" value="{{ Request()->parties_type_name }}" class="form-control" placeholder="Party Type Name">
                          </div>
                          <div style="clear: both;"></div>
                          <br>
                          <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Search</button>
                            <a href="{{ route('parties-type') }}" class="btn btn-success">Reset</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List</h3>
                      <a href={{ route('addPartyType') }} class="btn btn-primary float-right">Add New Party Type</a>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 40px">Parties Type Name</th>
                            <th style="width: 40px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($parties as $party)
                            <tr>
                              <td>{{ $party->id }}</td>
                              <td>{{ $party->parties_type_name }}</td>
                              <td>
                                  <a href="{{ route('editPartyType' , $party->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                  <a onclick="return confirm('are you sure to delete the record?')" href="{{ route('deletePartyType' , $party->id) }}" class="btn btn-danger"><i class="fas fa-trash alt"></i></a>
                              </td>
                            </tr>  
                          @endforeach
                          
                        </tbody>
                      </table>
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-md m-0 float-right">
                          {!! $parties->appends(Request::except('page'))->links() !!}
                        </ul>
                      </div>
                    </div>
                    <!-- /.card-body -->

                  </div>

                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
</div>

@endsection