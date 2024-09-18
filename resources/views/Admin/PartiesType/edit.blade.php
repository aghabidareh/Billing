@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Add Party</h1>
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
          <h3 class="card-title">Parties Type</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('updatePartyType' , $party->id) }}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="partiestype" class="col-sm-2 col-form-label">Party Type Name <span class="text-danger">*</span></label>
              <div class="col-sm-8">
                <input required type="text" value="{{ $party->parties_type_name }}" name="parties_type_name" class="form-control" id="partiestype" placeholder="Enter Party Type Name">
                <span class="text-danger">{{ $errors->first('parties_type_name') }}</span>
                
            </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('parties-type') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
</div>
</div>

</div>
@endsection