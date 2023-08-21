@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Payment</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Payment v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div>
</div>
      
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <form name="add_payment" method="POST" enctype="multipart/form-data" action="{{url('admin/payment/create')}}">
            {{csrf_field()}}
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">General</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body my-card-tt">
                    <div class="form-group">
                     
                      <label>Customer:</label>
                      <select name="customer" class="select"  id="user_payment_select">
                        <option>Select Customer</option>
                          @if(!empty($customers))
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                          @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Amount:</label>
                        <input type="number" id="amount" name="amount" required>
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" required>
                        <option value="">Select Status</option>
                          <option value="pending">Pending</option>
                          <option value="completed">Completed</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Date:</label>
                        <input type="datetime-local" id="payment_date" name="payment_date" required>
                    </div>
                    <div class="form-group at-latecharges">
                      <label for="">Overdue Late Charges</label>
                      <input type="checkbox" id="overdue_late_fee" name="overdue_late_fee" value="yes">
                    </div> 
                    <div class="form-group" id="latecharges_div">
                      <label>Late Charges:</label>
                        <input type="number" id="late_charge" name="late_charge">
                    </div>

                    <input type="hidden" id="customerid" name="customerid" value="">
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Add Payment" class="btn btn-success">
          </div>
        </div>
    </form>
</div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection


