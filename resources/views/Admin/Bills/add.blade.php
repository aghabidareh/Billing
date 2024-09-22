@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Add Bill</h1>
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
          <h3 class="card-title">Bills</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('stoerBill') }}" method="POST">
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
                <label for="invoice_date" class="col-sm-2 col-form-label">Invoice Date <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="date" value="{{ old('invoice_date') }}" name="invoice_date" class="form-control" id="invoice_date">
                      <span class="text-danger">{{ $errors->first('invoice_date') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="invoice_number" class="col-sm-2 col-form-label">Invoice Number <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="text" value="{{ old('invoice_number') }}" name="invoice_number" class="form-control" id="invoice_number" placeholder="Enter Invoice Number">
                      <span class="text-danger">{{ $errors->first('invoice_number') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="item_description" class="col-sm-2 col-form-label">Item Description <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <textarea name="item_description" id="item_description"class="form-control" placeholder="Enter Item Description" required></textarea>
                      <span class="text-danger">{{ $errors->first('item_description') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="total_amount" class="col-sm-2 col-form-label">Total Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('total_amount') }}" name="total_amount" class="form-control" id="total_amount" placeholder="Enter Amount Total">
                      <span class="text-danger">{{ $errors->first('total_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="cgst_rate" class="col-sm-2 col-form-label">CGST Rate <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('cgst_rate') }}" name="cgst_rate" class="form-control" id="cgst_rate" placeholder="Enter CGST Rate">
                      <span class="text-danger">{{ $errors->first('cgst_rate') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="sgst_rate" class="col-sm-2 col-form-label">SGST Rate <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('sgst_rate') }}" name="sgst_rate" class="form-control" id="sgst_rate" placeholder="Enter SGST Rate">
                      <span class="text-danger">{{ $errors->first('sgst_rate') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="igst_rate" class="col-sm-2 col-form-label">IGST Rate <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('igst_rate') }}" name="igst_rate" class="form-control" id="igst_rate" placeholder="Enter IGST Rate">
                      <span class="text-danger">{{ $errors->first('igst_rate') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="cgst_amount" class="col-sm-2 col-form-label">CGST Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('cgst_amount') }}" name="cgst_amount" class="form-control" id="cgst_amount" placeholder="Enter CGST Amount">
                      <span class="text-danger">{{ $errors->first('cgst_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="sgst_amount" class="col-sm-2 col-form-label">SGST Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('sgst_amount') }}" name="sgst_amount" class="form-control" id="sgst_amount" placeholder="Enter SGST Amount">
                      <span class="text-danger">{{ $errors->first('sgst_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="igst_amount" class="col-sm-2 col-form-label">IGST Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('igst_amount') }}" name="igst_amount" class="form-control" id="igst_amount" placeholder="Enter IGST Amount">
                      <span class="text-danger">{{ $errors->first('igst_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="tax_amount" class="col-sm-2 col-form-label">Tax Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('tax_amount') }}" name="tax_amount" class="form-control" id="tax_amount" placeholder="Enter Tax Amount">
                      <span class="text-danger">{{ $errors->first('tax_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="net_amount" class="col-sm-2 col-form-label">Net Amount <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                      <input required type="number" value="{{ old('net_amount') }}" name="net_amount" class="form-control" id="net_amount" placeholder="Enter Net Amount">
                      <span class="text-danger">{{ $errors->first('net_amount') }}</span>
                  </div>
            </div>

            <div class="form-group row">
                <label for="declration" class="col-sm-2 col-form-label">Declration <span class="text-danger">*</span></label>
                  <div class="col-sm-8">
                    <textarea name="declration" id="declration"class="form-control" placeholder="Enter Declration" required></textarea>
                      <span class="text-danger">{{ $errors->first('declration') }}</span>
                  </div>
            </div>
            

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('bills') }}" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
    </div>
</div>
</div>

</div>
@endsection