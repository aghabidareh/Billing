@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>My Account</h1>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">

    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">My Account</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('update-account') }}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label"> Name</span></label>
              <div class="col-sm-8">
                <input type="text" value="{{ $data->name }}" name="name" class="form-control" id="name" placeholder="Enter Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"> Email</span></label>
                <div class="col-sm-8">
                  <input type="email" value="{{ $data->email }}" email="email" class="form-control" id="email" placeholder="Enter Email">
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label"> Password</span></label>
                <div class="col-sm-8">
                  <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password" placeholder="Enter Password">
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  (Leave It Blank If You Don't Want To Change Your Password)
              </div>
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('dashboard') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
</div>
</div>

</div>
@endsection
