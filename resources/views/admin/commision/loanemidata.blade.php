@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Loan Emi List</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Loans v1</li>
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
                <div class="col-12 table-responsive">
                  <table id="dataTable" class="table table-striped">
                    <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Date</th>
                      <th>Total Interest</th>
                      <th>Beginning Balance</th>
                      <th>Monthly Emi</th>
                      <th>Ending Balance</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($loanemidata))
                   
                      <?php
                       $i=1;
                      ?>
                        @foreach($loanemidata as $k=>$loanemi)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$loanemi->date}}</td>
                                <td>{{$loanemi->total_interest}}</td>
                                <td>{{$loanemi->begning_bal}}</td>
                                <td>{{$loanemi->monthly_emi}}</td>
                                <td>{{$loanemi->ending_bal}}</td>
                                <td>{{$loanemi->status}}</td>
                                
                                <td class="project-actions my-project-tt">
                                    
                                  <?php
                                  if($loanemi->status=='unpaid')
                                  {
                                    ?>
                                        <form action="{{url('admin/commission/emipaying/'.encrypt($loanemi->id).'/'.encrypt($loanemi->loan_id)).'/'.encrypt($i)}}" method="get" class="edit_user_form">
                                        @csrf  
                                        
                                        <button class="btn btn-primary" type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='edit'>Pay</button> 
                                         </form>
                                  <?php
                                  }
                                  ?>
                                 
                                </td>
                            </tr>
                            <?php
                            $i=$i+1;
                            ?>
                        @endforeach
                    @endif
                    </tbody>
                  </table>
                 
                </div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection

