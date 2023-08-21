@extends('backend_layout.master')
@section('content')
    
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Loan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Calculator v1</li>
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
                    <form id="loan" name="loan" method="POST">
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
                                 <select name="customer"  id="user_payment_select" required>
                                   <option value=''>Select Customer</option>
                                     @if(!empty($customers))
                                       @foreach($customers as $customer)
                                       <option value="{{$customer->id}}">{{$customer->name}}</option>
                                       @endforeach
                                     @endif
                                 </select>
                            </div>
                            <div class="form-group">
                                 
                                 <label>Esci User:</label>
                                 <select name="esci_user"  id="esci_select" required>
                                   <option value=''>Select Esci</option>
                                     @if(!empty($esci_users))
                                       @foreach($esci_users as $esci_user)
                                       <option value="{{$esci_user->id}}">{{$esci_user->name}}</option>
                                       @endforeach
                                     @endif
                                 </select>
                            </div>
                            <div class="form-group">
                              <label>Esci user amount:</label>
                                <input type="number" id="esci_user_amount" name="esci_user_amount" required>
                            </div>
                            <div class="form-group">
                              <label>Mortgage amount:</label>
                                <input type="number" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                              <label>Mortgage term in years:</label>
                                <input type="number" id="term" name="term" required>
                            </div>
                           
                            <div class="form-group">
                              <label>Interest rate per year:</label>
                                <input type="number" id="rate" name="rate" required>
                            </div>
                             <div class="form-group">
                              <label> Start Date of Loan:</label>
                                <input type="date" id="start_date" name="start_date" required>
                            </div>
                            <input type="hidden" id="customerid" name="customerid" value="">
                            <div class="row">
                                <div class="col-12">
                                 
                                  <input type="submit" value="Calculate" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <table class='table table-bordered my-table' id="result" width="100%" style="display:none">
                        <tr><td colspan="3"><b>Payment Information: </b></td></tr>
                        <tr><td>Your total payment will be:</td>
                            <td class='table-info'><span id="totalpayment"></span></td>
                        </tr>
                        <tr><td> Your total interest payments will be:</td>
                            <td class='table-info'><span id="totalinterset"></span></td>
                        </tr>
                        <tr> <td>Your monthly payment will be: </td>
                             <td class='table-info'><span id="totalmonthly"></span></td>
                        </tr>
                    </table>

                    <div id="calculation_bkend_loan"></div>

                <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
            <div class="my-tt-button"></div>
                
               
        </div>
</section>
</div>

@endsection


