@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pages</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Pages v1</li>
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
                      <th>Page Name</th>
                      <th>Location</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($pages))
                   
                      <?php
                       $i=1;
                      ?>
                        @foreach($pages as $k=>$page)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$page->page_name}}</td>
                                <td>{{$page->location}}</td>
                                
                                <td class="project-actions my-project-tt">
                                    
                                    <form action="{{url('admin/page/delete/'.encrypt($page->id))}}" method="post" class="delete_user_form">
                                    @csrf  
                                    @method('DELETE')    
                                    <button onclick="messagetemplatedelchkpage(this)" class="btn btn-danger" type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button> 
                                  </form> 
                                  <form action="{{url('admin/page/edit/'.encrypt($page->id))}}" method="get" class="edit_user_form">
                                    @csrf  
                                    
                                    <button class="btn btn-primary" type="submit" class="btn btn-xs btn-primary btn-flat show_confirm" data-toggle="tooltip" title='edit'>Edit</button> 
                                  </form>
                                
                            </tr>
                            <?php
                            $i=$i+1;
                            ?>
                        @endforeach
                    @endif
                    </tbody>
                  </table>
                  <div class="pagination">
                {{ $pages->links() }}
                </div>
                </div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection

