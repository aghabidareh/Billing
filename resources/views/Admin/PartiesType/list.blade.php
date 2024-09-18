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
                      <h3 class="card-title">List</h3>
                      <a href={{ route('addParty') }} class="btn btn-primary float-right">Add New Party Type</a>
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
                                  <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                  <a href="#" class="btn btn-danger"><i class="fas fa-trash alt"></i></a>
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