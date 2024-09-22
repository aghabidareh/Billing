@extends('Admin.layouts.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bills</h1>
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
                      <a href={{ route('addBill') }} class="btn btn-primary float-right">Add New Bill</a>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>

                            @php
                                $totalAmount = 0
                            @endphp

                          <tr>
                            <th >#</th>
                            <th>Parties Type Name</th>
                            <th>Invoice Date</th>
                            <th>Invoice Number</th>
                            {{-- <th >Item Description</th> --}}
                            <th>Total Amount</th>
                            {{-- <th>CGST Rate</th>
                            <th >SGST Rate</th>
                            <th>IGST Rate</th>
                            <th>CGST Amount</th>
                            <th >SGST Amount</th>
                            <th>IGST Amount</th> --}}
                            <th>Tax Amount</th>
                            <th>Net Amount</th>
                            {{-- <th>Declration</th> --}}
                            <th>Action</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            @php
                                $totalAmount += $record->total_amount
                            @endphp
                            <tr>
                              <td>{{ $record->id }}</td>
                              <td>{{ $record->parties_type_name }}</td>
                              <td>{{ $record->invoice_date }}</td>
                              <td>{{ $record->invoice_number }}</td>
                              <td>{{ $record->total_amount }}</td>
                              {{-- <td>{{ $record->cgst_rate }}</td>
                              <td>{{ $record->sgst_rate }}</td>
                              <td>{{ $record->igst_rate }}</td>
                              <td>{{ $record->cgst_amount }}</td>
                              <td>{{ $record->sgst_amount }}</td>
                              <td>{{ $record->igst_amount }}</td> --}}
                              <td>{{ $record->tax_amount }}</td>
                              <td>{{ $record->net_amount }}</td>
                              <td>
                                <a href="{{ route('editBill' , $record->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a onclick="return confirm('are you sure to delete the record?')" href="{{ route('deleteBill' , $record->id) }}" class="btn btn-danger"><i class="fas fa-trash alt"></i></a>
                              </td>
                            </tr>
                              @endforeach

                              @if (!empty($totalAmount))
                                  <tr>
                                    <th colspan="4">Total (Rs)</th>
                                    <td>Rs. {{ number_format($totalAmount , 2) }}</td>
                                    <th colspan="1"></th>
                                  </tr>
                              @endif
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