@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Parties</h1>
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
                      <h1 class="card-title">Search Party</h1>
                    </div>
                    <form action="" method="GET">
                      <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-1">
                            <label for="id">ID</label>
                            <input type="text" name="id" id="id" class="form-control" value="{{ Request()->id }}" placeholder="ID">
                          </div>
                          <div class="form-group col-md-5">
                            <label for="full_name">Party Name</label>
                            <input type="text" name="full_name" id="full_name" value="{{ Request()->full_name }}" class="form-control" placeholder="Full Name">
                          </div>
                          <div class="form-group col-md-5">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ Request()->phone_number }}" class="form-control" placeholder="Phone Number">
                          </div>
                          <div style="clear: both;"></div>
                          <br>
                          <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Search</button>
                            <a href="{{ route('parties') }}" class="btn btn-success">Reset</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">List</h3>
                      <a href={{ route('addParty') }} class="btn btn-primary float-right">Add New Party</a>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th >#</th>
                            <th>Parties Name</th>
                            <th>Full Name</th>
                            <th >Phone Number</th>
                            <th>Address</th>
                            <th>Account Holder Name</th>
                            <th >Account Number</th>
                            <th>Bank Name</th>
                            <th>IFSC CODE</th>
                            <th >Branch Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($records as $record)
                          <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->parties_type_name }}</td>
                            <td>{{ $record->full_name }}</td>
                            <td>{{ $record->phone_number }}</td>
                            <td>{{ $record->address }}</td>
                            <td>{{ $record->account_holder_name }}</td>
                            <td>{{ $record->account_number }}</td>
                            <td>{{ $record->bank_name }}</td>
                            <td>{{ $record->ifsc_code }}</td>
                            <td>{{ $record->brach_address }}</td>
                            <td>{{ date('d-m-Y' , strtotime($record->created_at)) }}</td>
                            <td>
                              <a href="{{ route('editParty' , $record->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                              <a onclick="return confirm('are you sure to delete the record?')" href="{{ route('deleteParty' , $record->id) }}" class="btn btn-danger"><i class="fas fa-trash alt"></i></a>
                            </td>
                          </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-md m-0 float-right">
                          {!! $records->appends(Request::except('page'))->links() !!}
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