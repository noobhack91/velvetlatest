@extends('backend_layout.master')
@section('content')
    
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Photos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Photos v1</li>
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
            <form name="update_user" method="POST" enctype="multipart/form-data" action="{{url('model/profile/photos_update/'.encrypt($user->id))}}">
            @csrf
            @method('PUT')
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
                      <label>Profile Photo:</label>
                     
                        <img height="200" width="200" src="{{ isset($user->modeles) && !empty($user->modeles->image_name) ? asset('images/'.$user->modeles->image_name) : asset('images/no-image.png') }}">
                    </div>
                    
                    <div class="form-group">
                      <label>Upload Profile Photo:</label>
                        <input type="file" name="profile_photo">
                        
                    </div>
                    
                    
                    @if(isset($gallery) && !empty($gallery) && isset($gallery[0]->filename)	)
                    
                    <table id="dataTable" class="table table-striped">
                      <thead>
                      <tr>
                        <th>Sr No.</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                        <tbody>
                          
                          @foreach($gallery as $usergallary)
                          @if(file_exists(public_path('gallarydata/' . $usergallary->filename)))
                          <?php
                          
                          $mimeType = mime_content_type(public_path('gallarydata/' . $usergallary->filename));
                          $fileType = explode('/', $mimeType)[0]; 
                          ?>
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <?php

                              if($fileType=='video'){
                                ?>
                                     <video width="320" height="240" controls>
                                        <source src="{{$usergallary->file_url}}" type="video/mp4">
                                      </video>
                                <?php
                              }
                              if($fileType=='image'){
                                ?>
                                <img src="{{$usergallary->file_url}}"  class="round-small">
                                <?php
                              }

                              ?>
                            </td>
                            <td><a href="{{url('model/galary/delete/'.encrypt($usergallary->id))}}" data-id="{{$usergallary->id}}"  class="remove-btn btn">Remove</a></td>
                          </tr>
                          @endif
                          @endforeach
                        </tbody> 
                     </table>
                    @endif
                    <div class="form-group">
                      <label>Upload Gallary:</label>
                        <input type="file" name="gallary[]" multiple>
                        
                    </div>
                    
                    
                    
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="my-tt-button">
        <div class="row">
          <div class="col-12">
            <!--<a href="#" class="btn btn-secondary">Cancel</a>-->
            <input type="submit" value="Update" class="btn btn-success">
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


