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
          <h3 class="card-title">Parties</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('stoerParty') }}" method="POST">
            @csrf
          <div class="card-body">

            <div class="form-group row">
                <label for="fullName" class="col-sm-2 col-form-label">Parties Type Name <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <select name="parties_type_id" class="form-control" required>
                        <option value="">Select Parties Type Name</option>
                        @foreach ($partiesType as $partyType)
                            <option value="{{ $partyType->id }}">{{ $partyType->parties_type_name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

            <div class="form-group row">
              <label for="fullName" class="col-sm-2 col-form-label">Full Name <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input required type="text" value="{{ old('full_name') }}" name="full_name" class="form-control" id="fullName" placeholder="Enter Your Full Name">
                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                </div>
            </div>

            <div class="form-group row">
                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('phone_number') }}" name="phone_number" class="form-control" id="phoneNumber" placeholder="Enter Your Phone Number">
                      <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('address') }}" name="address" class="form-control" id="address" placeholder="Enter Your Address">
                      <span class="text-danger">{{ $errors->first('address') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="accountHolderName" class="col-sm-2 col-form-label">Account Holder Name <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('account_holder_name') }}" name="account_holder_name" class="form-control" id="accountHolderName" placeholder="Enter Your Account Holder Name">
                      <span class="text-danger">{{ $errors->first('account_holder_name') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="accountNumber" class="col-sm-2 col-form-label">Account Number <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('account_number') }}" name="account_number" class="form-control" id="accountNumber" placeholder="Enter Your Account Number">
                      <span class="text-danger">{{ $errors->first('account_number') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="bankName" class="col-sm-2 col-form-label">Bank Name <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('bank_name') }}" name="bank_name" class="form-control" id="bankName" placeholder="Enter Your Bank Name">
                      <span class="text-danger">{{ $errors->first('bank_name') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="IFSCCODE" class="col-sm-2 col-form-label">IFSC CODE <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('ifsc_code') }}" name="ifsc_code" class="form-control" id="IFSCCODE" placeholder="Enter Your IFSC CODE">
                      <span class="text-danger">{{ $errors->first('ifsc_code') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="brachAddress" class="col-sm-2 col-form-label">Branch Address <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('brach_address') }}" name="brach_address" class="form-control" id="brachAddress" placeholder="Enter Your Branch Address">
                      <span class="text-danger">{{ $errors->first('brach_address') }}</span>
                  </div>
            </div>
            
            

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('parties') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
</div>
</div>

</div>
@endsection