@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User Loans</h1>
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
                      <th>Customer Name</th>
                      <th>Account Number</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($userloans))
                   
                      <?php
                       $i=1;
                      ?>
                        @foreach($userloans as $k=>$userloan)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$userloan->getName($userloan->user_id)}}</td>
                                <td>{{$userloan->getAccountNumber($userloan->user_id)}}</td>
                                <td>{{ucfirst($userloan->status)}}</td>
                               
                                <td class="project-actions my-project-tt">
                                    
                                  <?php
                                  if($userloan->status=='pending')
                                  {
                                    ?>
                                        <form action="{{url('admin/commission/setactive/'.encrypt($userloan->id))}}" method="get" class="edit_user_form">
                                        @csrf  
                                        
                                        <button class="btn btn-primary" type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='edit'>Activate</button> 
                                         </form>
                                  <?php
                                  }
                                  else{

                                    ?>
                                        <form action="{{url('admin/commission/setdeactivate/'.encrypt($userloan->id))}}" method="get" class="edit_user_form">
                                        @csrf  
                                        
                                        <button class="btn btn-primary" type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='edit'>Deactivate</button> 
                                         </form>
                                         <form action="{{url('admin/commission/payemi/'.encrypt($userloan->id))}}" method="get" class="edit_user_form">
                                        @csrf  
                                        
                                        <button class="btn btn-primary" type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='edit'>PayEmi</button> 
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
                  <div class="pagination">
                {{ $userloans->links() }}
                </div>
                </div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection

