@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Current Balance:-  <span class="{{ (float)$balance < 0 ? 'btn-danger' : 'btn-success'}}">{{$balance ? round($balance,2) : 0}}</span></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Payments v1</li>
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
      <!-- <span data-href="user/export" id="export" class="btn btn-success btn-sm" onclick="exportTasks(event.target);">Export</span> -->
                <div class="col-12 table-responsive">
                  <table id="dataTable" class="table table-striped">
                    <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>From</th>
                      <th>To</th>
                      <th>Total Amount</th>
                      <th>Admin Commission</th>
                      <th>Broker Commission</th>
                      <th>Type</th>
                      <th>Status</th>
                      <th>Payment Type</th>
                      <th>Payment Mode</th>
                      <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($payments))
                   
                      <?php
                       $i=1;
                      ?>
                        @foreach($payments as $k=>$payment)
                            <tr class="{{ $payment->type=='credit' ? 'table-success' : 'table-danger' }}">
                                <td>{{$i}}</td>
                                <td>{{$payment->getCustomerName($payment->from_id)}}</td>
                                <td>{{$payment->getCustomerName($payment->to_id)}}</td>
                                <td>{{$payment->amount}}</td>
                                <td>{{$payment->admin_commission}}</td>
                                <td>{{$payment->broker_commission}}</td>
                                <td>{{ucfirst($payment->type)}}</td>
                                <td>{{$payment->status}}</td>
                                <td>{{strtoupper($payment->payment_type)}}</td>
                                <td>{{strtoupper($payment->payment_mode)}}</td>
                                <td>{{$payment->created_at}}</td>
                                
                            </tr>
                            <?php
                            $i=$i+1;
                            ?>
                        @endforeach
                    @endif
                    </tbody>
                  </table>
                  <div class="pagination">
                {{ $payments->links() }}
                </div>
                </div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection

