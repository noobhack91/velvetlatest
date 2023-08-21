@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Blogs</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blogs v1</li>
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
                      <th>Title</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($blogs))
                   
                      <?php
                       $i=1;
                      ?>
                        @foreach($blogs as $k=>$blog)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$blog->blog_title}}</td>
                                
                                <td class="project-actions my-project-tt">
                                    
                                    <form action="{{url('admin/blog/delete/'.encrypt($blog->id))}}" method="post" class="delete_user_form">
                                    @csrf  
                                    @method('DELETE')    
                                    <button onclick="messagetemplatedelchk(this)" class="btn btn-danger" type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button> 
                                  </form> 
                                  <form action="{{url('admin/blog/edit/'.encrypt($blog->id))}}" method="get" class="edit_user_form">
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
                {{ $blogs->links() }}
                </div>
                </div>
                
                <!-- /.col -->
              </div>
      </div><!-- /.container-fluid -->
</section>
</div>

@endsection

